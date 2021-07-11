<?php


namespace App\Company;


use App\Company\EmployerManager\EmployerManagerInterface;
use App\Company\OrderManager\OrderManagerInterface;

interface CompanyInterface
{
    public function getEmployerManager(): EmployerManagerInterface;
    public function getOrderManager(): OrderManagerInterface;

    public function executeOrders(): void;
}