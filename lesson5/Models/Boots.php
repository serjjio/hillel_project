<?php

namespace Models;

class Boots extends Protection
{
    public $name = 'Boots';

    /**
     * Boots constructor.
     */
    public function __construct()
    {
        $this->protection_level = 5;
        $this->part_of_body = 'Legs';
    }
}