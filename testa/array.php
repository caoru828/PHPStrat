<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/12/9 0009
 * Time: 下午 3:20
 */
//   创建数组  方式 $arr = array();   赋值方式  数组分 索引数组 关联数组

// 索引数组
//$user[0] = 1;
//$user[1] = "ooo";
//$user[2] = 'age';
//$user[3] = false;
//$user[4] = array(1,2);
//
//echo "<pre>";
//print_r($user);
//echo "</pre>";
//
//$user[] = 1;
//$user[] = "ooo";
//$user[8] = 'age';
//$user[5] = false;
//$user[] = array(1,2);
//
//echo "<pre>";
//print_r($user);
//echo "</pre>";

//0 1 5 6
$user[] = 1;
$user[0] = "ooo";
$user[] = 'age';
$user[5] = false;
$user[] = array(1,2);

echo "<pre>";
print_r($user);
echo "</pre>";

// 关联数组
$use['id'] = 1;
$use['name'] = "ss";
$use['age']  = 78;
$use['email'] = "ss.163.com";

echo "<pre>";
print_r($use);
echo "</pre>";






?>