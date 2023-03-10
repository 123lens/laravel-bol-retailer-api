<?php

namespace Budgetlens\LaravelBolRetailerApi\Facades;

use Illuminate\Support\Facades\Facade;

class Bol extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'Bol';
    }
}
