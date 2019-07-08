<?php

/*
 * This file has been created by developers from BitBag.
 * Feel free to contact us once you face any issues or want to start
 * another great project.
 * You can find more information about us on https://bitbag.shop and write us
 * an email on mikolaj.krol@bitbag.pl.
 */

declare(strict_types=1);

namespace spec\BitBag\SyliusCmsPlugin\Twig\Extension;

use BitBag\SyliusCmsPlugin\Entity\BlockInterface;
use BitBag\SyliusCmsPlugin\Repository\BlockRepositoryInterface;
use BitBag\SyliusCmsPlugin\Resolver\BlockResourceResolverInterface;
use BitBag\SyliusCmsPlugin\Twig\Extension\RenderBlockExtension;
use PhpSpec\ObjectBehavior;
use Symfony\Component\Templating\EngineInterface;

final class RenderBlockExtensionSpec extends ObjectBehavior
{
    function let(
        BlockRepositoryInterface $blockRepository,
        BlockResourceResolverInterface $blockResourceResolver,
        EngineInterface $templatingEngine
    ): void {
        $this->beConstructedWith($blockRepository, $blockResourceResolver, $templatingEngine);
    }

    function it_is_initializable(): void
    {
        $this->shouldHaveType(RenderBlockExtension::class);
    }

    function it_extends_twig_extension(): void
    {
        $this->shouldHaveType(\Twig_Extension::class);
    }

    function it_returns_functions(): void
    {
        $functions = $this->getFunctions();

        $functions->shouldHaveCount(1);

        foreach ($functions as $function) {
            $function->shouldHaveType(\Twig_SimpleFunction::class);
        }
    }

    function it_renders_block(
        BlockResourceResolverInterface $blockResourceResolver,
        BlockInterface $block,
        EngineInterface $templatingEngine
    ): void {
        $blockResourceResolver->findOrLog('bitbag')->willReturn($block);
        $templatingEngine->render('@BitBagSyliusCmsPlugin/Shop/Block/show.html.twig', ['block' => $block])->willReturn('<div>BitBag</div>');

        $this->renderBlock('bitbag');
    }

    function it_renders_block_with_template(
        BlockResourceResolverInterface $blockResourceResolver,
        BlockInterface $block,
        EngineInterface $templatingEngine
    ): void {
        $blockResourceResolver->findOrLog('bitbag')->willReturn($block);
        $templatingEngine->render('@BitBagSyliusCmsPlugin/Shop/Block/otherTemplate.html.twig', ['block' => $block])->willReturn('<div>BitBag Other Template</div>');

        $this->renderBlock('bitbag', '@BitBagSyliusCmsPlugin/Shop/Block/otherTemplate.html.twig');
    }
}
