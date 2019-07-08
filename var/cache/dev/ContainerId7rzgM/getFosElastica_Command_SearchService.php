<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'fos_elastica.command.search' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Console/Command/Command.php';
include_once $this->targetDirs[3].'/vendor/friendsofsymfony/elastica-bundle/src/Command/SearchCommand.php';

$this->privates['fos_elastica.command.search'] = $instance = new \FOS\ElasticaBundle\Command\SearchCommand(($this->services['fos_elastica.index_manager'] ?? $this->load('getFosElastica_IndexManagerService.php')));

$instance->setName('fos:elastica:search');

return $instance;
