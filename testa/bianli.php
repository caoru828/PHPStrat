<?php
//forEach 循环遍历数组
//$user = array(
//    'id'=>1,
//    'name'=>"lidi",
//    'email'=>'1555@qq.com'
//);
//
////foreach (数组变量名 as 建明=》兼职)
//foreach ($user as $key=>$value){
//    echo $key."=>".$value;
//    echo "<br>";
//}


$info = array(
    "user"=>array(
        array(1,"fff",10,"male"),
        array(2,"fff",10,"male"),
        array(3,"fff",10,"male"),
    ),
    "score"=>array(
        array(1,"fvsdf",10,"male"),
        array(2,"sdfgdfgf",10,"male"),
        array(3,"fdfg",10,"male"),
    ),
    "connect"=>array(
        array(1,"fff",10,"male"),
        array(2,"fgsf",10,"male"),
        array(3,"jyt",10,"male"),
    )
);
echo "<pre>";
print_r($info);
echo "</pre>";


    foreach ($info as $key=>$value){
        echo   "<p align='center'>".$key."</p>";
        echo "<table width='500' border='1' align='center'>";
    foreach ($value as $key1=>$value1) {
        echo "<tr>";
    foreach ($value1 as $key2=>$value2) {
        echo "<td align='center'>";
        echo $value2;
        echo "</td>";
    }
        echo "</tr>";
//    echo "<br>";
    }

        echo "</table>";
    }


echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

?>

<!--表--info-->
<!--user--1表名-->
<!---->
<!--score--2表名-->
<!---->
<!--connect--3表名-->