<?php

namespace App\Repository;

use App\Entity\TilesMap;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method TilesMap|null find($id, $lockMode = null, $lockVersion = null)
 * @method TilesMap|null findOneBy(array $criteria, array $orderBy = null)
 * @method TilesMap[]    findAll()
 * @method TilesMap[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TilesMapRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, TilesMap::class);
    }

    // /**
    //  * @return TilesMap[] Returns an array of TilesMap objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?TilesMap
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
