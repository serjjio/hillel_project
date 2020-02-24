<?php


namespace Lesson8;


use Psr\Cache\CacheItemInterface;

class CacheItem implements CacheItemInterface
{

    private $key;
    private $value;
    private $diffTime;
    private $hit = false;
    public $data = array();

    /**
     * CacheItem constructor.
     * @param $key
     */
    public function __construct($key)
    {
        $this->key = $key;
    }


    /**
     * @inheritDoc
     */
    public function getKey(): string
    {
        // TODO: Implement getKey() method.
        return $this->key;
    }

    /**
     * @inheritDoc
     */
    public function get()
    {
        // TODO: Implement get() method.
        if ($this->isHit()) {
            return $this->value;
        }
        return null;
    }

    /**
     * @inheritDoc
     */
    public function isHit(): bool
    {
        // TODO: Implement isHit() method.
        if (!$this->hit){
            return false;
        }
        if ($this->diffTime === null) {
            return true;
        }

        $now = new \DateTime();

        return $now < $this->diffTime;

    }

    /**
     * @inheritDoc
     */
    public function set($value)
    {
        // TODO: Implement set() method.
        $this->value = $value;
        $this->hit = true;
        $this->data = [$this->key => $value];

    }

    /**
     * @inheritDoc
     */
    public function expiresAt($expiration)
    {
        // TODO: Implement expiresAt() method.
        $this->diffTime = $expiration;

    }

    /**
     * @inheritDoc
     */
    public function expiresAfter($time)
    {
        // TODO: Implement expiresAfter() method.
        $this->diffTime = (new \DateTime())->add(new \DateInterval('PT' . $time . 'M'));
    }
}