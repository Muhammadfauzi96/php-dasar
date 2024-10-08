<?php

$values = array(10, 9, 8, 7.5);
var_dump($values);

$names = ["aku", "muhammad", "fauzi"];
var_dump($names);

var_dump($names[0]);

$names[0] = "aku";
var_dump($names);

unset($names[1]);
var_dump($names);

$names[] = "muhammad";
var_dump($names);

var_dump(count($names));

$eko = array(
    "id" => "aku",
    "name" => "muhammad fauzi",
    "age" => 30,
    "address" => array(
        "city" => "Jakarta",
        "country" => "Indonesia"
    )
);
var_dump($eko);

var_dump($eko["name"]);
var_dump($eko["address"]["country"]);

$budi = [
    "id" => "fauzi",
    "name" => "muhammad fauzi",
    "age" => 35,
    "address" => [
        "city" => "Jakarta",
        "country" => "Indonesia"
    ]
];
var_dump($budi);
