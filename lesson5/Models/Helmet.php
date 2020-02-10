<?php

namespace Models;

class Helmet extends Protection
{
    public $name = 'Helmet';

    /**
     * Helmet constructor.
     */
    public function __construct()
    {
        $this->protection_level = 10;
        $this->part_of_body = 'Head';
    }
}