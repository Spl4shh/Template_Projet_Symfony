<?php

namespace App\Repository;

use App\Entity\ExampleUser;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ExampleUser|null find($id, $lockMode = null, $lockVersion = null)
 * @method ExampleUser|null findOneBy(array $criteria, array $orderBy = null)
 * @method ExampleUser[]    findAll()
 * @method ExampleUser[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ExampleUserRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry) {
        parent::__construct($registry, Example::class);
    }

    // /**
    //  * @return Example[] Returns an array of Example objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Example
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
