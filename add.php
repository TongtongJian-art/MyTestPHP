<?php

if($argc != 3) {
    echo "用法: php add.php num1 num2\n";
    exit(1);
}

$num1 = $argv[1];
$num2 = $argv[2];

if(!is_numeric($num1) || !is_numeric($num2)) {
    echo "请输入2个数字!\n";
    exit(1);
}

$sum = $num1 + $num2;
echo "结果: $sum\n";

?>
