<?php

namespace App\Entity;

use Essedi\EasyCommerce\Model\Category as BaseCategory;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Category extends BaseCategory
{

    /**
     * @var integer
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    protected $id;

    public function __construct()
    {
        parent::__construct();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

}
