<?php

namespace App\Repository;

use App\Entity\Lobster;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Lobster|null find($id, $lockMode = null, $lockVersion = null)
 * @method Lobster|null findOneBy(array $criteria, array $orderBy = null)
 * @method Lobster[]    findAll()
 * @method Lobster[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LobsterRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Lobster::class);
    }

    public function findAlbino()
    {
        return $this->findBy(['albino' => true]);
    }

    public function findGoodHealth()
    {
        return $this->findBy(['health' => "good"]);
    }
//    /**
//     * @return Lobster[] Returns an array of Lobster objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('l.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Lobster
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
