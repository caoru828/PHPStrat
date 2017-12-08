<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/12/8 0008
 * Time: 下午 4:06
 */
//echo  $a;
//$a = 123;
//echo $a;
////js typeof   php var_dump
//$num = 10;
//var_dump($num);
//<script>
//var a = 10;
///script>
echo "<table width=800 border=1 align='center'>";
echo "<caption><h1>100行隔行变色，鼠标划入变色</h1></caption>";
for($i=0;$i<100;$i++)
{
    if($i%2==0){
        $color = 'red';
//        echo "<tr bgcolor='red'>";
    }else{
        $color = 'grey';
//        echo "<tr bgcolor='yellow'>";
    }
    echo "<tr bgcolor=".$color." onmouseover=drow(this) onmouseout=lroe(this)>";
    for($j=0;$j<10;$j++){
        echo "<td>";
        echo "$j";
        echo "</td>";
    }
    echo "</tr>";

}
echo "</table>";




//instanceof
?>
<script>
    var b="";
    function drow(obj) {
      b = obj.bgColor;
      obj.bgColor = "pink";
    }
    function lroe(obj) {
     obj.bgColor = b;
    }
</script>