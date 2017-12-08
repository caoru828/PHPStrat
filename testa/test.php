<?php
  echo "123";
  echo "<h1>嵌入H1</h1>";
  $a = 100;
  echo "<script>location='http://www.baidu.com'</script>";
    for($i=0;$i<5;$i++) {
        ?>
        <h1>PHP</h1>
        <h1><?php echo $a; ?></h1>
        <?php
    }
?>