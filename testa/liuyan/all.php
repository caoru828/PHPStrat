<?php
	include "conn.php";
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "update blog set hits=hits+1 where bid=$id";
        $query = mysqli_query($link,$sql);
        if($query){
            $sql = "select * from blog where bid = '$id'";
            $query = mysqli_query($link,$sql);
            $rs = mysqli_fetch_array($query);
        }
    }
?>
<h3>标题:<?php echo $rs['title']?></h3>
<li><?php echo $rs['time']?></li>
<li>点击率:<?php echo $rs['hits']?></li>
<p><?php echo $rs['content'];?></p>
<hr />