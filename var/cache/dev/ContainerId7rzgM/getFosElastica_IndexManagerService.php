<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'fos_elastica.index_manager' shared service.

include_once $this->targetDirs[3].'/vendor/friendsofsymfony/elastica-bundle/src/Index/IndexManager.php';

$a = ($this->services['fos_elastica.index.bitbag_shop_product'] ?? $this->load('getFosElastica_Index_BitbagShopProductService.php'));

return $this->services['fos_elastica.index_manager'] = new \FOS\ElasticaBundle\Index\IndexManager(array('bitbag_shop_product' => $a, 'bitbag_option_taxons' => ($this->services['fos_elastica.index.bitbag_option_taxons'] ?? $this->load('getFosElastica_Index_BitbagOptionTaxonsService.php')), 'bitbag_attribute_taxons' => ($this->services['fos_elastica.index.bitbag_attribute_taxons'] ?? $this->load('getFosElastica_Index_BitbagAttributeTaxonsService.php'))), $a);
