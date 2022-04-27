<?php

namespace Src\Engine;

use function cli\line;
use function cli\prompt;

function welcome()
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    return $name;
}

function engineGame(string $question, $correctAnswer) : bool
{
    $currentAnswer = '';
    line('Question: ' . $question);
    $currentAnswer = prompt('Your answer');
    if ($currentAnswer == $correctAnswer) {
        line('Correct!');
        return true;
    } else {
        line("'$currentAnswer' is wrong answer;(. Correct answer was '$correctAnswer'.");
        return false;
    }
}
