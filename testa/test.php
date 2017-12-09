<?php
  echo "123";
  echo "<h1>嵌入H1</h1>";
  $a = 100;
//  echo "<script>location='http://www.baidu.com'</script>";
    for($i=0;$i<5;$i++) {
        ?>
        <h1>PHP</h1>
        <h1><?php echo $a; ?></h1>
        <?php
    }
?>
<!--三码一致（文件编码，浏览器解码，数据库编码）-->
<!--文件编码ANSI、unicode、utf-8-->
<!--浏览器解码gbk、gb18030、gb312-->
<!--数据库编码utf-8-->

<!--
php数据类型
四个标量类型int float string bool
两个复合类型array object
两个特殊类型 resource null

resource数据库，文本里读的，写的叫这个资源
!-->


<!--
echo只能用来输出标量类型，
不能输出复合类型
$arr = array(1,2,3,4,5);
echo $arr //只能输出Array，不能用echo输出数组
print_r($arr);//用来输出数组，Array([0]=> 1 [1]=> 2 [2]=>3 [3]=>4 [4]=>5)
变成原码显示
echo "<pre>"
print_r($arr)
echo "</pre>"
Array
    (
    [0]=> 1
    [1]=> 2
    [2]=>3
    [3]=>4
    [4]=>5
    )

    PHP输出数组
    $arr = array(1,2,3,4,5);
   for($i=0;$i<count($arr);$i++){
        echo $i."<br/>";
   }


-->

<!--
js判断变量类型 typeof
一个类型包含一个类型instaceof
当前类型和现在类型有原型关系istrotall  of
-->



<!--
PHP下看变量类型
//var_dump（）
$name = "lisi';
var_dump($name);
//调程序，到哪停，设置断点
die();
echo 123;
echo 456;

-->


<!--
判断变量存不存在，在内存中销毁这个变量


-->