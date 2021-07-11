<?php


namespace App\Company\OrderManager;


use App\Company\Order\OrderInterface;

interface OrderManagerInterface
{
    public function addOrder(OrderInterface $order): void;

    /**
     * @param int $count
     * @return OrderInterface[]
     */
    public function getOrders(int $count): array;
}