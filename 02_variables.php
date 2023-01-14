<?php
/*---------- PHP Data Types ----------*?/
/*
- String            Series of characters surrounded by quotes
- Interger          Whole numbers
- Float             Decimal numbers
- Boolean           true or false
- Array             Special variable, which can hold more that onw value
- Object            A class
- NULL              Empty variable
- Resource          Special variable that holds a resource
*/

/* -------- Variable Rules -------- */
/*
- Variables must be prefixed with $
- Variables must start with a letter or the underscore character
- Variables cant start with a number
- Variables can only contain alpha-numeric characters and underscores (A-z, 0-9 and _)
- Variables are case-sensitive ($name and $NAME are two different variables)
*/

$name = "Brad"; //String
$age = 40; //Interger
$hasKids = true; //Boolean
$cash_on_hand = 20.75; //Float

//var_dump($has_kids);

//echo $name .  'is'  . $age .  'years old';

//echo "${name} is ${age} years old";
//$x = '5' + '5';
//echo 5 + 5;
//echo '5' + '5',
 //   var_dump($x);
//echo 10 - 5;
//echo 5 * 6;
//echo 10 / 2;
//echo 10 % 3;

//Constants below: Things taht never change.

define('HOST', 'localhost');
define('DB_NAME', 'dev_db');

echo HOST;

//Stopped at 31:09