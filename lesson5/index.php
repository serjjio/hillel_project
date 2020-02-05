<?php

require_once '../lesson7/autoload.php';
//require_once '../vendor/autoload.php';

use Controllers\Game;
use Models\Knife;
use Models\Gun;
use Models\Bow;
use Models\Automatic;
use Models\Sword;
use Models\Helmet;
use Models\Boots;
use Models\Vest;


//Create Weapons:
$knife = new Knife();
$gun = new Gun();
$bow = new Bow();
$automatic = new Automatic();
$sword = new Sword();

$weapons = [
  $knife,
  $gun,
  $bow,
  $automatic,
  $sword
];



//Create Protection:
$helmet = new Helmet();
$boots = new Boots();
$vest = new Vest();

$protection = [
    $helmet,
    $boots,
    $vest
];


$game = new Game($weapons, $protection);

//Create Teams
$team1 = $game->generatorTeam();
$team2 = $game->generatorTeam();

$r = 1;
$damage_on_person_from_team1 = 0;
$damage_on_person_from_team2 = 0;

while (true) {
    $power1 = 0;
    $power2 = 0;

    echo "Team1 </br>" . PHP_EOL;
    for ($i = 0; $i < count($team1); $i++) {
        $live1 = ($team1[$i][$i]->life - $damage_on_person_from_team1);
        $team1[$i][$i]->life = $live1;
        if ($live1 <= 0) continue;
        echo "Name: " . $team1[$i][$i]->name . " | Life LEVEL: " . $live1 . PHP_EOL . "</br>";
        $power1 += $team1[$i][$i]->power;

    }
    echo "Team damage: " . $power1 . PHP_EOL . PHP_EOL . "</br>";
    echo "Team2 </br>" . PHP_EOL;
    for ($j = 0; $j < count($team2); $j++) {
        $live2 = ($team2[$j][$j]->life - $damage_on_person_from_team2);
        if ($live2 <= 0) continue;
        $team2[$j][$j]->life = $live2;
        echo "Name: " . $team2[$j][$j]->name . " | Life LEVEL: " . $live2 . PHP_EOL . "</br>";
        $power2 += $team2[$j][$j]->power;

    }
    echo "Team damage: " . $power2 . PHP_EOL . PHP_EOL . "</br>";
    echo "################################################################################" . PHP_EOL . PHP_EOL . "</br>";


    $damage_on_person_from_team2 = 0;
    $damage_on_person_from_team1 = 0;
    if ($power2 == 0){
        echo "Game Over. Team 1 win";
        break;
    }
    if ($power1 == 0){
        echo "Game Over. Team 2 win";
        break;
    }
    echo "Round" . $r . PHP_EOL . PHP_EOL . "</br>";
    $r++;
    if ($r%2 == 0){
        $damage_on_person_from_team2 = $power1 / count($team2);
    }else{
        $damage_on_person_from_team1 = $power2 / count($team1);
    }


}



