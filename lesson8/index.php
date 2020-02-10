<?php

require'../vendor/autoload.php';

use Lesson8\CacheItem;

$date = new DateTime();
foreach ($_GET as $k => $v){
    $data[$k] = [$v, $date->format('Y-m-d')];
}
var_dump($data);