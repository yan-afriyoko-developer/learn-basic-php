<?php

function createName()
{
    $name = "Yan"; // local scope
}

createName();
echo $name . PHP_EOL;
