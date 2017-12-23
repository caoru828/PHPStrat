<?php
include "conn.php";

if(isset($_GET['url'])){
    $url = $_GET['url'];

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

//       跳转
        if(isset($_POST['url'])){
            $url = $_POST['url'];
            echo "<script>location='$url'</script>";
        }else{
            header('location:index.php');
        }

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
