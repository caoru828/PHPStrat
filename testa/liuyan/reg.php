<?php
include "conn.php";
//1:验证是不是有重名
if(isset($_POST['sub'])) {
    $uname = $_POST['uname'];
    $upass = $_POST['pass'];

    $sfile = $_FILES['sfile'];
}
?>

<meta charset="utf-8">
<form action="reg.php" method="post" enctype="multipart/form-data">
    用户名:<input type="text" name="uname"><br />
    密码:<input type="password" name="pass"><br />
    <input type="file" name="sfile">
    <input type="submit" name="sub" value="注册">
</form>