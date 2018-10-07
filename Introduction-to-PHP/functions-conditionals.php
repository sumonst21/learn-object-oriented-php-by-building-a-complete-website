<?php
/**
 * Very basic functions
 */
function greet()
{
    echo 'Hello World';
}
/*
function greet($name)
{
    echo 'Hello '. $name;
}

function greet($greeting, $name='John'){
    echo strtoupper($greeting. ' '. $name);
}
greet('Whats Up', 'Sumon');
 */

// Conditionals

$num1 = 50;
$num2 = 500;

if ($num1 == 40) {
    echo 'Correct';
} elseif ($num1 == 50) {
    echo 'Correct';
} else {
    echo 'Wrong';
}

$num1 = 30;
$num2 = 20;

/** 
 * || this is OR and this *&&* this is AND conditions 
 */
if ($num1 == 30 && $num2 == 20) {
    echo 'Correct';
} else {
    echo 'Wrong';
}
