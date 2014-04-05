<?php

define("ROOT_DIR", __DIR__);

$loader = require ROOT_DIR."/vendor/autoload.php";
$loader->add("Elon\\", ROOT_DIR."/game");

if(isset($_COOKIE["Elonia"])){
	//to game
} else {
	header("Location: login.php");
}
