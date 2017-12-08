<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/12/8 0008
 * Time: 下午 7:00
 */
echo "<table width=800 border=1 align='center'>";
//echo "<caption><h1>100行隔行变色，鼠标划入变色</h1></caption>";
for($i=1;$i<10;$i++)
{
    echo "<tr>";
    for($j=1;$j<=$i;$j++){
        echo "<td>";
        echo "$i"."*"."$j "." = ".$i*$j;
        echo "</td>";
    }
    echo "<br>";
    echo "</tr>";

}
echo "</table>";
