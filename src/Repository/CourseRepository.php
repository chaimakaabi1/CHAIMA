<?php

namespace App\Repository;

use App\Entity\Course;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\NonUniqueResultException;
use Doctrine\ORM\NoResultException;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\Query;
use Doctrine\ORM\Query\Expr\Join;

/**
 * @extends ServiceEntityRepository<Course>
 *
 * @method Course|null find($id, $lockMode = null, $lockVersion = null)
 * @method Course|null findOneBy(array $criteria, array $orderBy = null)
 * @method Course[]    findAll()
 * @method Course[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CourseRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Course::class);
    }

//    /**
//     * @return Course[] Returns an array of Course objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('c.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }
    /**
     * Find a course by name.
     *
     * @param string $name
     * @return Course|null
     */
    public function searchByName(string $name)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.title LIKE :name')
            ->setParameter('name', '%' . $name . '%')
            ->getQuery()
            ->getResult();
    }
    public function calculateAverageRatingForCourse(int $courseId): ?float
    {
        $qb = $this->getEntityManager()->createQueryBuilder();
        $result = $qb
            ->select('AVG(r.rating) as averageRating')
            ->from('App\Entity\Review', 'r')
            ->where('r.courseid = :courseId')
            ->setParameter('courseId', $courseId)
            ->getQuery()
            ->getOneOrNullResult();

        return $result['averageRating'];
    }
    public function searchQuery($searchInput): Query
    {
        $qb = $this->createQueryBuilder('c')
            ->where('c.title LIKE :searchInput')
            ->setParameter('searchInput', '%' . $searchInput . '%');

        return $qb->getQuery();
    }

    /**
     * @throws NonUniqueResultException
     * @throws NoResultException
     * @throws NonUniqueResultException
     * @throws NoResultException
     */
    public function findRandomCourse(): ?Course
    {
        $entityManager = $this->getEntityManager();

        // Get the total number of courses
        $totalCourses = $entityManager
            ->createQuery('SELECT COUNT(c.courseId) FROM App\Entity\Course c')
            ->getSingleScalarResult();

        if ($totalCourses === 0) {
            return null; // No courses available
        }

        // Generate a random offset within the total number of courses
        $randomOffset = rand(0, $totalCourses - 1);

        // Retrieve a random course using the offset
        return $entityManager
            ->createQuery('SELECT c FROM App\Entity\Course c')
            ->setMaxResults(1)
            ->setFirstResult($randomOffset)
            ->getOneOrNullResult();
    }
    /**
     * Get the top 3 courses with the highest average ratings.
     *
     * @return Course[]
     */


    public function findTopInstructorsWithMostReviews()
    {
        $entityManager = $this->getEntityManager();

        $query = $entityManager->createQuery('
            SELECT c.instructorName, COUNT(r) as reviewCount
            FROM App\Entity\Course c
            JOIN App\Entity\Review r WITH r.courseid = c.courseId
            GROUP BY c.instructorName
            ORDER BY reviewCount DESC
        ');

        $query->setMaxResults(3); // Limit to the top 3

        return $query->getResult();
    }

    public function findTopThreeHighestPricedCourses(): array
    {
        return $this->createQueryBuilder('c')
            ->orderBy('c.price', 'DESC')
            ->setMaxResults(3)
            ->getQuery()
            ->getResult();
    }






//    public function findOneBySomeField($value): ?Course
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
