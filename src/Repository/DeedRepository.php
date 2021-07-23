<?php

namespace App\Repository;

use App\Entity\Deed;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Deed|null find($id, $lockMode = null, $lockVersion = null)
 * @method Deed|null findOneBy(array $criteria, array $orderBy = null)
 * @method Deed[]    findAll()
 * @method Deed[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DeedRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Deed::class);
    }

    // /**
    //  * @return Deed[] Returns an array of Deed objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('d.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Deed
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
