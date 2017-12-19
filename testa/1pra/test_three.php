<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/12/19 0019
 * Time: 下午 10:22
 */
//php函数不区分大小写，
phpinfo();//php整个环境检测出来

var_dump($_SERVER); // 直接截取所需路径，方外链

//字符串分割
//explode('?',$str);
//用问好分，返回分开后的数组

//切割
$addr = substr($str,10);//10开始后边全要


$b=$a+'1bc';//可加
$b=$a+'a1bc';//不可加

//strlen($year)==4  字符串长度
//count($user)    数组长度

?>

<?php
if(isset($_POST['sub'])){
    $num=$_POST['num'];
    var_dump($num);//string
    //js里必须严格相等，二Php不用，可运算
    switch($num){
        case 10:
            echo 123;
            break;
        case 20:
            echo 456;
            break;
        default:
            echo 'llalaa';
            break;
    }
}

$a='10';
$b=$a+'a1bc';
echo $b;

?>

<meta charset="utf-8">
<form action="07-test.php" method="post">
    数据:<input type="text" name="num">
    <input type="submit" name="sub" value="提交">
</form>
