<?php

namespace Games\Prime;

use Src\Engine;
use function welcome;
use function engineGame;
use function cli\line;

Function prime()
{
	$name = Engine\welcome();
	$countRounds = 0;
	line('Answer "yes" if given number is prime. Otherwise answer "no".');
	while ($countRounds < 3) {
		$randNumber = rand(1, 100);

