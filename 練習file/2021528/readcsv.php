<?php
//開啟 CSV 檔案
$files = fopen('email.csv','rb');
//列出檔案內容
while((! feof($files)) && ($line = fgetcsv($files))){

    printf("這箱名稱 : %s ",$line[0]) ;
    printf("建立時間 :%d/%d/%d ",$line[3],$line[1],$line[2]);
    printf("年費 : %d ",$line[4]);
    printf("\n",$line[0]);
}
//關閉檔案
fclose($files);
?>