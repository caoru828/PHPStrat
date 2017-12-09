<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/12/9 0009
 * Time: 上午 12:15
 */
//phpinfo();
//截取函数串  js split    php exlpode
$str = $_SERVER['REQUEST_URI'];
//$str = $_SERVER['SERVER_NAME'];  localhost  可以看看是不是本地
//echo $str;
$arr = explode('?',$str);
echo "<pre>";
print_r($arr);
echo "</pre>";




