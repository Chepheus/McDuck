<?php


namespace App\Company\Order;


use App\Company\Employer\EmployerInterface;

class Order implements OrderInterface
{
    public function __construct(
        private int $id,
        private float $price,
        private \DateTimeImmutable $startTime,
        private int $status,
        private ?EmployerInterface $executor = null,
        private ?\DateTimeImmutable $stopTime = null
    ){}

    public function getId(): int
    {
        return $this->id;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function setExecutor(EmployerInterface $executor): void
    {
        $this->executor = $executor;
    }

    public function getExecutor(): EmployerInterface
    {
        return $this->executor;
    }

    public function getStartTime(): \DateTimeImmutable
    {
        return $this->startTime;
    }

    public function setStopTime(\DateTimeImmutable $date): void
    {
        $this->stopTime = $date;
    }

    public function getStopTime(): ?\DateTimeImmutable
    {
        return $this->stopTime;
    }

    public function setStatus(int $status): void
    {
        $this->status = $status;
    }

    public function getStatus(): int
    {
        return $this->status;
    }
}