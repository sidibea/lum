<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'bitbag_sylius_cms_plugin.resolver.page_resource' shared service.

include_once $this->targetDirs[3].'/vendor/bitbag/cms-plugin/src/Resolver/PageResourceResolverInterface.php';
include_once $this->targetDirs[3].'/vendor/bitbag/cms-plugin/src/Resolver/PageResourceResolver.php';

return $this->services['bitbag_sylius_cms_plugin.resolver.page_resource'] = new \BitBag\SyliusCmsPlugin\Resolver\PageResourceResolver(($this->services['bitbag_sylius_cms_plugin.repository.page'] ?? $this->getBitbagSyliusCmsPlugin_Repository_PageService()), ($this->services['sylius.context.locale'] ?? $this->getSylius_Context_LocaleService()), ($this->privates['monolog.logger'] ?? $this->getMonolog_LoggerService()));
