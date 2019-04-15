<?php

namespace App\Repository;

use App\Entity\ShippingZone;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method ShippingZone|null find($id, $lockMode = null, $lockVersion = null)
 * @method ShippingZone|null findOneBy(array $criteria, array $orderBy = null)
 * @method ShippingZone[]    findAll()
 * @method ShippingZone[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ShippingZoneRepository extends ServiceEntityRepository
{

    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, ShippingZone::class);
    }

    public function magicFilter($filter)
    {
        $qb = $this->createQueryBuilder('sz');

        foreach ($filter as $key => $value)
        {
            $qb->andWhere("sz.$key = $value");
        }

        $qb->leftJoin('sz.shippingMethods', 'sm');

        return $qb->getQuery()->getResult();
    }

    // /**
    //  * @return ShippingZone[] Returns an array of ShippingZone objects
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
      public function findOneBySomeField($value): ?ShippingZone
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
