<?php
/*
echo("Hello World");
$opening = "\nAloha";
echo($opening . ", Randall");
*/

$count = 6; // integer
$price = 9.50; // double or float
$first_name = 'bob'; // string
$first_name = "Bob"; // string
$is_valid = true; // boolean

$nullVariable; // Null... a variable with no value assigned
echo @$nullVariable;

// declare a constant
define('PI', 3.14);

$games = ['Animal Crossing', "Harry Potter"]; // single or double doesn't matter, just use the same to begin and end each strings

// echo($games);

// print_r($games); // print out contents of an array

// echo($games[1]);

$students1 = [
    'name' => "Mitzy",
    'id' => 123456,
    'grade' => 'A'
];

echo($students1['name'] . "\n");
print_r($students1);