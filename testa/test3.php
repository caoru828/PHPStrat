<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/12/8 0008
 * Time: 下午 5:15
 */
//变量区分大小写
//函数不区分大小写
$a = 10;
function aa(){
//    echo $a;
    global $a;
}
aa();
echo $a;