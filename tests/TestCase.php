<?php

namespace Budgetlens\LaravelBolRetailerApi\Tests;

use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    /**
     * Define environment setup.
     *
     * @param \Illuminate\Foundation\Application $app
     *
     * @return void
     */
    protected function getEnvironmentSetUp($app)
    {
        config()->set('bol', [
            'client_id' => 'websiteKey',
            'client_secret' => 'secretKey',
            'test' => true
        ]);
    }

    /**
     * @param $app
     * @return string[]
     */
    protected function getPackageAliases($app)
    {
        return [
            'Bol' => \Budgetlens\LaravelBolRetailerApi\Facades\Bol::class
        ];
    }

    /**
     * @param \Illuminate\Foundation\Application $app
     * @return array
     */
    protected function getPackageProviders($app)
    {
        return [
            \Budgetlens\LaravelBolRetailerApi\ServiceProvider::class
        ];
    }
}
