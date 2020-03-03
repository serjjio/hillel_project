<?php

session_start();

require'../vendor/autoload.php';

use Lesson8\CacheItem;
use Lesson8\Cache;


if ($_GET) {
    if (isset($_GET['data'])) {
        $cache = new Cache();
        foreach ($_GET['data'] as $key) {
            echo $key . " - ";
            echo ($cache->getItemByKey($key)??"Time is over") . PHP_EOL;
        }
    } else {
        $cache = new Cache();
        foreach ($_GET as $k => $v) {
            $cacheItem = new CacheItem($k);
            $cacheItem->set($v);
            $cacheItem->expiresAfter(1); // minutes
            $cache->setItem($cacheItem);
        }
        echo "Data has been saved";
    }
}










