<?php


class Officer extends Soldier
{
    public $default_weapon = "Gun";
    public $gun;
    public $name = 'Officer';
    public static $e = 1;


    /**
     * Officer constructor.
     * @param int $power
     * @param array $weapons
     * @param array $protections
     * @throws Exception
     */
    public function __construct(int $power, Array $weapons = [], Array $protections = [])
    {
        $this->setName('Officer');
        $this->life = 110;
        parent::__construct($power, $weapons, $protections);

    }
}