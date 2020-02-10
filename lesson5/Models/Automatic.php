<?php

namespace Models;

class Automatic extends Weapon
{
    public $name = 'Automatic';


    /**
     * Automatic constructor.
     */
    public function __construct()
    {
        $this->damage = 10;
        $this->timeout = 1;
    }
}