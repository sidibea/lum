<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'bitbag_sylius_cms_plugin.form.type.frequently_asked_question' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/FormTypeInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/AbstractType.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/ResourceBundle/Form/Type/AbstractResourceType.php';
include_once $this->targetDirs[3].'/vendor/bitbag/cms-plugin/src/Form/Type/FrequentlyAskedQuestionType.php';

return $this->privates['bitbag_sylius_cms_plugin.form.type.frequently_asked_question'] = new \BitBag\SyliusCmsPlugin\Form\Type\FrequentlyAskedQuestionType('BitBag\\SyliusCmsPlugin\\Entity\\FrequentlyAskedQuestion', array(0 => 'bitbag'));
