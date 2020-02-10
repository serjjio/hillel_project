<?php

namespace Models;

class Sword extends Weapon
{
    public $name = 'Sword';

    /**
     * Sword constructor.
     */
    public function __construct()
    {
        $this->damage = 7;
        $this->timeout = 5;
    }
}