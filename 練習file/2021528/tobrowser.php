<?php
//通知瀏覽器準備讀取 CSV 檔案
header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename="email.csv"');

//開啟 CSV 檔案
$lines = fopen('email.csv','rb');

//開啟檔案，做為輸出串流
$csv = fopen('php://output','wb');

//輸出內容
while ((! feof($lines)) && ($line = fgetcsv($lines))){
  fputcsv($csv,$line);
}
?>