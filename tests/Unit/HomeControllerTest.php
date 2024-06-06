<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class HomeControllerTest extends WebTestCase
{
    public function testGreetingRouteWithDefaultName(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/hello');

        $this->assertResponseIsSuccessful();
        $this->assertSelectorTextContains('body', 'Hello World');
    }

    public function testGreetingRouteWithName(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/hello/John');

        $this->assertResponseIsSuccessful();
        $this->assertSelectorTextContains('body', 'Hello John');
    }
}
