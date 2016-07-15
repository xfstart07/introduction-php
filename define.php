<?php

# 常量
# 常量前面没有美元符号（$）

define("NAME", "Leon");

if (defined("NAME")) {
    echo NAME;
} else {
    echo "没有常量";
}