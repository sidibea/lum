<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.form.type.address' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/FormTypeInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/AbstractType.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/ResourceBundle/Form/Type/AbstractResourceType.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/AddressingBundle/Form/Type/AddressType.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/AddressingBundle/Form/EventListener/BuildAddressFormSubscriber.php';

return $this->services['sylius.form.type.address'] = new \Sylius\Bundle\AddressingBundle\Form\Type\AddressType('Sylius\\Component\\Core\\Model\\Address', $this->parameters['sylius.form.type.address.validation_groups'], new \Sylius\Bundle\AddressingBundle\Form\EventListener\BuildAddressFormSubscriber(($this->services['sylius.repository.country'] ?? $this->load('getSylius_Repository_CountryService.php')), ($this->services['form.factory'] ?? $this->getForm_FactoryService())));
