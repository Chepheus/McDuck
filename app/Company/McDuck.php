<?php

namespace App\Company;

use App\Company\EmployerManager\EmployerManagerInterface;
use App\Company\OrderManager\OrderManagerInterface;

class McDuck implements CompanyInterface
{
    public function __construct(
        private EmployerManagerInterface $employerManager,
        private OrderManagerInterface $orderManager
    ) {}

    public function getEmployerManager(): EmployerManagerInterface
    {
        return $this->employerManager;
    }

    public function getOrderManager(): OrderManagerInterface
    {
        return $this->orderManager;
    }

    public function executeOrders(): void
    {
        $employers = $this->getEmployerManager()->getEmployers();
        $employersCount = count($employers);
        while ($orders = $this->getOrderManager()->getOrders($employersCount)) {
            foreach ($orders as $order) {
                $employer = current($employers);
                $order->setStatus(\App\Company\Order\Status\Status::STATUS_PROGRESS);
                $order->setExecutor($employer);

                $employer->execute($order);
                // some event that order is done
                next($employers);
            }

            reset($employers);
        }
    }
}