<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'fos_elastica.command.reset' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Console/Command/Command.php';
include_once $this->targetDirs[3].'/vendor/friendsofsymfony/elastica-bundle/src/Command/ResetCommand.php';

$this->privates['fos_elastica.command.reset'] = $instance = new \FOS\ElasticaBundle\Command\ResetCommand(($this->services['fos_elastica.index_manager'] ?? $this->load('getFosElastica_IndexManagerService.php')), ($this->services['fos_elastica.resetter'] ?? $this->load('getFosElastica_ResetterService.php')));

$instance->setName('fos:elastica:reset');

return $instance;
