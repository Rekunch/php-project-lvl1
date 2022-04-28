<?php

namespace Games\Progression;

use Src\Engine;

use function welcome;
use function engineGame;
use function cli\line;

function progression()
{
        $name = Engine\welcome();
        $countRounds = 0;
        line('What number is missing in the progression?');
    while ($countRounds < 3) {
        $countNumbers = rand(6, 10);
        $countProgression = rand(1, 10);
        $firstNumber = rand(1, 200);
        $unknowNumber = rand(1, $countNumbers);
        $arrayNumbers = [];
        $i = 0;
        while ($i < $countNumbers) {
            if ($i == 0) {
                $arrayNumbers[$i] = $firstNumber;
                $i++;
            } else {
                $arrayNumbers[$i] = $arrayNumbers[$i - 1] + $countProgression;
                $i++;
            }
        }
        $unknowSymbol = '..';
        $arrayNumbers[$unknowNumber] = $unknowSymbol;
        $correctIndex = array_search($unknowSymbol, $arrayNumbers, bool $strict = false);
        if ($correctIndex > 0) {
            if ($correctIndex <= (count($arrayNumbers)) - 2) {
                $correctAnswer =(string) ($arrayNumbers[$correctIndex - 1] + $arrayNumbers[$correctIndex + 1]) / 2 ;
            } else {
                 $correctAnswer = (string) $arrayNumbers[$correctIndex - 1] + ($arrayNumbers[$correctIndex - 2] - $arrayNumbers[$correctIndex - 3]);
            }
        }
        $correctAnswer = (string) $correctAnswer;
        $question = implode(' ', $arrayNumbers);
        if (Engine\engineGame($question, $correctAnswer)) {
            $countRounds++;
        } else {
            line("Let's try again, " . $name . "!");
            break;
        }
        if ($countRounds == 3) {
            line('Congratulations, ' . $name . '!');
        }
    }
}
