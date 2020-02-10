<?php

namespace Models;

class Gun extends Weapon
{
    public $name = 'Gun';

    /**
     * Gun constructor.
     */
    public function __construct()
    {
        $this->damage = 9;
        $this->timeout = 5;
    }
}