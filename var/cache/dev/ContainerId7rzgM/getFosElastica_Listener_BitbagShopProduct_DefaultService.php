<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'fos_elastica.listener.bitbag_shop_product.default' shared service.

include_once $this->targetDirs[3].'/vendor/friendsofsymfony/elastica-bundle/src/Doctrine/Listener.php';
include_once $this->targetDirs[3].'/vendor/friendsofsymfony/elastica-bundle/src/Provider/IndexableInterface.php';
include_once $this->targetDirs[3].'/vendor/friendsofsymfony/elastica-bundle/src/Provider/Indexable.php';

return $this->services['fos_elastica.listener.bitbag_shop_product.default'] = new \FOS\ElasticaBundle\Doctrine\Listener(($this->services['fos_elastica.object_persister.bitbag_shop_product.default'] ?? $this->load('getFosElastica_ObjectPersister_BitbagShopProduct_DefaultService.php')), ($this->privates['fos_elastica.indexable'] ?? $this->privates['fos_elastica.indexable'] = new \FOS\ElasticaBundle\Provider\Indexable(array())), array('identifier' => 'id', 'indexName' => 'bitbag_shop_product', 'typeName' => 'default', 'defer' => true), ($this->privates['fos_elastica.logger'] ?? $this->getFosElastica_LoggerService()));
