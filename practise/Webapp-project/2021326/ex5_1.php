<?php
//print user name
function name (){
    return("peter");

}
//call caculate score leve
function score($num){
    $leve = intval($num/10);
    switch($leve){
    case 10;
    case 9;
        return "A";
        break;
    case 8 ;
        return"B";
        break;
    case 7;
        return"C";
        break;
    case 6;
        return"D";
        break;
    case 5;
        return"E";
        break;
    case 4;
        return"F";
        break;
    default :
        return "Failed";
        break;
    }
}
//call funtion name
$name = name();
$score = score(60);
printf("姓名:%s , 成績:%s",$name,$score);
?>