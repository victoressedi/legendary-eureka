<?php

namespace App\Entity;

use Essedi\EasyCommerce\Model\ShippingMethod as BaseShippingMethod;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ShippingMethodRepository")
 */
class ShippingMethod extends BaseShippingMethod
{
    
}
