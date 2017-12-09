<?php
for($i=1;$i<=9;$i++){
    for ($j=1;$j<=$i;$j++){
        if($j%3==0){
           continue;
        }else{
            echo $i."*".$j."=".$i*$j." ";
        }
    }echo "<br>";
}



?>