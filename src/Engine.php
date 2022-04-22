<?php

namespace Src\Engine;

use  Games\Calc;
use function cli\line;
use function cli\prompt;

function welcome(){
	line('Welcome to the Brain Game!');
	$name = prompt('May I have your name?');
	line("Hello, %s!", $name);
	return $name;
}

function startGame($question, $correctAnswer, $name){
	$i = 0;
	$currentAnswer = '';
	while ($i < 3 ){
		line('Question: '.$question);
		$currentAnswer = prompt('Your answer');
	if ($currentAnswer === $correctAnswer){
		line('Correct!');
		$i++;
	}
	else if($currentAnswer !== $correctAnswer){
		line("'$currentAnswer' is wrong answer;(. Correct answer was '$correctAnswer'.");
		line('let`s try again, '.$name);
		break;
	}
	}if($i == 3)
	line('Cangrulations, '.$name);
				}
		
		
		
	
