<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'fos_elastica.client.default' shared service.

include_once $this->targetDirs[3].'/vendor/ruflin/elastica/lib/Elastica/Client.php';
include_once $this->targetDirs[3].'/vendor/friendsofsymfony/elastica-bundle/src/Elastica/Client.php';

$this->services['fos_elastica.client.default'] = $instance = new \FOS\ElasticaBundle\Elastica\Client(array('connections' => array(0 => array('host' => 'localhost', 'port' => 9300, 'ssl' => false, 'logger' => 'fos_elastica.logger', 'compression' => false, 'headers' => array(), 'curl' => array(), 'retryOnConflict' => 0)), 'connectionStrategy' => 'Simple'), '');

$instance->setStopwatch(($this->privates['debug.stopwatch'] ?? $this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true)));
$instance->setLogger(($this->privates['fos_elastica.logger'] ?? $this->getFosElastica_LoggerService()));

return $instance;
