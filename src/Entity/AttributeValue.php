<?php

namespace App\Entity;

use Essedi\EasyCommerce\Model\AttributeValue as BaseAttributeValue;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class AttributeValue extends BaseAttributeValue
{

    /**
     * @var Collection|Price[]
     * @ORM\OneToMany(targetEntity="Price", mappedBy="attributeValue", cascade={"persist"})
     */
    protected $prices;

}
