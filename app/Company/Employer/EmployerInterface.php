<?php

namespace App\Company\Employer;

use App\Company\Order\OrderInterface;

interface EmployerInterface
{
    public function getId(): int;
    public function getName(): string;

    public function execute(OrderInterface $order): void;
}