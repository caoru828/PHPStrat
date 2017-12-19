<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<p>sddfca</p>
<script>
//    直接赋值  引用赋值
    var name = 123;

    var obj = {
        'name':123
    };

    var name = 3456; //变址
    obj.name = 3456;  //变值


</script>
</body>
</html>

<?php
    $one = 100;
    $two = &$one;
    echo $two;//100

    $one = 10;
    $two = "hello";
    echo $two;//hello
    echo $one;//hello
?>