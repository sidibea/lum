<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.form.type.user_change_password' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/FormTypeInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/AbstractType.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/ResourceBundle/Form/Type/AbstractResourceType.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Form/Type/UserChangePasswordType.php';

return $this->services['sylius.form.type.user_change_password'] = new \Sylius\Bundle\UserBundle\Form\Type\UserChangePasswordType('Sylius\\Bundle\\UserBundle\\Form\\Model\\ChangePassword', $this->parameters['sylius.form.type.user_change_password.validation_groups']);
