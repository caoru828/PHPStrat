<?php
for($i=1;$i<=9;$i++){
    for($j=1;$j<=$i;$j++){
        if($j%3==0)continue;
        echo $i."*".$j."=".$i*$j." ";
    }
    echo "<br>";
}

for ($i=1;$i<=9;$i++){
    for ($j=1;$j<=2;$j++){
        if($i==1&&$j==1) continue;
        echo $i.'*'.$j.'='.$i*$j." ";
    }
    echo "<br>";
}

for ($i=1;$i<=9;$i++){
    for ($j=1;$j<=2;$j++){
        if($i==1&&$j==1) continue;
        if($i>=4)break;
        echo $i.'*'.$j.'='.$i*$j." ";
    }
    echo "<br>";
}

?>