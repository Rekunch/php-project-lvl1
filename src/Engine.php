<?php

namespace Src\Engine;

use function cli\line;
use function cli\prompt;

function welcome(){
	line('Welcome to the Brain Game!');
	$name = prompt('May I have your name?');
	line("Hello, %s!", $name);
	return $name;
}

function logicOfGames($question , $correctAnswer){
	$i = 0;
	while ($i < 3 ){
		line('Question: '.$Question);
		$currentAnswer = prompt('Your answer');
	if ($currentAnswer === $correctAnswer){
		line('Correcct!');
		$i++;
	}
	if ($currentAnswer !=== $correctAnswer){
		line("'$currentAnswer' is wrong answer;(. Correct answer was '$correctAnswer'.");
		line('let`s try again, '.$name);
		break;
	}
	}if($i = 3)
	line('Cangrulations, '$name);
				}
		
		
		
	
