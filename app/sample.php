<?php

function doubleNum(int $num1): int
{
    return $num1 * 2;
}

$numbers = [1, 2, 3];
$doubleNumbers = [];

foreach ($numbers as $number) {
    $doubleNumbers[] = doubleNum($number);
}

print_r($doubleNumbers);