<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.controller.payment' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/DependencyInjection/ContainerAwareInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/DependencyInjection/ContainerAwareTrait.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Controller/ControllerTrait.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Controller/Controller.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/ResourceBundle/Controller/ResourceController.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Component/Resource/Metadata/MetadataInterface.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Component/Resource/Metadata/Metadata.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/ResourceBundle/Controller/NewResourceFactoryInterface.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/ResourceBundle/Controller/NewResourceFactory.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/ResourceBundle/Controller/SingleResourceProviderInterface.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/ResourceBundle/Controller/SingleResourceProvider.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/ResourceBundle/Controller/AuthorizationCheckerInterface.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/ResourceBundle/Controller/DisabledAuthorizationChecker.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/ResourceBundle/Controller/ResourceDeleteHandlerInterface.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/ResourceBundle/Controller/ResourceDeleteHandler.php';

$this->services['sylius.controller.payment'] = $instance = new \Sylius\Bundle\ResourceBundle\Controller\ResourceController(($this->privates['sylius.resource_registry'] ?? $this->getSylius_ResourceRegistryService())->get('sylius.payment'), ($this->privates['sylius.resource_controller.request_configuration_factory'] ?? $this->load('getSylius_ResourceController_RequestConfigurationFactoryService.php')), ($this->privates['sylius.resource_controller.view_handler'] ?? $this->load('getSylius_ResourceController_ViewHandlerService.php')), ($this->services['sylius.repository.payment'] ?? $this->load('getSylius_Repository_PaymentService.php')), ($this->services['sylius.factory.payment'] ?? $this->load('getSylius_Factory_PaymentService.php')), ($this->privates['sylius.resource_controller.new_resource_factory'] ?? $this->privates['sylius.resource_controller.new_resource_factory'] = new \Sylius\Bundle\ResourceBundle\Controller\NewResourceFactory()), ($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()), ($this->privates['sylius.resource_controller.single_resource_provider'] ?? $this->privates['sylius.resource_controller.single_resource_provider'] = new \Sylius\Bundle\ResourceBundle\Controller\SingleResourceProvider()), ($this->privates['sylius.resource_controller.resources_collection_provider'] ?? $this->load('getSylius_ResourceController_ResourcesCollectionProviderService.php')), ($this->privates['sylius.resource_controller.form_factory'] ?? $this->load('getSylius_ResourceController_FormFactoryService.php')), ($this->privates['sylius.resource_controller.redirect_handler'] ?? $this->load('getSylius_ResourceController_RedirectHandlerService.php')), ($this->privates['sylius.resource_controller.flash_helper'] ?? $this->load('getSylius_ResourceController_FlashHelperService.php')), ($this->privates['sylius.resource_controller.authorization_checker.disabled'] ?? $this->privates['sylius.resource_controller.authorization_checker.disabled'] = new \Sylius\Bundle\ResourceBundle\Controller\DisabledAuthorizationChecker()), ($this->privates['sylius.resource_controller.event_dispatcher'] ?? $this->load('getSylius_ResourceController_EventDispatcherService.php')), ($this->privates['sylius.resource_controller.state_machine'] ?? $this->load('getSylius_ResourceController_StateMachineService.php')), ($this->privates['sylius.custom_resource_controller.resource_update_handler'] ?? $this->load('getSylius_CustomResourceController_ResourceUpdateHandlerService.php')), ($this->privates['sylius.resource_controller.resource_delete_handler'] ?? $this->privates['sylius.resource_controller.resource_delete_handler'] = new \Sylius\Bundle\ResourceBundle\Controller\ResourceDeleteHandler()));

$instance->setContainer($this);

return $instance;
