<?php

define("ROOT_DIR", __DIR__);

$loader = require ROOT_DIR."/vendor/autoload.php";

$config = spyc_load_file(ROOT_DIR."/res/config.yml");

if(Elonia\Cookie::exists($config["game"]["name"])){
	require "game.php";
} else {
	header("Location: login.php");
}
