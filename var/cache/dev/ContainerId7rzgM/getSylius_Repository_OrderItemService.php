<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.repository.order_item' shared service.

include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Component/Order/Repository/OrderItemRepositoryInterface.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/OrderBundle/Doctrine/ORM/OrderItemRepository.php';

$a = ($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService());

return $this->services['sylius.repository.order_item'] = new \Sylius\Bundle\OrderBundle\Doctrine\ORM\OrderItemRepository($a, $a->getClassMetadata('Sylius\\Component\\Core\\Model\\OrderItem'));
