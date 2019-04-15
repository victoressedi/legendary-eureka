<?php

namespace App\Entity;

use Essedi\EasyCommerce\Model\Attribute as BaseAttribute;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Attribute extends BaseAttribute
{

    /**
     * @ORM\OneToMany(targetEntity="AttributeValue", mappedBy="attribute", cascade={"persist"})
     */
    protected $options;

}
