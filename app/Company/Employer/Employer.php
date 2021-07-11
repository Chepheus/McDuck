<?php


namespace App\Company\Employer;


use App\Company\Order\OrderInterface;
use App\Company\Order\Status\Status;

class Employer implements EmployerInterface
{
    public function __construct(
        private int $id,
        private string $name
    ){}

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    // Execution have to be async
    public function execute(OrderInterface $order): void
    {
        // some execution
        $order->setStopTime(new \DateTimeImmutable());
        $order->setStatus(Status::STATUS_DONE);
    }
}