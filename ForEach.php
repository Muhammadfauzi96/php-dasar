<?php

$names = ["saya", "muhammad", "fauzi"];

for ($i = 0; $i < count($names); $i++) {
    echo "Data ke $i = $names[$i]" . PHP_EOL;
}

foreach ($names as $index => $name) {
    echo "Data ke $index = $name" . PHP_EOL;
}

foreach ($names as $name) {
    echo "Data $name" . PHP_EOL;
}

$person = [
    "first_name" => "saya",
    "middle_name" => "muhammad",
    "last_name" => "fauzi"
];

foreach ($person as $key => $value) {
    echo "$key : $value" . PHP_EOL;
}
