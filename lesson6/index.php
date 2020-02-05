<?php

//require'../vendor/autoload.php';
require_once '../config/autoload.php';

use Models\Manager;
use Models\Worker;
use Controllers\Request;


$worker1 = new Worker('2011-05-15', 700, 'Kolya');
$worker2 = new Worker('2011-10-15', 750, 'Ivan');
$worker3 = new Worker('2015-10-15', 600, 'Vasya');
$worker4 = new Worker('2019-10-15', 650, 'Andrey');
$worker5 = new Worker('2013-10-15', 799, 'Serj');
$worker6 = new Worker('2009-10-15', 300, 'Test');

$managers = [
    $manager1 = new Manager('2010-05-15', 1000, 'Nick'),
    $manager2 = new Manager('2017-06-30', 1000, 'Marck'),
];

$manager1->addEmployee($worker1);
$manager1->addEmployee($worker2);
$manager1->addEmployee($worker3);

$manager2->addEmployee($worker4);
$manager2->addEmployee($worker5);
$manager2->addEmployee($worker6);

$request = new Request($managers);
if (isset($_GET['type'])) {
    switch ($_GET['type']) {
        case 'json':
            return $request->getJson();
            break;
        case 'xml':
            return $request->getXml();
            break;
        default:
            return $request->getHtml();

    }
}else{
    $request->getHtml();
}




