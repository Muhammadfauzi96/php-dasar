<?php

$name = "muhammad";
$name = null;

$age = null;

echo "Name : ";
echo $name;
echo "\n";

echo "Age : ";
echo $age;
echo "\n";

echo "Is Name Null? : ";
var_dump(is_null($name));
echo "\n";

$contoh = "fauzi";
unset($contoh);

$contoh = "muhammad";
$contoh = null;

var_dump(isset($contoh));
