<?php
//Simple Array - 2 ways to create arrays below.
$numbers = [1, 44, 55, 22];
$fruits = array('apple', 'orange', 'pear');

print_r($numbers);

var_dump($numbers);

echo $fruits[0];
echo $fruits[1];

//Associative Arrays
$colours = [
    1 => 'red',
    4 => 'blue',
    6 => 'green'
];

echo $colours[4];

$hex = [
    'red' => '#f00',
    'blue' => '#0f0',
    'green' => '#00f'
];

echo $hex['blue'];

$person = [
    'first_name' => 'Brad',
    'last_name' => 'Steve',
    'email' => 'brad@gmaail.com'
];

echo $person['first_name'];

//Arrays within arrays

$people = [
[    'first_name' => 'Jason',
    'last_name' => 'Hilder',
    'email' => 'jason@gmail.com'
],
[
    'first_name' => 'Devlyn',
    'last_name' => 'Chelin',
    'email' => 'dev@gmail.com'
],
[
    'first_name' => 'Kyle',
    'last_name' => 'Scriven',
    'email' => 'kyle@gmail.com'
]
];

echo $people[1]['email'];

//When working with APIs you can turn these into an asrray of JSON Objects with the JSON encode option.

var_dump(json_encode($people));

