<?php
include "conn.php";
if (isset($_COOKIE['uid'])){
    $id= $_COOKIE['uid'];
    echo $_COOKIE['uname']."已登录！";
    echo "<a href='ulogin.php?'".$id."'> 注销</a>";
}else{
    echo "<a href='login.php'>未登录！</a>";
}
if(isset($_POST['sub'])){
    $uname = $_POST['uname'];
    $pass = $_POST['pass'];
    $mpass = md5($pass);

    $sql = "select * from user where uname ='$uname' and pass='$mpass' ";
    $query= mysqli_query($link,$sql);
    $rs = mysqli_fetch_array($query);
    if($rs){
        setcookie('uid',$rs['uid']);
        setcookie('uname',$rs['uname']);
        header('location:index.php');
    }else{

        header('location:login.php');
        echo "<h1>error!</h1>";
    }
}
?>

<meta charset="utf-8">
<form action="login.php" method="post">
    <input type="hidden" name="url" value="<?php echo $url;?>">
    用户名:<input type="text" name="uname"><br />
    密码:<input type="password" name="pass"><br />
    <input type="submit" name="sub" value="登录">
</form>
