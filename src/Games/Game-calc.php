<?php
namespace Games\Calc;

use Src\Engine ;

use function welcome;
use function logicOfGames;

Engine\welcome();

$correctAnswer = 0;
print_r($rand1 = rand(1, 50));
$rand2 = rand(1, 50);
$randSign = rand(1, 3);
if($randSign == 1){
    $randSign = "+";
    $correctAnswer = $rand1 + $rand2;
    return $correctAnswer;
}
if($randSign == 2){
        $randSign = "-";
     $correctAnswer = $rand1 - $rand2;
    return $correctAnswer;
}
if($randSign == 3){
            $randSign = "*";
     $correctAnswer = $rand1 * $rand2;
    return $correctAnswer;
}
$question = "$rand1$randSign$rand2";

Engine\logicOfGames();
