<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.order_modifier' shared service.

include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Component/Order/Modifier/OrderModifierInterface.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Component/Order/Modifier/OrderModifier.php';

return $this->services['sylius.order_modifier'] = new \Sylius\Component\Order\Modifier\OrderModifier(($this->services['sylius.order_processing.order_processor'] ?? $this->load('getSylius_OrderProcessing_OrderProcessorService.php')), ($this->services['sylius.order_item_quantity_modifier.limiting'] ?? $this->load('getSylius_OrderItemQuantityModifier_LimitingService.php')));
