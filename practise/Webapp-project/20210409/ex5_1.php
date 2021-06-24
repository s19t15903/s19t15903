<?php
function buycaffee(...$cost) {
$total = 0;
foreach($cost as $i){
    $total += $i;
    }
    $cup = $total / 50;
    return $cup;
}
$peter = buycaffee(300,500,210,40);{
printf("Peter 買了 %d 杯咖啡!",$peter);
$marry = buycaffee(200);
printf("Marry 買了%d杯咖啡",$marry);
}

?>