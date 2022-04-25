<?php
namespace Games\Gcd;

use Src\Engine ;
use function welcome;
use function engineGame;
use function cli\line;

$name = Engine\welcome();
$countRounds = 0;
line('Find the greatest common divisor of given numbers.');
while ($countRounds < 3) {
    $correctAnswer = 0;
    $divisor = 1;
    $randNumber1 = rand(1, 100);
    $randNumber2 = rand(1, 100);
    $question = "$rand $rand2";
    while ($divisor > 0){
    if($randnumber1 % $divisor == 0 && $randnumber2 % $divisor == 0)
        $divisor++;
    else 
      $correctnumber = $divisor;
      break;
      }
    if (Engine\engineGame($question, $correctAnswer))
    $countRounds++;
    else {
        line('let`s try again, ' . $name);
        break;
    }
    if ($countRounds == 3)
    line('Congrulations, ' . $name);
}
