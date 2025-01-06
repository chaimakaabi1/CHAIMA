<?php

namespace App\Repository;

use App\Entity\Reclamation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class ReclamationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Reclamation::class);
    }
    public function countReclamationsByObject(): array
    {
        $qb = $this->createQueryBuilder('r')
            ->select('r.objet, COUNT(r.id) as countObjet')
            ->groupBy('r.objet')
            ->getQuery();

        return $qb->getResult();
    }

}