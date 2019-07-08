<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'fos_elastica.pager_provider.bitbag_shop_product.default' shared service.

include_once $this->targetDirs[3].'/vendor/friendsofsymfony/elastica-bundle/src/Provider/PagerProviderInterface.php';
include_once $this->targetDirs[3].'/vendor/friendsofsymfony/elastica-bundle/src/Doctrine/ORMPagerProvider.php';

return $this->services['fos_elastica.pager_provider.bitbag_shop_product.default'] = new \FOS\ElasticaBundle\Doctrine\ORMPagerProvider(($this->services['doctrine'] ?? $this->getDoctrineService()), ($this->privates['fos_elastica.doctrine.register_listeners'] ?? $this->load('getFosElastica_Doctrine_RegisterListenersService.php')), 'Sylius\\Component\\Core\\Model\\Product', array('batch_size' => 100, 'clear_object_manager' => true, 'debug_logging' => true, 'query_builder_method' => 'createQueryBuilder'));
