<?php
require_once "Wash.php";
require_once "plants.php";
require_once "Thirts.php";

$plant = new plants;
$thirt = new Thirts;
$action = new Washer;
$action->dowash($plant);
$action->dowash($thirt);
?>