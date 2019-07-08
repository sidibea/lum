<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.controller.impersonate_user' shared service.

include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Controller/ImpersonateUserController.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Security/UserImpersonatorInterface.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Security/UserImpersonator.php';

return $this->services['sylius.controller.impersonate_user'] = new \Sylius\Bundle\AdminBundle\Controller\ImpersonateUserController(new \Sylius\Bundle\CoreBundle\Security\UserImpersonator(($this->services['session'] ?? $this->getSessionService()), 'shop', ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService())), ($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService()), ($this->privates['sylius.shop_user_provider.email_or_name_based'] ?? $this->load('getSylius_ShopUserProvider_EmailOrNameBasedService.php')), ($this->services['router'] ?? $this->getRouterService()), 'ROLE_ADMINISTRATION_ACCESS');
