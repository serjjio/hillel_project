<?php

namespace Models;

class Knife extends Weapon
{
    public $name = 'Knife';

    /**
     * Knife constructor.
     */
    public function __construct()
    {
        $this->damage = 3;
        $this->timeout = 3;
    }

}