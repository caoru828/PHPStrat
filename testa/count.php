<?php
if(isset($_POST['sub'])){

    $first = $_POST['first'];
    $char = $_POST['char'];
    $second = $_POST['second'];
    $_result = "";
    if (is_numeric($first)&&is_numeric($second)&&$first!=""&&$second!="") {
        switch ($char){
            case '+':
                $_result =  $first+$second;
                break;
            case '-':
                $_result =  $first-$second;;
                break;
            case '*':
                $_result =  $first*$second;;
                break;
            case '/':
                $_result =  $first/$second;;
                break;
            case '%':
                $_result =  $first%$second;
                break;
            default:
                echo "error";
                break;
        }
    }else
    {
        if($first!=""&&!is_numeric($first)){
            $_result.= " 第一个数是非数字";
        }if($second!=""&&!is_numeric($second)){
        $_result.= " 第二个数是非数字";
    }if($first==""){
        $_result.= " 第一个数是空";
    }if($second==""){
        $_result.= " 第一个数是空";
    }

    }


}
?>
<meta charset="utf-8">
<form action="count.php" method="post">
    <h1 style="text-align: center">计算器</h1>
    <table width=800  border=1>
        <tr>
            <td>
                <input type="text" name="first" value="<?php echo $first?>">
            </td>
            <td>
                <select name="char" id="" >
                    <option value="+" <?php echo  $char=='+' ? selected :  " " ?> >+</option>
                    <option value="-"  <?php echo  $char=='-' ? selected :  " " ?>>-</option>
                    <option value="*"  <?php echo  $char=='*' ? selected :  " " ?>>x</option>
                    <option value="/" <?php echo  $char=='/' ? selected :  " " ?>>/</option>
                    <option value="%" <?php echo  $char=='%' ? selected :  " " ?>>%</option>
                </select>
            </td>
            <td>
                <input type="text" name="second"  value=" <?php echo $second?>">
            </td>
            <td>
                <input type="submit" name="sub" value="计算" id="btn">
            </td>
        </tr>
        <?php
        if(isset($_POST['sub'])){
            echo "<tr>";
            if (is_numeric($first)&&is_numeric($second)&&$first!=""&&$second!=""){
                echo "<td colspan='4'>"."结果是：".$first.$char.$second." = ".$_result."</td>";
            }else{
                echo "<td colspan='4'>".$_result."</td>";
            }

            echo "</tr>";

        }
        ?>

    </table>

</form>



<script>
    var btn = document.getElementById("btn");
    btn.onclick = function () {

    }
</script>
