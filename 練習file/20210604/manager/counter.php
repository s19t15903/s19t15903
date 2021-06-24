<<<<<<< HEAD
<?php
session_start();

if (isset($_SESSION['count'])){
	$_SESSION['count'] = $_SESSION['count'] + 1;
} else {
	$_SESSION['count'] = 1;
}

print "目前這頁面己經被重載了 ".$_SESSION['count']. " 次";
=======
<?php
session_start();

if (isset($_SESSION['count'])){
	$_SESSION['count'] = $_SESSION['count'] + 1;
} else {
	$_SESSION['count'] = 1;
}

print "目前這頁面己經被重載了 ".$_SESSION['count']. " 次";
>>>>>>> 9c3711f3e7ae434ce4b3f8141c4a44e7ba37ad7e
