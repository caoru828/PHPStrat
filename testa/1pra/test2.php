<?php

//四个标量类型  int string bool float
$num = 5;
 var_dump($num);
$string = 'ct';
var_dump($string);
$flag = true;
var_dump($flag);
$ss = 8.65;
var_dump($ss);

//两个复合类型  array object
$arr = array(1,2,3,4,5,6);

echo "<pre>";
print_r($arr);
echo "<pre/>";
//die();//设置断点
echo 123;
//两个特殊类型 resource null

//变量存在不存在  在内存中销毁变量 isset  unset
?>