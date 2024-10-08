<?php

echo 'Name : ';
echo 'muhammad fauzi';
echo "\n";

echo "Name : ";
echo "aku\t muhammad\t fauzi\n";

echo <<<AKU
Selamat belajar PHP
sekarang, kita belajar tipe data string
ini adalah cara ke-3 membuat string
bisa menggunakan heredoc

AKU;

echo <<<'AKU'
Selamat belajar PHP
sekarang, kita belajar tipe data string
ini adalah cara ke-3 membuat string
bisa menggunakan heredoc
AKU;
