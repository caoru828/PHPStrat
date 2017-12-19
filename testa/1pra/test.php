<?php
$one = 100;
$two = &$one;

$one =10;
$two = "hello";

echo $one."<br/>";
echo $two."<br/>";

$a = 20;
//$b=$a++;
$b = $a++ + ++$a;//20 + 22
echo $a;  //22
echo $b;  //42
$c = --$b - $b--;//41 - 41
echo "<br/>".$b."<br/>"; //40
echo $c."<br/>";//0
$d = $c++ + --$c;// 0 + 0
echo "<br/>".$c."<br/>";  //0
echo $d."<br/>";          //0
//echo $d;


?>
<script>
//直接赋值       引用赋值
//  传值和传址
//    var name = 123;
//    var obj = {
//        'name':123;
//    }
//var name = 456;//地址变了
//    obj.name = 346;//地址没变
//    module.exports exports
</script>
