<?php

namespace App\Repository;

use App\Entity\Interment;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Interment|null find($id, $lockMode = null, $lockVersion = null)
 * @method Interment|null findOneBy(array $criteria, array $orderBy = null)
 * @method Interment[]    findAll()
 * @method Interment[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class IntermentRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Interment::class);
    }

    // /**
    //  * @return Interment[] Returns an array of Interment objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('i.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Interment
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
