<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.form.type.customer_group_choice' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/FormTypeInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/AbstractType.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/CustomerBundle/Form/Type/CustomerGroupChoiceType.php';

return $this->services['sylius.form.type.customer_group_choice'] = new \Sylius\Bundle\CustomerBundle\Form\Type\CustomerGroupChoiceType(($this->services['sylius.repository.customer_group'] ?? $this->load('getSylius_Repository_CustomerGroupService.php')));
