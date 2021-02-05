<?php

// Declaring numbers
$a = 5;
$b = 4;
$c = 1.2;

// Arithmetic operations
echo $a + $b - $c;
echo $a * $b / $c;
echo $a % $b; //remainder

// Assignment with math operators
$a += $b; echo $a. '<br/>';

// Increment operator
$a++; // The value of the a is printed then it will be incremented

++$a; // The value is incremented first then printed.

// Decrement operator
$a--; //Value is printed first then decremented.
--$a; //Value is decremented first

// Number checking functions
is_float(1.25);
is_double(1.25);
is_int(5);

// Conversion
$strNumber = '12.34';
$number = (float)$strNumber;
var_dump($number);

// Number functions

// Formatting numbers
$number = 123.452321;
echo number_format($number, 2, ',', ' ');

// https://www.php.net/manual/en/ref.math.php
?>