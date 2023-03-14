<?php

namespace Budgetlens\LaravelBolRetailerApi;

use Budgetlens\BolRetailerApi\Client;
use Budgetlens\BolRetailerApi\Endpoints\Commissions;
use Budgetlens\BolRetailerApi\Endpoints\Inbounds;
use Budgetlens\BolRetailerApi\Endpoints\Insights;
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

class WrapperClient extends Client
{
    public function commission(): Commissions
    {
        return $this->commission;
    }

    public function insights(): Insights
    {
        return $this->insights;
    }

    public function orders(): Orders
    {
        return $this->orders;
    }

    public function offers(): Offers
    {
        return $this->offers;
    }

    public function status(): Status
    {
        return $this->status;
    }

    public function replenishments(): Replenishments
    {
        return $this->replenishments;
    }

    public function returns(): Returns
    {
        return $this->returns;
    }

    public function shipping(): Shipping
    {
        return $this->shipping;
    }

    public function shipments(): Shipments
    {
        return $this->shipments;
    }

    public function inventory(): Inventory
    {
        return $this->inventory;
    }

    public function invoices(): Invoices
    {
        return $this->invoices;
    }

    public function inbounds(): Inbounds
    {
        return $this->inbounds;
    }

    public function promotions(): Promotions
    {
        return $this->promotions;
    }

    public function subscriptions(): Subscriptions
    {
        return $this->subscriptions;
    }

    public function transports(): Transports
    {
        return $this->transports;
    }
}
