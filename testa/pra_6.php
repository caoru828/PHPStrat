<?php

if(isset($_POST['sub'])){
    $line = $_POST['line'];
    $dro = $_POST['dro'];
    echo "<table width=800 border=1 align='center'>";
//echo "<caption><h1>100行隔行变色，鼠标划入变色</h1></caption>";
    echo "<caption><h3>用户动态输入表格，行".$line."列".$dro."</h3></caption>";
    for($i=0;$i<$line;$i++)
    {
        if ($i%2==0){
            echo "<tr bgcolor=red>";
        }else{
            echo "<tr bgcolor=blue>";
        }
        for($j=0;$j<$dro;$j++){
            echo "<td>";
            echo $j;
            echo "</td>";
        }
        echo "<br>";
        echo "</tr>";
    }
    echo "</table>";
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
</head>
<body>
<form action="pra_6.php" method="post">
    <input type="text" name="line">
    <input type="text" name="dro">
    <input type="submit" name="sub" value="提交表格">
    <input type="reset" name="res" value="重置行列">
</form>
</body>
</html>


