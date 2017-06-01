<?php

namespace Tests\AppBundle\Controller;

use Tests\AbstractWebTestCase;

class AppControllerTest extends AbstractWebTestCase
{
    private $fixtures;

    public function setUp()
    {

    }

    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertContains('Biogaran Pro Connect - Pré Home', $crawler->filter('h1')->text());
    }
}
