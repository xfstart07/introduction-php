<?php

// trim() 删除字符串两端的空格和预定义字符
$str = " string ";
echo trim($str);

echo substr("www.baidu.com", 3);

// explode() 分割字符串

echo "\n";
$url = "www.baidu.com";
print_r(explode('.',$url));

// implode() 合并字符串

echo "\n";
print_r(implode('.', array('www', 'baidu', 'com')));

// 字符串变量解析

echo "\n123 {$str} ccaa";