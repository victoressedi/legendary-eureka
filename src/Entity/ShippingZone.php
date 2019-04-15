<?php

namespace App\Entity;

use Essedi\EasyCommerce\Model\ShippingZone as BaseShippingZone;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ShippingZoneRepository")
 */
class ShippingZone extends BaseShippingZone
{
    
}
