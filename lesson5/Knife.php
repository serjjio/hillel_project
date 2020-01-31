<?php


class Knife extends Weapon
{

    /**
     * Knife constructor.
     */
    public function __construct()
    {
        $this->damage = 3;
        $this->timeout = 3;
    }

}