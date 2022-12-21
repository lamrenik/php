<?php
require('Calculator.php');
$calculator = new Calculator();
echo $calculator->plus(4)->minus(1)->product(42)->division(0.3)->getResult() . PHP_EOL;
echo $calculator->plus(3)->plus(3)->minus(3)->division(3)->getResult() . PHP_EOL;
echo $calculator->plus(1.4)->plus(2.6)->product(4)->getResult() . PHP_EOL;
echo $calculator->plus(1)->plus(2)->product(3)->division(0)->getResult();
