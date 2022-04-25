<?php

namespace Games\Calc;

use Src\Engine ;
use function welcome;
use function engineGame;
use function cli\line;

$name = Engine\welcome();
$countRounds = 0;
line('What is the result of the expression?');
while ($countRounds < 3) {
    $correctAnswer = 0;
    $rand1 = rand(1, 50);
    $rand2 = rand(1, 50);
    $randSign = rand(1, 3);
    if ($randSign == 1) {
        $randSign = "+";
        $correctAnswer = $rand1 + $rand2;
    }
    if ($randSign == 2) {
        $randSign = "-";
        $correctAnswer = $rand1 - $rand2;
    }
    if ($randSign == 3) {
            $randSign = "*";
        $correctAnswer = $rand1 * $rand2;
    }
    $question = "$rand1$randSign$rand2";
    if (Engine\engineGame($question, $correctAnswer))
    $countRounds++;
    else {
        line('let`s try again, ' . $name);
        break;
    }
    if ($countRounds == 3)
    line('Congrulations, ' . $name);
}
