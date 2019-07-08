<?php

/*
 * This file has been created by developers from BitBag.
 * Feel free to contact us once you face any issues or want to start
 * another great project.
 * You can find more information about us on https://bitbag.shop and write us
 * an email on mikolaj.krol@bitbag.pl.
 */

declare(strict_types=1);

namespace Tests\BitBag\SyliusCmsPlugin\Api\Sitemap\Provider;

use BitBag\SyliusCmsPlugin\Entity\Page;

class SitemapPageControllerApiLocalesTest extends AbstractTestController
{
    /**
     * @before
     */
    public function setUpDatabase(): void
    {
        parent::setUpDatabase();

        $page = new Page();
        $page->setCurrentLocale('en_US');
        $page->setName('Test');
        $page->setCode('test-code');
        $page->setSlug('test');
        $page->setCurrentLocale('nl_NL');
        $page->setName('Test');
        $page->setCode('test-code');
        $page->setSlug('test-nl');
        $this->getEntityManager()->persist($page);

        $page = new Page();
        $page->setCurrentLocale('en_US');
        $page->setName('Mock');
        $page->setCode('mock-code');
        $page->setSlug('mock');
        $page->setCurrentLocale('nl_NL');
        $page->setName('Mock');
        $page->setCode('mock-code');
        $page->setSlug('mock-nl');
        $this->getEntityManager()->persist($page);

        $page = new Page();
        $page->setCurrentLocale('en_US');
        $page->setName('Test 2');
        $page->setCode('test-code-3');
        $page->setSlug('test 2');
        $page->setCurrentLocale('nl_NL');
        $page->setName('Test 2');
        $page->setCode('test-code-3');
        $page->setSlug('test 2');
        $page->setEnabled(false);
        $this->getEntityManager()->persist($page);

        $page = new Page();
        $page->setCurrentLocale('en_US');
        $page->setName('Test 3');
        $page->setCode('test-code-4');
        $page->setSlug('test 3');
        $page->setCurrentLocale('nl_NL');
        $page->setName('Test 3');
        $page->setCode('test-code-4');
        $page->setSlug('test 3');
        $page->setEnabled(false);
        $this->getEntityManager()->persist($page);

        $this->getEntityManager()->flush();
    }

    public function testShowActionResponse(): void
    {
        $this->client->request('GET', '/sitemap/cms_pages.xml');
        $response = $this->client->getResponse();
        $this->assertResponse($response, 'show_sitemap_pages_locale');
    }
}
