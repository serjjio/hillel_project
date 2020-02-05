<?php

namespace Controllers;

use Models\Officer;
use Models\Soldier;

class Game
{
    //private $team = [];
    private $weapons = [];
    private $protection = [];

    /**
     * Game constructor.
     * @param array $weapons
     * @param array $protection
     */
    public function __construct(array $weapons, array $protection)
    {
        $this->weapons = $weapons;
        $this->protection = $protection;
    }


    /**
     * @param array $weapons
     * @param array $protection
     * @return array
     */
    public function generatorTeam(): array
    {
        //Add officer
        $team[] = [$this->officerGenerator()];

        //Add soldiers:
        $random_count_soldier = random_int(0, 9);
        if ($random_count_soldier > 0) {
            for ($i = 1; $i <= $random_count_soldier; $i++){
                $team[] = [$i => $this->soldierGenerator()];
            }
        }

        return $team;
    }

    private function officerGenerator(): Officer
    {
        return new Officer(random_int(10, 50), $this->generatorWeapons(), $this->generatorProtections());
    }

    private function soldierGenerator(): Soldier
    {
        return new Soldier(random_int(10, 50), $this->generatorWeapons(), $this->generatorProtections());
    }

    private function generatorWeapons(): array
    {
        $arr_keys = array_rand($this->weapons, random_int(1, count($this->weapons)));
        $arr_weapons = [];
        if (is_array($arr_keys)) {
            for ($i = 0; $i < count($arr_keys); $i++){
                $arr_weapons[] = $this->weapons[$arr_keys[$i]];
            }
        }else {
            $arr_weapons[] = $this->weapons[$arr_keys];
        }
        return $arr_weapons;
    }

    private function generatorProtections(): array
    {
        $arr_keys = array_rand($this->protection, random_int(1, count($this->protection)));
        $arr_protection = [];
        if (is_array($arr_keys)) {
            for ($i = 0; $i < count($arr_keys); $i++){
                $arr_protection[] = $this->protection[$arr_keys[$i]];
            }
        }else {
            $arr_protection[] = $this->protection[$arr_keys];
        }
        return $arr_protection;
    }
}