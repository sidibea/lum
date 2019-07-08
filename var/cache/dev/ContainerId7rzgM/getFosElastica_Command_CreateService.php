<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'fos_elastica.command.create' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Console/Command/Command.php';
include_once $this->targetDirs[3].'/vendor/friendsofsymfony/elastica-bundle/src/Command/CreateCommand.php';
include_once $this->targetDirs[3].'/vendor/friendsofsymfony/elastica-bundle/src/Index/MappingBuilder.php';
include_once $this->targetDirs[3].'/vendor/friendsofsymfony/elastica-bundle/src/Index/AliasProcessor.php';

$this->privates['fos_elastica.command.create'] = $instance = new \FOS\ElasticaBundle\Command\CreateCommand(($this->services['fos_elastica.index_manager'] ?? $this->load('getFosElastica_IndexManagerService.php')), ($this->privates['fos_elastica.mapping_builder'] ?? $this->privates['fos_elastica.mapping_builder'] = new \FOS\ElasticaBundle\Index\MappingBuilder()), ($this->services['fos_elastica.config_manager'] ?? $this->load('getFosElastica_ConfigManagerService.php')), ($this->privates['fos_elastica.alias_processor'] ?? $this->privates['fos_elastica.alias_processor'] = new \FOS\ElasticaBundle\Index\AliasProcessor()));

$instance->setName('fos:elastica:create');

return $instance;
