<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'translation.extractor' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Translation/Extractor/ExtractorInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Translation/Extractor/ChainExtractor.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Translation/Extractor/AbstractFileExtractor.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Translation/Extractor/PhpExtractor.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Translation/TwigExtractor.php';

$this->privates['translation.extractor'] = $instance = new \Symfony\Component\Translation\Extractor\ChainExtractor();

$instance->addExtractor('php', new \Symfony\Component\Translation\Extractor\PhpExtractor());
$instance->addExtractor('twig', new \Symfony\Bridge\Twig\Translation\TwigExtractor(($this->services['twig'] ?? $this->getTwigService())));

return $instance;
