<?php

namespace App\Entity;

use Essedi\EasyCommerce\Model\Price as BasePrice;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Price extends BasePrice
{

    /**
     * @ORM\ManyToOne(targetEntity="PriceList", inversedBy="prices")
     * @ORM\JoinColumn(nullable=true)
     */
    protected $list;

}
