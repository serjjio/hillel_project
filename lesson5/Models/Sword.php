<?php

namespace Models;

class Sword extends Weapon
{


    /**
     * Sword constructor.
     */
    public function __construct()
    {
        $this->damage = 7;
        $this->timeout = 5;
    }
}