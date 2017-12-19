<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/12/9 0009
 * Time: 下午 12:43
 */
echo file_get_contents("test.txt");

?>

<meta charset="utf-8">
<form action="next.php" method="post">
    <input type="submit" name="agree" value="同意提交">
</form>
<meta charset="utf-8">
<form action="index.php" method="post">
    <input type="submit" name="disagree" value="我不同意">
</form>


