<?php
if (isset($_COOKIE['uid'])){
    $id= $_COOKIE['uid'];
    echo $_COOKIE['uname']."已登录！";
    echo "<a href='ulogin.php?id=$id'> 注销 </a>";
}else{
    echo "<a href='login.php'>未登录！</a>";
}

?>

<a href="add.php">添加文章</a>


<style>
    *{
        margin:0;
        padding:0
    }
    #div1{
        float:left;
    }
    #div2{
        float:right;
        margin-top:100px;
        width:200px;
        height:200px;
    }
</style>


<form action="index.php" method="get">
    <input type="text" name="search">
    <input type="submit" name="sub" value="搜索">
</form>
<div id="div1">

    <?php
    include "conn.php";

    //  ???
    if(isset($_GET['sub'])){
        $se=$_GET['search'];
        $search="title like "."'%".$se."%'";
    }else{
        $search=1;
    }
    //$sql="select * from blog where $search order by bid desc";




    $sql = "select * from blog,user where blog.uid = user.uid";//倒序排
    //$sql = "select * from blog order by bid desc";//倒序排
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
        <li>作者是：<?php echo $rs['uname']?></li>
        <p> <?php echo $rs['content']?></p>
        <hr>
        <?php
    }
    ?>

</div>
<div id="div2">
    <ul>
        <li>情感类</li>
        <li>视频类</li>
    </ul>
</div>

