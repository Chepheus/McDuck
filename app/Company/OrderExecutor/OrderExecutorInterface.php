<?php

namespace App\Company\OrderExecutor;

use App\Company\Order\OrderInterface;

interface OrderExecutorInterface
{
    public function execute(OrderInterface $order): void;
}