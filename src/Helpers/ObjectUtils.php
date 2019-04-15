<?php

namespace App\Helpers;

use Doctrine\ORM\Mapping\Entity;
use Symfony\Component\Routing\Exception\InvalidParameterException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Essedi\EasyCommerce\Helpers\ObjectUtils as BaseObjectUtils;

class ObjectUtils extends BaseObjectUtils
{

    public function checkField($field, $entity1, $entity2)
    {
        return parent::checkField($field, $entity1, $entity2);
    }

    public function findObject($raw, $instance, $throws = true)
    {
        return parent::findObject($raw, $instance, $throws);
    }

    public function initialize($obj, $data, $exclude = array())
    {
        return parent::initialize($obj, $data, $exclude);
    }

}
