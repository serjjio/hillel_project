<?php

namespace Models;

class Protection
{
    public $protection_level;
    public $part_of_body;

    /**
     * @return mixed
     */
    public function getProtectionLevel()
    {
        return $this->protection_level;
    }


}