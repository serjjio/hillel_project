<?php

require'../vendor/autoload.php';

//use Lesson8\CacheItem;
use Lesson8\Cache;

if ($_GET) {
    if (isset($_GET['data'])) {
        foreach ($_GET['data'] as $key) {
            $cache = new Cache($key);
            echo $key . " - ";
            echo ($cache->getValue()??"Null") . PHP_EOL;
        }
    } else {
        foreach ($_GET as $k => $v) {
            $cache = new Cache($k);
            $cache->setValue($v);
            $cache->expiresAfter(1); // minutes
        }
        echo "Data has been saved";
    }
}








