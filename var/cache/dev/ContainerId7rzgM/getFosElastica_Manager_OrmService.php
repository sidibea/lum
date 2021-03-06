<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'fos_elastica.manager.orm' shared service.

include_once $this->targetDirs[3].'/vendor/friendsofsymfony/elastica-bundle/src/Manager/RepositoryManagerInterface.php';
include_once $this->targetDirs[3].'/vendor/friendsofsymfony/elastica-bundle/src/Doctrine/RepositoryManager.php';

$this->services['fos_elastica.manager.orm'] = $instance = new \FOS\ElasticaBundle\Doctrine\RepositoryManager(($this->services['doctrine'] ?? $this->getDoctrineService()), ($this->services['fos_elastica.repository_manager'] ?? $this->load('getFosElastica_RepositoryManagerService.php')));

$instance->addEntity('Sylius\\Component\\Core\\Model\\Product', 'bitbag_shop_product/default');
$instance->addEntity('Sylius\\Component\\Product\\Model\\ProductOption', 'bitbag_option_taxons/default');
$instance->addEntity('Sylius\\Component\\Product\\Model\\ProductAttribute', 'bitbag_attribute_taxons/default');

return $instance;
