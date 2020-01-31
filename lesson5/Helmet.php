<?php


class Helmet extends Protection
{

    /**
     * Helmet constructor.
     */
    public function __construct()
    {
        $this->protection_level = 10;
        $this->part_of_body = 'Head';
    }
}