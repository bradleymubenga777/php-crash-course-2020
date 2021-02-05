<?php

// What is a variable
    # A variable is a container that stores values. PHP's variables don't have types.

// Variable types
    /*
        String
        Integer
        Float / Double
        Boolean
        Null
        Array
        Object
        Resource
    */

// Declare variables
$name = 'Bradley';
$age = 28;
$isMale = true;
$height = 1.85;
$salary = null;

// Print the variables. Explain what is concatenation
echo $name. '<br>';
echo $age .'<br>';
echo $isMale .'<br>';
echo $height .'<br>';
echo $salary .'<br>';


// Print types of the variables
echo gettype($name). '<br>';


// Print the whole variable
var_dump($name);

// Change the value of the variable
$name = false;

// Print type of the variable
echo gettype($name). '<br>';

// Variable checking functions
is_string($salary);
is_integer($name);
is_bool($isMale);
is_double($isMale);

// Check if variable is defined
isset($name); // true
isset($notDeclared); //false

// Constants
define('PI', 3.14);
echo PI. '<br>';

// Using PHP built-in constants
echo SORT_ASC. '<br>';
echo PHP_INT_MAX. '<br>';