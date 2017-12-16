<?php
$one = 100;
$two = &$one;

$one =10;
$two = "hello";

echo $one."<br/>";
echo $two."<br/>";
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
