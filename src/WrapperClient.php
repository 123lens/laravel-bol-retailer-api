<?php

namespace Budgetlens\LaravelBolRetailerApi;

use Budgetlens\BolRetailerApi\Client;
use Budgetlens\BolRetailerApi\Contracts\Config;
use Budgetlens\BolRetailerApi\Endpoints\Commissions;
use Budgetlens\BolRetailerApi\Endpoints\Inbounds;
use Budgetlens\BolRetailerApi\Endpoints\RetailerAPI\Insights;
use Budgetlens\BolRetailerApi\Endpoints\Inventory;
use Budgetlens\BolRetailerApi\Endpoints\Invoices;
use Budgetlens\BolRetailerApi\Endpoints\Offers;
use Budgetlens\BolRetailerApi\Endpoints\Orders;
use Budgetlens\BolRetailerApi\Endpoints\Promotions;
use Budgetlens\BolRetailerApi\Endpoints\Replenishments;
use Budgetlens\BolRetailerApi\Endpoints\RetailerAPI\Products;
use Budgetlens\BolRetailerApi\Endpoints\RetailerAPI\Retailers;
use Budgetlens\BolRetailerApi\Endpoints\Returns;
use Budgetlens\BolRetailerApi\Endpoints\SharedAPI\Status;
use Budgetlens\BolRetailerApi\Endpoints\Shipments;
use Budgetlens\BolRetailerApi\Endpoints\Shipping;
use Budgetlens\BolRetailerApi\Endpoints\Subscriptions;
use Budgetlens\BolRetailerApi\Endpoints\Transports;
use Budgetlens\BolRetailerApi\SharedClient;

class WrapperClient
{
    private $config;
    private $retailerApi;
    private $sharedApi;

    public function __construct(?Config $config = null)
    {
        $this->config = $config;
        $this->retailerApi = new Client($config);
        $this->sharedApi = new SharedClient($config);
    }

    public function commission(): Commissions
    {
        return $this->retailerApi->commission;
    }

    public function insights(): Insights
    {
        return $this->retailerApi->insights;
    }

    public function orders(): Orders
    {
        return $this->retailerApi->orders;
    }

    public function offers(): Offers
    {
        return $this->retailerApi->offers;
    }

    public function products(): Products
    {
        return $this->retailerApi->products;
    }

    public function status(): Status
    {
        return $this->sharedApi->status;
    }

    public function replenishments(): Replenishments
    {
        return $this->retailerApi->replenishments;
    }

    public function retailers(): Retailers
    {
        return $this->retailerApi->retailers;
    }

    public function returns(): Returns
    {
        return $this->retailerApi->returns;
    }

    public function shipping(): Shipping
    {
        return $this->retailerApi->shipping;
    }

    public function shipments(): Shipments
    {
        return $this->retailerApi->shipments;
    }

    public function inventory(): Inventory
    {
        return $this->retailerApi->inventory;
    }

    public function invoices(): Invoices
    {
        return $this->retailerApi->invoices;
    }

    public function inbounds(): Inbounds
    {
        return $this->retailerApi->inbounds;
    }

    public function promotions(): Promotions
    {
        return $this->retailerApi->promotions;
    }

    public function subscriptions(): Subscriptions
    {
        return $this->retailerApi->subscriptions;
    }

    public function transports(): Transports
    {
        return $this->retailerApi->transports;
    }
}
