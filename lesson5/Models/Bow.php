<?php

namespace Models;

class Bow extends Weapon
{

    /**
     * Bow constructor.
     */
    public function __construct()
    {
        $this->damage = 30;
        $this->timeout = 15;
    }
}