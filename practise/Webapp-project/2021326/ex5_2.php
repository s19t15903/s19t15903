<?php
    //計算總和
    function summary(...$number){ //三个点的意思是随时改变$number的阵列
        $sum = 0;
        foreach($number as $i);{ //foreach意思是把$number里面的东西捞出来？？
            $sum +=$i;
        }
        return $sum;
    }
    $total = summary(1,2,3,4);
    printf("總計:%d",$total);
?>