<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'templating.finder' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/CacheWarmer/TemplateFinderInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/CacheWarmer/TemplateFinder.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Templating/TemplateFilenameParser.php';

return $this->privates['templating.finder'] = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\TemplateFinder(($this->services['kernel'] ?? $this->get('kernel', 1)), new \Symfony\Bundle\FrameworkBundle\Templating\TemplateFilenameParser(), ($this->targetDirs[3].'/app/Resources'));
