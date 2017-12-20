<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="pra_11.php" method="post">
    <select name="you" id="sel" onclick="ChangeImg(this)">
        <option value="2" <?php ?>>石头</option>
        <option value="1">剪刀</option>
        <option value="0">布</option>
    </select>
    <img src="cq.jpg" alt="" id="Img">
    <input type="submit" name="btn">
</form>

<script>
    var sel = document.getElementById("sel");
    var Img = document.getElementById("Img");
    function ChangeImg(obj) {
//        console.log(obj);
//        console.log(obj.value);
        if(obj.value==2){
          Img.src =  "qt.jpg";
        }
        if(obj.value==1){
            Img.src = "jz.jpg"
        }
        if(obj.value==0){
            Img.src = "b.jpg"
        }
    }
</script>
</body>
</html>
<?php
  if(isset($_POST['btn'])){
      $you = $_POST['you'];
      $num = rand(0,2);
      switch ($you){
          case '2':echo '您出的是拳头！';break;
          case '1':echo '您出的是剪刀！';break;
          case '0':echo '您出的是布！';break;
      }
      if($you==2&&$num==2){
          echo "<br>"."对方也出的拳头！"."<h3>平局！</h3>";
      }
      if($you==2&&$num==1){
          echo "<br>"."对方出的剪刀！"."<h3>获胜！</h3>";
      }
      if($you==2&&$num==0){
          echo "<br>"."对方出的布！"."<h3>失败！</h3>";
      }
      if($you==1&&$num==2){
          echo "<br>"."对方出的石头！"."<h3>失败！</h3>";
      }
      if($you==1&&$num==1){
          echo "<br>"."对方也出的剪刀！"."<h3>平局！</h3>";
      }
      if($you==1&&$num==0){
          echo "<br>"."对方出的布！"."<h3>获胜！</h3>";
      }
      if($you==0&&$num==2){
          echo "<br>"."对方出的石头！"."<h3>获胜！</h3>";
      }
      if($you==0&&$num==1){
          echo "<br>"."对方出的剪刀！"."<h3>失败！</h3>";
      }
      if($you==0&&$num==0){
          echo "<br>"."对方也出的布！"."<h3>平局！</h3>";
      }


  }
?>


