<?php

function say($name) {
    echo "我是" . $name;
}

say("Leon");

function sum($a = 1, $b = 2) {
    echo $a + $b;
    return 2;
}

echo "\n";
sum(3, 4);

echo "\n";
echo sum(2,4)*3;

echo "\n";
sum(); 