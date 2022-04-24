<?php
namespace Games\Calc;

use Src\Engine ;

use function welcome;
use function engineGame;
use function cli\line;

Engine\welcome();
$name =Engine\welcome();
$countRounds = 0;
while ($countRounds < 3){
$correctAnswer = 0;
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

if (Engine\engineGame($question, $correctAnswer))
    $countRounds++;
    else
        break;
if ($countRounds == 3)
    line('Congrulations, '.$name);
}
