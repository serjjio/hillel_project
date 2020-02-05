<?php

namespace Models;

class Gun extends Weapon
{

    /**
     * Gun constructor.
     */
    public function __construct()
    {
        $this->damage = 9;
        $this->timeout = 5;
    }
}