<?php
include "conn.php";
//1:验证是不是有重名
if(isset($_POST['sub'])) {
    $uname = $_POST['uname'];
    $upass = $_POST['pass'];

    $sfile = $_FILES['sfile'];
//
//    string(6) "sdfsdf"
//
//array(5) {
//        ["name"]=>
//  string(7) "cau.jpg"
//        ["type"]=>
//  string(10) "image/jpeg"
//        ["tmp_name"]=>
//  string(24) "C:\xampp\tmp\php39DF.tmp"
//        ["error"]=>
//  int(0)
//  ["size"]=>
//  int(13266)
//}

//    echo "<pre>";
//    var_dump($uname);
//    echo "</pre>";
//    echo "<br/>";
//    echo "<pre>";
//    var_dump($sfile);
//    echo "</pre>";
//    die();

    $sql = "select * from user where uname = '$uname'";
    $query = mysqli_query($link,$sql);
    $result = mysqli_fetch_array($query);

    if($result){
        echo "<script>alert('重名！')</script>";
        header('location:reg.php');
    }else{
//        2.合法么
        $arr= array('%','#','=');
        $flag = true;
        for($i=0;$i<count($arr);$i++){
            for($j=0;$j<strlen($uname);$j++){
                if($arr[$i]==$uname[$j]){
                    $flag = false;
                }else{
//                   3. 把用户名放入数据库
                    $mpass = md5($upass);
//                    4. xie上传文件
                    $hou = $sfile['name'];
                    $arr = explode('.',$hou);
                    $houLen = count($arr)-1;
                    $houname = $arr[$houLen];
//                    echo $houname;
//                    die();
                    $urlname = './uploaded/'."header".$uname.".".$houname;
                    $rs = move_uploaded_file($sfile['tmp_name'],$urlname);
                    if($rs){
//                        网数据库里写
                        $url = '/uploaded/'."header".$uname.".".$houname;
                        $sql = "insert into user(uid,uname,pass,uimg,ulevel) values(null,'$uname','$mpass',0,'$url')";
                        $query = mysqli_query($link,$sql);
                        if($query){
                            header('location:login.php');
                        }
//                        echo $url;
                    }
                }
            }
        }
        if($flag == false){
            echo "<script>alert('此用户名非法！')</script>";
            echo "<script>location='reg.php'</script>";
        }
    }


}
?>

<meta charset="utf-8">
<form action="reg.php" method="post" enctype="multipart/form-data">
    用户名:<input type="text" name="uname"><br />
    密码:<input type="password" name="pass"><br />
    <input type="file" name="sfile">
    <input type="submit" name="sub" value="注册">
</form>