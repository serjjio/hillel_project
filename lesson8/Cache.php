<?php


namespace Lesson8;

use Lesson8\CacheItem;

class Cache
{
    public $data;
    public $cache = array();

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function getValue()
    {
        if (!empty($this->data)) {
            foreach ($this->data as $k => $v) {
                if (is_numeric($k)) {
                    $this->cache[$v]->getKey();
                } else {
                    $cache = new CacheItem($k);
                    $cache->set($v);
                    $this->cache[$k] = $cache;
                }
            }
        } else {
            return null;
        }
    }


    /*const SAVE_DIR = 'cache';
    public $cache;*/


    /*public function __construct($key)
    {
        $this->cache = new CacheItem($key);
    }

    public function setValue($value)
    {
        $this->cache->set($value);
        $this->save();

    }

    public function getValue()
    {
        $file = self::SAVE_DIR . "/" . $this->cache->getKey() . ".cache";
        if (file_exists($file)) {
            $cache = unserialize(file_get_contents($file));
            return $cache->get();
        } else {
            return null;
        }
    }

    public function expiresAfter($time){

        $this->cache->expiresAfter($time);
        $this->save();
    }


    public function save()
    {
        $file = self::SAVE_DIR . "/" . $this->cache->getKey() . ".cache";

        return file_put_contents($file, serialize($this->cache));
    }*/

}