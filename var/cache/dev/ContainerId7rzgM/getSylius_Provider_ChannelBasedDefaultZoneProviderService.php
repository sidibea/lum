<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.provider.channel_based_default_zone_provider' shared service.

include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Component/Core/Provider/ZoneProviderInterface.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Provider/ChannelBasedDefaultTaxZoneProvider.php';

return $this->services['sylius.provider.channel_based_default_zone_provider'] = new \Sylius\Bundle\CoreBundle\Provider\ChannelBasedDefaultTaxZoneProvider();
