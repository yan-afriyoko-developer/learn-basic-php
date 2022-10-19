<?php

$first = [
    "first_name" => "Yan"
];

$last = [
    "first_name" => "Budi",
    "last_name" => "Afriyoko"
];

$full = $first + $last;
var_dump($full);

$a = [
    "first_name" => "Yan",
    "last_name" => "Afriyoko"
];

$b = [
    "last_name" => "Afriyoko",
    "first_name" => "Yan"
];

var_dump($a == $b);
var_dump($a === $b);