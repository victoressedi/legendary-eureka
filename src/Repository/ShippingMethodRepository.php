<?php

namespace App\Repository;

use Essedi\EasyCommerce\Repository\ShippingMethodRepository as BaseShippingMethodRepository;
use App\Entity\ShippingMethod;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method ShippingMethod|null find($id, $lockMode = null, $lockVersion = null)
 * @method ShippingMethod|null findOneBy(array $criteria, array $orderBy = null)
 * @method ShippingMethod[]    findAll()
 * @method ShippingMethod[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ShippingMethodRepository extends BaseShippingMethodRepository
{

    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, ShippingMethod::class);
    }

    public function findByShippingZone($filter)
    {
        return parent::findByShippingZone($filter);
    }

}
