<?php
  function table99($i=2,$j=1){
    if ($j > 9){//如果$j小于9 $i就++（加1）
      $i++;
      $j = 1;
      echo "\n";
    }
    if ( $i <= 9 ){//$i小于9 先印出再 $j++(加1)
      printf("%d*%d=%d \t",$i,$j,($i*$j));
      $j++;
      table99($i,$j);
    }
  }
  echo table99();//叫出自己
?>