<?php


namespace App\Company\OrderManager;


use App\Company\Order\OrderInterface;

class OrderManager implements OrderManagerInterface
{
    /** @var OrderInterface[] */
    private array $orders = [];

    public function addOrder(OrderInterface $order): void
    {
        $this->orders[$order->getId()] = $order;
    }

    public function getOrders(int $count): array
    {
        $result = [];
        foreach ($this->orders as $order) {
            if ($count > 0 && count($this->orders) > 0) {
                $result[] = $order;
                $count--;
                unset($this->orders[$order->getId()]);
            }
        }

        return $result;
    }
}