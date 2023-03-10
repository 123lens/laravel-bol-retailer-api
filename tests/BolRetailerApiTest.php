<?php

namespace Budgetlens\LaravelBolRetailerApi\Tests;

use Budgetlens\BolRetailerApi\Client;

class BolRetailerApiTest extends TestCase
{
    /** @test */
    public function itCanWorkWithAppInstance(): void
    {
        $this->assertInstanceOf(Client::class, app('Bol'));

        $this->assertInstanceOf(Client::class, $this->app['Bol']);
    }
}
