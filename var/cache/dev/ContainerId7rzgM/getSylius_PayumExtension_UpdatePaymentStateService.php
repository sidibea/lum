<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.payum_extension.update_payment_state' shared service.

include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/PayumBundle/Extension/UpdatePaymentStateExtension.php';

return $this->services['sylius.payum_extension.update_payment_state'] = new \Sylius\Bundle\PayumBundle\Extension\UpdatePaymentStateExtension(($this->services['sm.factory'] ?? $this->getSm_FactoryService()));
