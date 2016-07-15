<?php

$bool = true;

if ($bool) {
    echo "变量真";
} else {
    echo "变量假";
}

$integer = 1;

echo "\n";
echo $integer;

$str = "hello world";
echo "\n" . $str;

$arr = array(2, 'str', 'cc');
$hash = array('hello' => 'world', 'xu' => 'leon');

echo "\n";
echo $arr;
echo "\n";
echo $hash;

unset($hash); // 销毁变量
echo $hash;