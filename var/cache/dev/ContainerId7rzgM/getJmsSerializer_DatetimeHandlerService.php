<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'jms_serializer.datetime_handler' shared service.

include_once $this->targetDirs[3].'/vendor/jms/serializer/src/JMS/Serializer/Handler/SubscribingHandlerInterface.php';
include_once $this->targetDirs[3].'/vendor/jms/serializer/src/JMS/Serializer/Handler/DateHandler.php';

return $this->services['jms_serializer.datetime_handler'] = new \JMS\Serializer\Handler\DateHandler('Y-m-d\\TH:i:sP', 'Africa/Bamako', true);
