<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'payum.action.obtain_credit_card_builder' shared service.

include_once $this->targetDirs[3].'/vendor/payum/payum/src/Payum/Core/Bridge/Symfony/Builder/ObtainCreditCardActionBuilder.php';

return $this->services['payum.action.obtain_credit_card_builder'] = new \Payum\Core\Bridge\Symfony\Builder\ObtainCreditCardActionBuilder(($this->services['form.factory'] ?? $this->getForm_FactoryService()), ($this->services['request_stack'] ?? $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()));
