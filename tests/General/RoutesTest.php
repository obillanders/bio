<?php

namespace Tests\General;

use Tests\AbstractWebTestCase;

class RoutesTest extends AbstractWebTestCase
{

    protected $routesToTest = array(
        '/pharmacien',
    );

    public function setUp()
    {
        $this->loadFixtureFiles([
            '@AppBundle/DataFixtures/ORM/pharmacien.yml',
            '@AppBundle/DataFixtures/ORM/officine.yml',
            '@AppBundle/DataFixtures/ORM/officinepharmacien.yml',
            '@AppBundle/DataFixtures/ORM/user.yml',
        ]);
    }

    /**
     * @dataProvider urlLogInProvider
     */
    public function testLogInPage($url, $codeResponse = 200)
    {
        $user = $this->getContainer()->get('app.manager.user')->findUserByEmail('pharmacien@proconnect.com');
        $this->loginAs($user, 'main');

        $this->callUrlAndExpectStatusCode($url, $codeResponse);
    }

    /**
     * @dataProvider urlAnonymousProvider
     */
    public function testAnonymousPage($url, $codeResponse = 200)
    {
        $this->callUrlAndExpectStatusCode($url, $codeResponse);
    }

    private function callUrlAndExpectStatusCode($url, $codeResponse = 200)
    {
        $client = $this->makeClient();
        $client->request('GET', $url);

        $this->assertEquals($codeResponse, $client->getResponse()->getStatusCode());
    }

    public function urlLogInProvider()
    {
        return array(
            array('/pharmacien'),
        );
    }

    public function urlAnonymousProvider()
    {
        return array(
            array('/', 302),
            array('/login'),
            array('/register/'),
            array('/contact'),
        );
    }


    /*
    private function getAllRoutesFromRouter()
    {
        $container = $this->getContainer();
        $router = $container->get('router');

        $routes = $router->getRouteCollection()->all();

        foreach ($routes as $routeName => $route) {
            dump($routeName);

        }
    }*/
}
