<?php

$arr = array('name' => 'jim', 'age' => 19, 'sex' => '女');

foreach ($arr as $value) {
    echo $value . ' ';
}
echo "\n";
foreach ($arr as $key => $value) {
    echo $key . '=>' . $value . ' ';
}

$arr2 = array('张三', 10, '男');

echo "\n";
for($i = 0; $i < count($arr); $i++) {
    echo $arr2[$i] . ' ';
}