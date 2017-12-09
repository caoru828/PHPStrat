<?php
//判断变量存不存在，在内存中销毁这个变量  isset unset
//判断post提交是否成功，就是判断是否按下sub键   接哪个表单的哪个值就是$_POST['name的名字']
if(isset($_POST['sub'])){
//    echo "success";
    $ss = $_POST['num'];
//  unset在内存中可以直接把变量干掉   标量复合类型都能干掉
    $arr = array(1,5);
    unset($arr);
    unset($ss);
    echo $ss;
}
//else{
//    echo "error";
//}
//php中变量区分大小写，而函数不区分大小写
?>
<meta charset="utf-8">
<!--希望那个PHP进行处理，就把这个action等于谁-->
<form action="test7.php" method="post">
    数据： <input type="text" name="num">
    <input type="submit" name="sub" value="提交">
</form>