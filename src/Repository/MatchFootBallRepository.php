<?php

namespace App\Repository;

use App\Entity\MatchFootBall;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method MatchFootBall|null find($id, $lockMode = null, $lockVersion = null)
 * @method MatchFootBall|null findOneBy(array $criteria, array $orderBy = null)
 * @method MatchFootBall[]    findAll()
 * @method MatchFootBall[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MatchFootBallRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MatchFootBall::class);
    }

    // /**
    //  * @return MatchFootBall[] Returns an array of MatchFootBall objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('m.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?MatchFootBall
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
