<?php

namespace App\Controller;

use Essedi\EasyCommerce\Controller\AbstractOrderController as BaseOrderController;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use App\Helpers\ObjectUtils;
use Doctrine\ORM\EntityManagerInterface;
use ApiPlatform\Core\Serializer\ItemNormalizer;
use Psr\Log\LoggerInterface;
use App\Entity\ShippingZone;
use App\Entity\Order;
use App\Entity\User;

class OrderController extends BaseOrderController
{

    public function __construct(LoggerInterface $logger, EntityManagerInterface $em, ObjectUtils $objectUtils, ItemNormalizer $normalizer)
    {
        parent::__construct($logger, $em, $objectUtils, $normalizer);
    }

    public function getAvailableShippingMethods(Request $request)
    {
        return parent::getAvailableShippingMethods($request);
    }

}
