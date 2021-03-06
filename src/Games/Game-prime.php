<?php

namespace Games\Prime;

use Src\Engine;

use function cli\line;

function prime()
{
    $name = Engine\welcome();
    $countRounds = 0;
    line('Answer "yes" if given number is prime. Otherwise answer "no".');
    while ($countRounds < 3) {
        $randNumber = rand(1, 100);
        $correctAnswerYes = 'yes';
        $correctAnswerNo = 'no';
        $count = 0;
        $question = (string) $randNumber;
        if ($randNumber == 1) {
            $correctAnswer = $correctAnswerYes;
        } else {
            for ($i = 1; $i < $question; $i++) {
                if ($question % $i !== 0) {
                    $count = $count;
                }
                if ($question % $i == 0) {
                    $count++;
                }
            }
            if ($count > 1) {
                $correctAnswer = $correctAnswerNo;
            } else {
                $correctAnswer = $correctAnswerYes;
            }
        }
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
