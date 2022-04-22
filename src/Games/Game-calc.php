<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Src\Engine ;

Engine\welcome();

use function Engine\logicOfGames();

$rand1 = rand(1, 50);
$rand2 = rand(1, 50);
$randSign = rand(1, 3);
if($randSign == 1){
    $randSign = "+";
    $correctAnswer = $rand1 + $rand2;
}
if($randSign == 2){
        $randSign = "-";
     $correctAnswer = $rand1 - $rand2;
}
if($randSign == 3){
            $randSign = "*";
     $correctAnswer = $rand1 * $rand2;
}
$question = "$rand1$randSign$rand2";

Engine\logicOfGames();