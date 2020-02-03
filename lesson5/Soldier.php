<?php


class Soldier
{
    public $power = 10;
    public $life = 100;
    public $weapons;
    public $protections;
    public $default_weapon = "Knife";
    protected const MAX_POWER = 100;
    protected static $count_soldier = 1;
    public $name = 'Soldier';

    /**
     * Soldier constructor.
     * @param int $power
     * @param array $weapons
     * @param array $protections
     * @throws Exception
     */
    public function __construct(int $power, Array $weapons = [], Array $protections = [])
    {
        //$this->name = $this->name . random_int(0, 100);
        $this->name = $this->name.self::$count_soldier++;
        $this->weapons = $this->checkWeapons($weapons);
        $this->protections = $protections;
        $this->power = $this->checkPower($power);
        $this->life = $this->checkLife();



    }

    /**
     * @return int
     */
    public function getPower(): int
    {
        return $this->power;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }


    /**
     * @param array $weapons
     * @return Array
     */
    //check for default weapons
    protected function checkWeapons(Array $weapons): Array
    {
        if (!in_array(new $this->default_weapon, $weapons)) {
            $weapons[] = new $this->default_weapon;
        }
        return $weapons;
    }

    /**
     * @param int $power
     * @return int
     */
    protected function checkPower(int $power): int
    {
        $sumPower = 0;
        foreach ($this->weapons as $weapon){
            $sumPower += $weapon->damage;
        }
        $power = $power + $sumPower;
        //check MaxPower
        $damage = $power > self::MAX_POWER ? self::MAX_POWER : $power;
        return $damage;

    }

    protected function checkLife(): int
    {
        $sumLife = 0;
        foreach ($this->protections as $protection) {
            $sumLife += $protection->protection_level;
        }
        return $this->life + $sumLife;
    }




}