<?php

$sayHello = function (string $name) {
    echo "Hello $name" . PHP_EOL;
};

$sayHello("muhammad");
$sayHello("fauzi");

function sayGoodBye(string $name, $filter)
{
    $finalName = $filter($name);
    echo "Good bye $finalName" . PHP_EOL;
}

sayGoodBye("fauzi", function (string $name): string {
    return strtoupper($name);
});

$filterFunction = function (string $name): string {
    return strtoupper($name);
};
sayGoodBye("fauzi", $filterFunction);

$firstName = "muhammad";
$lastName = "fauzi";

$sayHelloaku = function () use ($firstName, $lastName) {
    echo "Hello $firstName $lastName" . PHP_EOL;
};
$sayHelloaku();

$firstName = "Budi";
$lastName = "Nugraha";
$sayHelloaku();
