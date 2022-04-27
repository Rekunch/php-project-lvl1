<?php

namespace Games\Gcd;

use Src\Engine ;

use function welcome;
use function engineGame;
use function cli\line;

function gcd()
{
    $name = Engine\welcome();
    $countRounds = 0;
    line('Find the greatest common divisor of given numbers.');
    while ($countRounds < 3) {
        $correctAnswer = 1;
        $divisor = 1;
        $randNumber1 = rand(1, 100);
        $randNumber2 = rand(1, 100);
        if ($randNumber1 > $randNumber2) {
            $correctAnswer = $randNumber2;
        } else { $correctAnswer = $randNumber1;
        }
        $question = "$randNumber1 $randNumber2";
        while ($divisor <= $correctAnswer) {
            if ($randNumber1 % $correctAnswer !== 0 || $randNumber2 % $correctAnswer !== 0) {
                $correctAnswer--;
            } else { break;
            }
        }
        if (Engine\engineGame($question, $correctAnswer)) {
            $countRounds++;
        } else {
            line('let`s try again, ' . $name . '!');
            break;
        }
        if ($countRounds == 3) {
            line('Congrulations, ' . $name . '!');
        }
    }
}

