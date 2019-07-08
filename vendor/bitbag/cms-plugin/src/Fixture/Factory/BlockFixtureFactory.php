<?php

/*
 * This file has been created by developers from BitBag.
 * Feel free to contact us once you face any issues or want to start
 * another great project.
 * You can find more information about us on https://bitbag.shop and write us
 * an email on mikolaj.krol@bitbag.pl.
 */

declare(strict_types=1);

namespace BitBag\SyliusCmsPlugin\Fixture\Factory;

use BitBag\SyliusCmsPlugin\Entity\BlockInterface;
use BitBag\SyliusCmsPlugin\Entity\BlockTranslationInterface;
use BitBag\SyliusCmsPlugin\Entity\SectionInterface;
use BitBag\SyliusCmsPlugin\Repository\BlockRepositoryInterface;
use BitBag\SyliusCmsPlugin\Repository\SectionRepositoryInterface;
use Sylius\Component\Channel\Context\ChannelContextInterface;
use Sylius\Component\Core\Repository\ProductRepositoryInterface;
use Sylius\Component\Locale\Context\LocaleContextInterface;
use Sylius\Component\Resource\Factory\FactoryInterface;

final class BlockFixtureFactory implements FixtureFactoryInterface
{
    /** @var FactoryInterface */
    private $blockFactory;

    /** @var FactoryInterface */
    private $blockTranslationFactory;

    /** @var BlockRepositoryInterface */
    private $blockRepository;

    /** @var SectionRepositoryInterface */
    private $sectionRepository;

    /** @var ProductRepositoryInterface */
    private $productRepository;

    /** @var ChannelContextInterface */
    private $channelContext;

    /** @var LocaleContextInterface */
    private $localeContext;

    public function __construct(
        FactoryInterface $blockFactory,
        FactoryInterface $blockTranslationFactory,
        BlockRepositoryInterface $blockRepository,
        SectionRepositoryInterface $sectionRepository,
        ProductRepositoryInterface $productRepository,
        ChannelContextInterface $channelContext,
        LocaleContextInterface $localeContext
    ) {
        $this->blockFactory = $blockFactory;
        $this->blockTranslationFactory = $blockTranslationFactory;
        $this->blockRepository = $blockRepository;
        $this->sectionRepository = $sectionRepository;
        $this->productRepository = $productRepository;
        $this->channelContext = $channelContext;
        $this->localeContext = $localeContext;
    }

    public function load(array $data): void
    {
        foreach ($data as $code => $fields) {
            if (
                true === $fields['remove_existing'] &&
                null !== $block = $this->blockRepository->findOneBy(['code' => $code])
            ) {
                $this->blockRepository->remove($block);
            }

            if (null !== $fields['number']) {
                for ($i = 0; $i < $fields['number']; ++$i) {
                    $this->createBlock(md5(uniqid()), $fields);
                }
            } else {
                $this->createBlock($code, $fields);
            }
        }
    }

    private function createBlock(string $code, array $blockData): void
    {
        /** @var BlockInterface $block */
        $block = $this->blockFactory->createNew();
        $products = $blockData['products'];

        if (null !== $products) {
            $this->resolveProducts($block, $products);
        }

        $this->resolveSections($block, $blockData['sections']);

        $block->setCode($code);
        $block->setEnabled($blockData['enabled']);
        $block->addChannel($this->channelContext->getChannel());

        foreach ($blockData['translations'] as $localeCode => $translation) {
            /** @var BlockTranslationInterface $blockTranslation */
            $blockTranslation = $this->blockTranslationFactory->createNew();

            $blockTranslation->setLocale($localeCode);
            $blockTranslation->setName($translation['name']);
            $blockTranslation->setContent($translation['content']);
            $blockTranslation->setLink($translation['link']);
            $block->addTranslation($blockTranslation);
        }

        $this->blockRepository->add($block);
    }

    private function resolveProducts(BlockInterface $block, int $limit): void
    {
        $products = $this->productRepository->findLatestByChannel(
            $this->channelContext->getChannel(),
            $this->localeContext->getLocaleCode(),
            $limit
        );

        foreach ($products as $product) {
            $block->addProduct($product);
        }
    }

    private function resolveSections(BlockInterface $block, array $sections): void
    {
        foreach ($sections as $sectionCode) {
            /** @var SectionInterface $section */
            $section = $this->sectionRepository->findOneBy(['code' => $sectionCode]);

            $block->addSection($section);
        }
    }
}
