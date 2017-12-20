<?php
//验证码
  $str = '0123456789abcdefghijklmnopqrstuvwxyz';
  $fstr = '';
  for($i=0;$i<4;$i++){
      $num=rand(0,35);
      $flag=true;
      for($j=0;$j<strlen($fstr);$j++){
          if($fstr[$j]==$str[$num]){
              $flag=false;
          }
      }
      if($flag==false){
          $i--;
          continue;
      }
      $fstr.=$str[$num];
  }

  echo $fstr;
?>