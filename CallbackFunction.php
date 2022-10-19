<?php

function sayHello(string $name, callable $filter)
{
    $finalName = call_user_func($filter, $name);
    echo "Hello $finalName" . PHP_EOL;
}

sayHello("Yan", "strtoupper");
sayHello("Yan", "strtolower");
sayHello("Yan", function (string $name): string {
    return strtoupper($name);
});
sayHello("Yan", fn($name) => strtoupper($name));