<?php

namespace App\Repository;

use App\Entity\Review;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Review>
 *
 * @method Review|null find($id, $lockMode = null, $lockVersion = null)
 * @method Review|null findOneBy(array $criteria, array $orderBy = null)
 * @method Review[]    findAll()
 * @method Review[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ReviewRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Review::class);
    }

    public function searchByReviewerName(string $reviewerName)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.reviewername LIKE :reviewerName')
            ->setParameter('reviewerName', '%'.$reviewerName.'%')
            ->getQuery()
            ->getResult();
    }
//    /**
//     * @return Review[] Returns an array of Review objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('r.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }


    /**
     * @param int $courseId
     * @return Review[] Returns an array of Review objects
     */
    /**
     * @param int $courseId
     * @return Review[] Returns an array of Review objects
     */
    public function findReviewsByCourseId(int $courseId): array
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.courseid = :courseId')
            ->setParameter('courseId', $courseId)
            ->getQuery()
            ->getResult();
    }
//    public function findOneBySomeField($value): ?Review
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
