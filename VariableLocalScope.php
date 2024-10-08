<?php

function createName()
{
    $name = "fauzi"; // local scope
}

createName();
echo $name . PHP_EOL;
