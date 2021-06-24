<?php
//測試連線是否正常
namespace DB;
use PDO;
use PDOException;

class DB{}

try {

   $db = new PDO('mysql:host=localhost;port=3307;dbname=hello','root','ABC123');
   if (isset($db)) printf("Connection Success");
} catch(PDOException $e) {
    printf("Could not connect to the database: %s ",$e->getMessage());
}
?>