<?php

/*
 * This file has been created by developers from BitBag.
 * Feel free to contact us once you face any issues or want to start
 * another great project.
 * You can find more information about us on https://bitbag.shop and write us
 * an email on mikolaj.krol@bitbag.pl.
 */

declare(strict_types=1);

namespace BitBag\SyliusCmsPlugin\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

trait SectionableTrait
{
    /** @var Collection|SectionInterface[] */
    protected $sections;

    public function initializeSectionsCollection(): void
    {
        $this->sections = new ArrayCollection();
    }

    public function getSections(): ?Collection
    {
        return $this->sections;
    }

    public function hasSection(SectionInterface $section): bool
    {
        return $this->sections->contains($section);
    }

    public function addSection(SectionInterface $section): void
    {
        if (false === $this->hasSection($section)) {
            $this->sections->add($section);
        }
    }

    public function removeSection(SectionInterface $section): void
    {
        if (true === $this->hasSection($section)) {
            $this->sections->removeElement($section);
        }
    }
}
