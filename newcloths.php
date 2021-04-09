<?php
include "clothes.php";

$tshirt = new clothes();
printf("衣服名字: %s\n",$tshirt->getName());
printf("衣服的價錢 %d",$tshirt->getPrize());
?>