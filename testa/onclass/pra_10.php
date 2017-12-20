<?php
for($i=1;$i<=5;$i++){
    for($j=5-$i;$j>=0;$j--){
        echo "&nbsp;";
    }
    for($k=1;$k<=2*$i-1;$k++){
        echo "* ";
    }
    echo "<br>";
}

for($i=1;$i<=5;$i++){
    for($j=5-$i;$j>=0;$j--){
        echo "&nbsp;";
    }
    if($i==5){
        for ($m=1;$m<=9;$m++){
            echo "* ";
        }
    }else{
        for($k=1;$k<=2*$i-1;$k++){
            if($k==1||$k==(2*$i-1)){
                echo "* ";
            }else{
                echo "&nbsp;";
            }

        }
    }

    echo "<br>";
}

$n=5;
for($i=1;$i<=$n;$i++){
    for($k=1;$k<=$n-$i;$k++){
        echo "&nbsp;";
    }

    for($j=1;$j<=2*$i-1;$j++){
        if($i==1 || $i==$n){
            echo "*";
        }else{
            if($j==1 || $j==2*$i-1){
                echo "*";
            }else{
                echo "&nbsp;";
            }
        }

    }
    echo "<br />";

}



?>

