<?php
//   先连接数据库
    include "conn.php";
    if(isset($_POST['sub'])){
        $title=$_POST['title'];
        $con = $_POST['con'];
//        $data = data('Y-m-d);
//        echp $data;

//   操作数据库插入数据库
//   拼字符串 ， 把字符串发送给mysql
        $sql = "insert into blog(bid,title,content,time) values(null,$title,$con,now())";
//    把字符串发送给mysql    返回mixed
     $query = mysqli_query($link,$sql);
     if($query){
         echo "插入成功！";
//         插入成功往主页跳
//         1.
         header("location:index.php");
//         2.script
//         echo "<script>location='index.php'</script>";

     }else{
         echo "插入失败！";
     }
    }
?>
<meta charset="utf-8">
<form action="add.php" method="post">
    标题：<input type="text" name="title"><br/>
    内容：<textarea name="con" id="" cols="30" rows="10"></textarea>
    <br>
    <input type="submit" value="发表" name="sub">
</form>