<?php

namespace App\Repository;

use App\Entity\CardTransaction;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<CardTransaction>
 *
 * @method CardTransaction|null find($id, $lockMode = null, $lockVersion = null)
 * @method CardTransaction|null findOneBy(array $criteria, array $orderBy = null)
 * @method CardTransaction[]    findAll()
 * @method CardTransaction[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CardTransactionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CardTransaction::class);
    }

//    /**
//     * @return CardTransaction[] Returns an array of CardTransaction objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('c.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?CardTransaction
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
