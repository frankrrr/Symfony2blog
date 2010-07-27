<?php

namespace Application\BlogBundle\Tests\Controller;

use Symfony\Framework\FoundationBundle\Test\WebTestCase;

class BlogControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = $this->createClient();

        $crawler = $client->request('GET', '/blog/Fabien');

        $this->assertFalse($crawler->filter('html:contains("Blog Fabien")')->isEmpty());
    }
}
