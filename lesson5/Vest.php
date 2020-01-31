<?php


class Vest extends Protection
{

    /**
     * Vest constructor.
     */
    public function __construct()
    {
        $this->protection_level = 20;
        $this->part_of_body = 'Body';
    }
}