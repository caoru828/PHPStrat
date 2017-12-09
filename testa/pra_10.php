<?php
for($i=1;$i<=5;$i++){
    for ($j=0;$j<5-$i;$j++){
        echo "&nbsp;";
    }
    for($k=0;$k<2*$i-1;$k++){
        echo "* ";
    }
    echo "<br>";
}

for($i=1;$i<=5;$i++){
    for ($j=0;$j<5-$i;$j++){
        echo "&nbsp;";
    }
        for($k=0;$k<2*$i-1;$k++){
        if ($k==1||$k==5){
            echo "* ";
        }else{
            if ($k==1||$k==2*$i-1){
                echo '*';
            }else{
                echo "&nbsp;";
            }

        }

    }
    echo "<br>";
}

?>

