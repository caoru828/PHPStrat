<?php
if(isset($_POST['sub'])){
    $str = $_POST['num'];
    if($str!=""&&is_numeric($str)){
        if($str<=100&&$str>=80){
          echo " <script>alert('您的成绩为优秀！')</script>";
        }
        if($str<80&&$str>=60){
            echo " <script>alert('您的成绩为合格！')</script>";
        }
        if($str<60){
            echo " <script>alert('您的成绩为不合格！')</script>";
        }
        if ($str>100||$str<0){
            echo " <script>alert('您的是无效成绩！')</script>";
        }
    }else{
        echo " <script>alert('您的是无效成绩！')</script>";
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        html{
            background:#cfcfcf;
        }
        h3{
            font-weight:bold;
        }
    </style>
</head>
<body>
<h3>输入分数查询成绩</h3>
<form action="pra5_.php" method="post">
    分数： <input type="text" name="num">
    <br>
    <br>
    <input type="submit" name="sub" value="提交查询">
    &nbsp;
    &nbsp;
    <input type="reset" name="sub" value="重置分数">
</form>
</body>
</html>

