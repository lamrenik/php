<?php
function calculator(string $str): string
{
    $operations = [10];
    $numbers = [10];

    for ($i = 0; $i < strlen($str); $i++) {
        if ($str[$i] === '+' || $str[$i] === '-') {
            $operations[] = $str[$i];
        }
    }
    if (count($operations) > 4) {
        return 'Ошибка ввода';
    }
    $correctInput = '0123456789+-';
    for ($i = 0; $i < strlen($str); $i++) {
        if (!strpos($correctInput, $str[$i])) {
            return 'Ошибка ввода';
        }
    }

    $numbers = explode('+', $str);
    $temp = '';
    $sum = 0;
    foreach ($numbers as $num) {
        $minusPos = strpos($num, '-');
        if ($minusPos) {
            $numbersWithMinus = explode('-', $num);
            foreach ($numbersWithMinus as $keyMinus => $numMinus) {
                if ($keyMinus === 0) {
                    $temp = $numMinus;
                } else {
                    $temp = $temp - (int)$numMinus;
                }
            }
            $sum += $temp;
        } else {
            $sum += $num;
        }
    }
    return $sum;
}
calculator('3+2-4+55');
