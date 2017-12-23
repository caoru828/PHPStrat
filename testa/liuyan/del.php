<?php
include "conn.php";
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $sql="delete from blog where bid='$id'";
    $query=mysqli_query($link,$sql);
    if($query){
//        header('location:index.php');
        echo "<script>alert('delete success')</script>";
        echo "<script>location='index.php'</script>";
    }else{
        echo "<script>alert('delete shibai')</script>";
    }
}


//if(isset($_GET['id'])){
//    $id = $_GET['id'];
//    $sql = "delete from blog where bid='$id'";
//    $query = mysqli_query($link,$sql);
//    if($query){
//        header('location:index.php');
//    }
//}
?>