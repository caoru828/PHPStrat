<?php

echo "<table width=800  align='center'>";
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


echo "<table width=800 border=1 align='center'>";
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

echo "<br>";



echo "<table width=800 border=1 align='center'>";
for($i=1;$i<10;$i++)
{
    echo "<tr>";
    for($j=1;$j<=10-$i;$j++){
        echo "<td>";
        echo "$i"."*"."$j "." = ".$i*$j;
        echo "</td>";
    }
    echo "<br>";
    echo "</tr>";

}
echo "</table>";


echo "<table width=800 border=1 align='center'>";
for($i=9;$i>0;$i--)
{
    echo "<tr>";

    for ($k=1;$k<=9-$i;$k++){
        echo "<td>";
        echo"&nbsp;";
        echo "</td>";
    }
    for($j=1;$j<=10-$k;$j++){
        echo "<td>";
        echo "$i"."*"."$j "." = ".$i*$j;
        echo "</td>";
    }
    echo "<br>";
    echo "</tr>";

}
echo "</table>";