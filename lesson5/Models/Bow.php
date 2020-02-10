<?php

namespace Models;

class Bow extends Weapon
{
    public $name = 'Bow';

    /**
     * Bow constructor.
     */
    public function __construct()
    {
        $this->damage = 30;
        $this->timeout = 15;
    }
}