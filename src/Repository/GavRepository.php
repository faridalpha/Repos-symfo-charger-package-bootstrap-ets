<?php

namespace App\Repository;

use App\Entity\Gav;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Gav>
 *
 * @method Gav|null find($id, $lockMode = null, $lockVersion = null)
 * @method Gav|null findOneBy(array $criteria, array $orderBy = null)
 * @method Gav[]    findAll()
 * @method Gav[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GavRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Gav::class);
    }

//    /**
//     * @return Gav[] Returns an array of Gav objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('g')
//            ->andWhere('g.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('g.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Gav
//    {
//        return $this->createQueryBuilder('g')
//            ->andWhere('g.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
