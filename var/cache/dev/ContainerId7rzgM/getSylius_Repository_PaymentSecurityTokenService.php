<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.repository.payment_security_token' shared service.

$a = ($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService());

return $this->services['sylius.repository.payment_security_token'] = new \Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository($a, $a->getClassMetadata('Sylius\\Bundle\\PayumBundle\\Model\\PaymentSecurityToken'));
