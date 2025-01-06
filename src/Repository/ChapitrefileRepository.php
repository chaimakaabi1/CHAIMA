<?php

namespace App\Repository;

use App\Entity\Chapitrefile;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Chapitrefile>
 *
 * @method Chapitrefile|null find($id, $lockMode = null, $lockVersion = null)
 * @method Chapitrefile|null findOneBy(array $criteria, array $orderBy = null)
 * @method Chapitrefile[]    findAll()
 * @method Chapitrefile[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ChapitrefileRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Chapitrefile::class);
    }

//    /**
//     * @return Chapitrefile[] Returns an array of Chapitrefile objects
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

//    public function findOneBySomeField($value): ?Chapitrefile
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
