<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/12/9 0009
 * Time: 上午 10:31
 */

//判断违法

if (isset($_POST)){
    $name = $_POST['username'];
    $pass = $_POST['pass'];
    if($name=='admin' && $pass=='12345'){
        echo 'success';
    }else{
        echo "error";
    }
}

?>
<meta charset="utf-8">
<form action="password.php" method="post">
    <input type="text" name="username">
    <input type="password" name="pass">
    <input type="submit" name="sub" value="登录" id="btn">
</form>
