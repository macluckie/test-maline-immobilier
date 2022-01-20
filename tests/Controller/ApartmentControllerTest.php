<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ApartmentControllerTest extends WebTestCase
{
    public function testIndex(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/');
        $this->assertResponseIsSuccessful();
    }

    public function testCreateGet(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/apartment');
        $this->assertResponseIsSuccessful();
    }

    public function testCreatePost(): void
    {
        $client = static::createClient();
        $crawler = $client->request('POST', '/apartment');
        $this->assertResponseIsSuccessful();
    }
}
