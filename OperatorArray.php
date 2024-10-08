<?php

$first = [
    "first_name" => "fauzi"
];

$last = [
    "first_name" => "muhammad",
    "last_name" => "fauzi"
];

$full = $first + $last;
var_dump($full);

$a = [
    "first_name" => "muhammad",
    "last_name" => "fauzi"
];

$b = [
    "last_name" => "fauzi",
    "first_name" => "muhammad"
];

var_dump($a == $b);
var_dump($a === $b);
