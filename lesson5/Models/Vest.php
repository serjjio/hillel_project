<?php

namespace Models;

class Vest extends Protection
{
    public $name = 'Vest';

    /**
     * Vest constructor.
     */
    public function __construct()
    {
        $this->protection_level = 20;
        $this->part_of_body = 'Body';
    }
}