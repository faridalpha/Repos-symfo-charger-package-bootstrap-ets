<?php

namespace App\Repository;

use App\Entity\Deposte;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Deposte>
 *
 * @method Deposte|null find($id, $lockMode = null, $lockVersion = null)
 * @method Deposte|null findOneBy(array $criteria, array $orderBy = null)
 * @method Deposte[]    findAll()
 * @method Deposte[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DeposteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Deposte::class);
    }

//    /**
//     * @return Deposte[] Returns an array of Deposte objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('d.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Deposte
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
