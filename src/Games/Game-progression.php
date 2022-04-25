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
	}
}
