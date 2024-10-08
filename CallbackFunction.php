<?php

function sayHello(string $name, callable $filter)
{
    $finalName = call_user_func($filter, $name);
    echo "Hello $finalName" . PHP_EOL;
}

sayHello("fauzi", "strtoupper");
sayHello("fauzi", "strtolower");
sayHello("fauzi", function (string $name): string {
    return strtoupper($name);
});
sayHello("fauzi", fn($name) => strtoupper($name));
