<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/12/9 0009
 * Time: 上午 8:09
 */
//在js下else if必须分开，在PHP下都行
if(isset($_POST['sub'])){
    $year = $_POST['num'];
//    数字类型？
    if (is_numeric($year)){
//        数字长度
        if(strlen($year)){
            if($year%400==0||($year%4==0&&$year%100!=0)){
                echo $year."是闰年";
            }else{
                echo $year."不是闰年";
            }
        }else{
            echo "not 4 len";
        }

    }else{
        echo "not num";
    }
}

//for循环只能循环索引数组并且下标必须连续
$strr = "laowu";
for($i=0;$i<strlen($strr);$i++){
    echo $strr[$i]."<br/>";
}


?>
<meta charset="utf-8">
<form action="test9.php" method="post">
    数据： <input type="text" name="num">
    <input type="submit" name="sub" value="提交">
</form>