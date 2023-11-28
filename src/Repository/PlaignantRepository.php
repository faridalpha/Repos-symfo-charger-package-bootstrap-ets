<?php

namespace App\Repository;

use App\Entity\Plaignant;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Plaignant>
 *
 * @method Plaignant|null find($id, $lockMode = null, $lockVersion = null)
 * @method Plaignant|null findOneBy(array $criteria, array $orderBy = null)
 * @method Plaignant[]    findAll()
 * @method Plaignant[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PlaignantRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Plaignant::class);
    }

//    /**
//     * @return Plaignant[] Returns an array of Plaignant objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('p.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Plaignant
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
