<?php

namespace Budgetlens\LaravelBolRetailerApi\Tests;

use Budgetlens\BolRetailerApi\Client;
use Budgetlens\BolRetailerApi\Endpoints\Commissions;
use Budgetlens\BolRetailerApi\Endpoints\Inbounds;
use Budgetlens\BolRetailerApi\Endpoints\RetailerAPI\Insights;
use Budgetlens\BolRetailerApi\Endpoints\Inventory;
use Budgetlens\BolRetailerApi\Endpoints\Invoices;
use Budgetlens\BolRetailerApi\Endpoints\Offers;
use Budgetlens\BolRetailerApi\Endpoints\Orders;
use Budgetlens\BolRetailerApi\Endpoints\Promotions;
use Budgetlens\BolRetailerApi\Endpoints\Replenishments;
use Budgetlens\BolRetailerApi\Endpoints\Returns;
use Budgetlens\BolRetailerApi\Endpoints\SharedAPI\Status;
use Budgetlens\BolRetailerApi\Endpoints\Shipments;
use Budgetlens\BolRetailerApi\Endpoints\Shipping;
use Budgetlens\BolRetailerApi\Endpoints\Subscriptions;
use Budgetlens\BolRetailerApi\Endpoints\Transports;
use Budgetlens\LaravelBolRetailerApi\WrapperClient;

class BolRetailerApiTest extends TestCase
{
    /** @test */
    public function itCanWorkWithAppInstance(): void
    {
        $this->assertInstanceOf(WrapperClient::class, app('Bol'));

        $this->assertInstanceOf(WrapperClient::class, $this->app['Bol']);
    }

    /** @test */
    public function returnsCorrectEndpoints(): void
    {
        $service = app('Bol');
        $this->assertInstanceOf(Commissions::class, $service->commission());
        $this->assertInstanceOf(Insights::class, $service->insights());
        $this->assertInstanceOf(Orders::class, $service->orders());
        $this->assertInstanceOf(Offers::class, $service->offers());
        $this->assertInstanceOf(Status::class, $service->status());
        $this->assertInstanceOf(Replenishments::class, $service->replenishments());
        $this->assertInstanceOf(Returns::class, $service->returns());
        $this->assertInstanceOf(Shipping::class, $service->shipping());
        $this->assertInstanceOf(Shipments::class, $service->shipments());
        $this->assertInstanceOf(Inventory::class, $service->inventory());
        $this->assertInstanceOf(Invoices::class, $service->invoices());
        $this->assertInstanceOf(Inbounds::class, $service->inbounds());
        $this->assertInstanceOf(Promotions::class, $service->promotions());
        $this->assertInstanceOf(Subscriptions::class, $service->subscriptions());
        $this->assertInstanceOf(Transports::class, $service->transports());
    }
}
