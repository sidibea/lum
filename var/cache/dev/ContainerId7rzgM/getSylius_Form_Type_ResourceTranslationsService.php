<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.form.type.resource_translations' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/FormTypeInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/AbstractType.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/ResourceBundle/Form/Type/ResourceTranslationsType.php';

return $this->services['sylius.form.type.resource_translations'] = new \Sylius\Bundle\ResourceBundle\Form\Type\ResourceTranslationsType(($this->services['sylius.translation_locale_provider.admin'] ?? $this->load('getSylius_TranslationLocaleProvider_AdminService.php')));
