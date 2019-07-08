<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'liip_imagine.command.resolve_cache_command' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Console/Command/Command.php';
include_once $this->targetDirs[3].'/vendor/liip/imagine-bundle/Command/ResolveCacheCommand.php';

$this->services['liip_imagine.command.resolve_cache_command'] = $instance = new \Liip\ImagineBundle\Command\ResolveCacheCommand(($this->services['liip_imagine.filter.manager'] ?? $this->load('getLiipImagine_Filter_ManagerService.php')), ($this->privates['liip_imagine.service.filter'] ?? $this->load('getLiipImagine_Service_FilterService.php')));

$instance->setName('liip:imagine:cache:resolve');

return $instance;
