<?php
define("ROOT_DIR", __DIR__);
$loader = require ROOT_DIR."/vendor/autoload.php";
$loader->add("Elon\\", ROOT_DIR."/game");
$config = spyc_load_file(ROOT_DIR."/res/config.yml");
Elonia\Cookie::remove($config["game"]["name"]);
$view = new Elonia\View($config);
Elonia\Game::getInstance()->setConfig($config);
Elonia\Game::getInstance()->start();
Elonia\Game::getInstance()->save();

$g = RedBean_Facade::load("timers", 1);

$view->assign("day_part", mb_strtolower($config["game"]["day_parts"][$g->day_part]));
$view->display("site/login.tpl");
