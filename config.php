<?php

// if(!isset($_SESSION['lang']))
// 	$_SESSION['lang'] = "mar";

// if ($_GET['lang'] == "en") {
// 	$_SESSION['lang'] = "en";
// } else {
// 	$_SESSION['lang'] = "mar";
// }
// require_once"lang/".$_SESSION['lang'] .".php";

if(!isset($_SESSION['lang']))
	$_SESSION['lang'] = 'mar';

if($_GET['lang'] == 'en') {
	$_SESSION['lang'] = "en";
}

if($_GET['lang'] == 'mar') {
	$_SESSION['lang'] = "mar";
}

require_once"lang/".$_SESSION['lang'] .".php";







