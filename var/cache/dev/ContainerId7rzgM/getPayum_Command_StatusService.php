<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'payum.command.status' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Console/Command/Command.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/DependencyInjection/ContainerAwareInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Command/ContainerAwareCommand.php';
include_once $this->targetDirs[3].'/vendor/payum/payum-bundle/Command/StatusCommand.php';

$this->privates['payum.command.status'] = $instance = new \Payum\Bundle\PayumBundle\Command\StatusCommand();

$instance->setContainer($this);
$instance->setName('payum:status');

return $instance;
