<?php

/*
 * This file has been created by developers from BitBag.
 * Feel free to contact us once you face any issues or want to start
 * another great project.
 * You can find more information about us on https://bitbag.shop and write us
 * an email on mikolaj.krol@bitbag.pl.
 */

declare(strict_types=1);

namespace BitBag\SyliusElasticsearchPlugin\PropertyBuilder;

use FOS\ElasticaBundle\Event\TransformEvent;

abstract class AbstractBuilder implements PropertyBuilderInterface
{
    /**
     * {@inheritdoc}
     */
    public function buildProperty(TransformEvent $event, string $supportedModelClass, callable $callback): void
    {
        $model = $event->getObject();

        if (!$model instanceof $supportedModelClass) {
            return;
        }

        $document = $event->getDocument();

        $callback($model, $document);
    }

    /**
     * {@inheritdoc}
     */
    public static function getSubscribedEvents(): array
    {
        return [
            TransformEvent::POST_TRANSFORM => 'consumeEvent',
        ];
    }
}
