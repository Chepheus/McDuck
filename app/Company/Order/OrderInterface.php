<?php


namespace App\Company\Order;


use App\Company\Employer\EmployerInterface;

interface OrderInterface
{
    public function getId(): int;
    public function getPrice(): float;
    public function getStartTime(): \DateTimeImmutable;

    public function setExecutor(EmployerInterface $executor): void;
    public function getExecutor(): EmployerInterface;

    public function setStopTime(\DateTimeImmutable $date): void;
    public function getStopTime(): ?\DateTimeImmutable;

    public function setStatus(int $status): void;
    public function getStatus(): int;
}