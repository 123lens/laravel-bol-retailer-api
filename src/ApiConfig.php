<?php

namespace Budgetlens\LaravelBolRetailerApi;

class ApiConfig extends \Budgetlens\BolRetailerApi\ApiConfig
{
    public function getClientId(): string
    {
        return config('bol.client_id');
    }

    public function getClientSecret(): string
    {
        return config('bol.client_secret');
    }

    public function getTestMode(): bool
    {
        return config('bol.test', false);
    }

    public function getUserAgent(): string
    {
        return 'Laravel Bol Retailer Api Wrapper/Budgetlens @ V8';
    }
}
