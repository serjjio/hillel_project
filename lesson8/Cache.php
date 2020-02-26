<?php


namespace Lesson8;

use Lesson8\CacheItem;

class Cache
{

    const SAVE_DIR = 'cache';
    public $cache;


    public function __construct($key)
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
    }

}