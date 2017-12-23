<?php
//  ...直接跳到刚才的页
if(!isset($_COOKIE['uid'])){
    $url=$_SERVER['REQUEST_URI'];
    $arr=explode('/',$url);
    $le=count($arr)-1;
    $urlname=$arr[$le];

    echo "<script>location='login.php?url=$urlname'</script>";
}

?>


<?php
//   先连接数据库
include "conn.php";
if(isset($_POST['sub'])){
    $title=$_POST['title'];
    $con = $_POST['con'];
    $lei = $_POST['lei'];
//        $data = data('Y-m-d);
//        echp $data;

//   操作数据库插入数据库
//   拼字符串 ， 把字符串发送给mysql
    $sql = "insert into blog(bid,title,content,time,catalog_id) values(null,$title,$con,now(),'$lei')";
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
    标题：<input type="text" name="title">
    <select name="lei" id="lei">
        <?php
        $sql = "select * from catalog";
        $query = mysqli_query($link,$sql);
        while ($rs=mysqli_fetch_array($query)) {
            ?>
            <option value="<?php echo $rs['catalog_id']?>"><?php echo $rs['catalog_name']?> </option>
            <?php
        }
        ?>
    </select>


    <br/>
    内容：<textarea name="con" id="" cols="30" rows="10"></textarea>
    <br>
    <input type="submit" value="发表" name="sub">
</form>