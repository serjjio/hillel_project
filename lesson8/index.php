<?php

require'../vendor/autoload.php';

use Lesson8\CacheItem;
use Lesson8\Cache;
/*
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
*/


//$cache = new Cache($_GET);
//$cache->getData();
$data = ['key1' => 'val1', 'key2' => 'val2'];
$data1 = ['key1', 'key2'];

$cache = new Cache($data1);



echo $cache->getValue();
var_dump($cache->cache);
//$cache->set('val1');
//$cache->save();
//$cache->expiresAfter(1);
//var_dump($cache->getItem('key1'));







