<?php

require_once "vendor/autoload.php";

$employerManger = new App\Company\EmployerManager\EmployerManager();
$orderManager = new \App\Company\OrderManager\OrderManager();

$mcDuck = new \App\Company\McDuck($employerManger, $orderManager);

$employer = new \App\Company\Employer\Employer(1, 'Anton');
$mcDuck->getEmployerManager()->hireEmployer($employer);

$order = new App\Company\Order\Order(
    id: 1,
    price: 12,
    startTime: new DateTimeImmutable(),
    status: \App\Company\Order\Status\Status::STATUS_OPEN
);

$mcDuck->getOrderManager()->addOrder($order);
$mcDuck->executeOrders();