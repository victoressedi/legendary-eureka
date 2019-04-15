<?php

namespace App\Entity;

use Essedi\EasyCommerce\Model\Order as BaseOrder;
use Doctrine\ORM\Mapping as ORM;
use App\Entity\User;

/**
 * @ORM\Entity(repositoryClass="App\Repository\OrderRepository")
 * Order is SQL reseved word
 * @ORM\Table(name="order_table")
 */
class Order extends BaseOrder
{
    
}
