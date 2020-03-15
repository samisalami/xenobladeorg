<?php

namespace App\Repository;

use App\Entity\XenobladeMappoints;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class MapPointsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, XenobladeMappoints::class);
    }

    public function findAllChestPoints(): array
    {
        $qb = $this->createQueryBuilder('m')
            ->where('m.type = "chest"')
            ->andWhere('m.typeid > 0');
        $query = $qb->getQuery();
        return $query->execute();
    }
}