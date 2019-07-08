<?php

/*
 * This file has been created by developers from BitBag.
 * Feel free to contact us once you face any issues or want to start
 * another great project.
 * You can find more information about us on https://bitbag.shop and write us
 * an email on mikolaj.krol@bitbag.pl.
 */

declare(strict_types=1);

namespace spec\BitBag\SyliusCmsPlugin\Entity;

use BitBag\SyliusCmsPlugin\Entity\FrequentlyAskedQuestionTranslation;
use BitBag\SyliusCmsPlugin\Entity\FrequentlyAskedQuestionTranslationInterface;
use PhpSpec\ObjectBehavior;
use Sylius\Component\Resource\Model\ResourceInterface;
use Sylius\Component\Resource\Model\TranslationInterface;

final class FrequentlyAskedQuestionTranslationSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(FrequentlyAskedQuestionTranslation::class);
    }

    function it_is_a_resource()
    {
        $this->shouldHaveType(ResourceInterface::class);
    }

    function it_implements_frequently_asked_question_translation_interface()
    {
        $this->shouldHaveType(FrequentlyAskedQuestionTranslationInterface::class);
        $this->shouldHaveType(TranslationInterface::class);
    }

    function it_allows_access_via_properties()
    {
        $this->setQuestion('What are the delivery charges for orders from the Online Shop?');
        $this->getQuestion()->shouldReturn('What are the delivery charges for orders from the Online Shop?');

        $this->setAnswer('$20');
        $this->getAnswer()->shouldReturn('$20');
    }
}
