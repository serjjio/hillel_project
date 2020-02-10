<?php

namespace Controllers;

use Models\Officer;
use Models\Soldier;

class Game
{
    private $teams;
    private $weapons = [];
    private $protection = [];
    private const COUNT_TEAM = 2;
    public $round = 1;

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
     * @return array
     * @throws \Exception
     */
    public function generatorTeam(): array
    {
        //Generate Officer
        $team[] = [$this->officerGenerator()];
        $random_count_soldier = random_int(6, 9);
        for ($j = 1; $j <= $random_count_soldier; $j++) {
            //Generate Soldiers
            $team[] = [$j => $this->soldierGenerator()];
        }
            //$teams[] = $team;


        return $team;
    }

    public function fight(): array
    {
        if ($this->round%2 == 0) {
            foreach ($this->teams[0] as $team) {
                $team->life = $team->life - $this->damageOnPerson($this->teams[0], $this->teams[1]);
                if ($team->life <= 0) {
                    unset($team);
                }
            }
        }else{
            foreach ($this->teams[1] as $team) {
                $team->life = $team->life - $this->damageOnPerson($this->teams[1], $this->teams[0]);
                if ($team->life <= 0) {
                    unset($team);
                }
            }
        }
        $this->round++ ;
        return $this->teams;
    }

    private function damageOnPerson(array $team1, array $team2): int {
        $persons = 0;
        for ($i = 0; $i < count($team1); $i++){
            $persons +=count($team1);
        }
        return $this->totalDamage($team2) / $persons;
    }

    public function totalDamage(array $team): int
    {
        $power = 0;
        foreach ($team as $person) {
            $power += $person->power;
        }
        return $power;
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
        // if result = array
        if (is_array($arr_keys)) {
            for ($i = 0; $i < count($arr_keys); $i++){
                $arr_weapons[] = $this->weapons[$arr_keys[$i]];
            }
        }else {
            //if result = int
            $arr_weapons[] = $this->weapons[$arr_keys];
        }
        return $arr_weapons;
    }

    private function generatorProtections(): array
    {
        $arr_keys = array_rand($this->protection, random_int(1, count($this->protection)));
        $arr_protection = [];
        //if result = array
        if (is_array($arr_keys)) {
            for ($i = 0; $i < count($arr_keys); $i++){
                $arr_protection[] = $this->protection[$arr_keys[$i]];
            }
        }else {
            // if result = int
            $arr_protection[] = $this->protection[$arr_keys];
        }
        return $arr_protection;
    }
}