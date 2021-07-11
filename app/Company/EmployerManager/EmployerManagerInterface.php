<?php


namespace App\Company\EmployerManager;


use App\Company\Employer\EmployerInterface;

interface EmployerManagerInterface
{
    public function hireEmployer(EmployerInterface $employer): void;

    public function fireEmployer(EmployerInterface $employer): void;

    /**
     * @return EmployerInterface[]
     */
    public function getEmployers(): array;
}