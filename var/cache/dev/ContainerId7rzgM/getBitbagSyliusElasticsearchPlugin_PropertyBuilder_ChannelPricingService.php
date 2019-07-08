<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'bitbag_sylius_elasticsearch_plugin.property_builder.channel_pricing' shared service.

include_once $this->targetDirs[3].'/vendor/bitbag/elasticsearch-plugin/src/PropertyBuilder/PropertyBuilderInterface.php';
include_once $this->targetDirs[3].'/vendor/bitbag/elasticsearch-plugin/src/PropertyBuilder/AbstractBuilder.php';
include_once $this->targetDirs[3].'/vendor/bitbag/elasticsearch-plugin/src/PropertyBuilder/ChannelPricingBuilder.php';
include_once $this->targetDirs[3].'/vendor/bitbag/elasticsearch-plugin/src/PropertyNameResolver/ConcatedNameResolverInterface.php';
include_once $this->targetDirs[3].'/vendor/bitbag/elasticsearch-plugin/src/PropertyNameResolver/ConcatedNameResolver.php';

return $this->privates['bitbag_sylius_elasticsearch_plugin.property_builder.channel_pricing'] = new \BitBag\SyliusElasticsearchPlugin\PropertyBuilder\ChannelPricingBuilder(($this->privates['bitbag_sylius_elasticsearch_plugin.property_name_resolver.channel_pricing'] ?? $this->privates['bitbag_sylius_elasticsearch_plugin.property_name_resolver.channel_pricing'] = new \BitBag\SyliusElasticsearchPlugin\PropertyNameResolver\ConcatedNameResolver('price')));
