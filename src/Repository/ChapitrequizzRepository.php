<?php

namespace App\Repository;

use App\Entity\Chapitrequizz;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Chapitrequizz>
 *
 * @method Chapitrequizz|null find($id, $lockMode = null, $lockVersion = null)
 * @method Chapitrequizz|null findOneBy(array $criteria, array $orderBy = null)
 * @method Chapitrequizz[]    findAll()
 * @method Chapitrequizz[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ChapitrequizzRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Chapitrequizz::class);
    }

//    /**
//     * @return Chapitrequizz[] Returns an array of Chapitrequizz objects
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

//    public function findOneBySomeField($value): ?Chapitrequizz
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
