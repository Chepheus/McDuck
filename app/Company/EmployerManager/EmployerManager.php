<?php


namespace App\Company\EmployerManager;


use App\Company\Employer\EmployerInterface;

class EmployerManager implements EmployerManagerInterface
{
    private array $employers = [];

    public function hireEmployer(EmployerInterface $employer): void
    {
        $this->employers[$employer->getId()] = $employer;
    }

    public function fireEmployer(EmployerInterface $employer): void
    {
        unset($this->employers[$employer->getId()]);
    }

    public function getEmployers(): array
    {
        return $this->employers;
    }
}