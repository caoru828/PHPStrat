<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/12/9 0009
 * Time: 上午 12:29
 */

//phpinfo();
//md5加密
//$pass = "caoru828";
//$mpass = md5($pass);
//echo $mpass;
// md5加密特点 铭文 无论多长加密处理后就那么长，单向不可逆
//8d7d78c5a728097c4f4108f146b73bda    caoru828（铭文） 这是被加密出来的串
//彩虹表
//md5(md5($pass)+$salt)  大公司加密方式
//base64  迅雷下载地址后边有==





if(isset($_POST['sub'])){
    $str = $_POST['address'];
    echo $str;
}else{
//    echo "error";
}
?>
<meta charset="utf-8">
<form action="test9.php" method="post">
    数据： <input type="text" name="address">
    <input type="submit" name="sub" value="提交">
</form>
<?php
//把地址编码成thubder   ... ==
if(isset($_POST['sub'])){
    $str = $_POST['address'];


//    echo base64_encode($str);
//    $dizhi= base64_encode($str);
//    $add = "thunder://".$dizhi;

//转成真实地址，切割一下
    $Addr = substr($str,10);
   echo base64_decode($Addr);
}
//else{
//    echo "error";
//}
?>


<meta charset="utf-8">
<form action="test9.php" method="post">
    数据： <input type="text" name="address">
    <input type="submit" name="sub" value="提交">
</form>



<!--
常用数据类型的转换
-->

<?php
    if(isset($_POST['sub'])){
//        输入·10的时候其实是string型
        $num = $_POST['num'];
        switch ($num){
            case 10:
                echo 123;
                break;
            case 20:
                echo 456;
                break;
            default:
                echo "mei";
                break;
        }
    }

?>
<meta charset="utf-8">
<form action="test9.php" method="post">
    数据： <input type="text" name="num">
    <input type="submit" name="sub" value="提交">
</form>