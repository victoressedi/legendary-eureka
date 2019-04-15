<?php

namespace App\Entity;

use Essedi\EasyCommerce\Model\Product as BaseProduct;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Product extends BaseProduct
{

    /**
     * @ORM\OneToMany(targetEntity="Attribute", mappedBy="product", cascade={"persist"})
     * @ORM\OrderBy({"sort" = "DESC"})
     */
    protected $attributes;

}
