<?php


class Automatic extends Weapon
{


    /**
     * Automatic constructor.
     */
    public function __construct()
    {
        $this->damage = 10;
        $this->timeout = 1;
    }
}