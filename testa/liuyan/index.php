<a href="add.php">添加文章</a>
<?php
include "conn.php";
$sql = "select * from blog order by bid desc";//倒序排
//$sql = "select * from blog order by bid asc limit 2";//正序 limit 限制条数输出
$query = mysqli_query($link,$sql);

//resource -> array
//$rs = mysqli_fetch_array($query);

while ($rs=mysqli_fetch_array($query))
{
//    for ($i=0;$i<4;$i++) {
    ?>

    <h3><a href="all.php?id=<?php echo $rs['bid']?>">标题:<?php echo $rs['title'];?></a> |<a href="del.php?id=<?php echo $rs['bid']?>">删除</a>  | <a href="updata.php?id=<?php echo $rs['bid']?>">修改</a></h3>
    <li>时间：<?php echo $rs['time']?></li>
    <p><?php echo $rs['content']?></p>
    <hr>
    <?php
}
?>