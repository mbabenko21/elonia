<?php
require "setup.php";
use Elonia\Cookie;
use Elonia\View;
use Elonia\Game;
Cookie::remove($config["game"]["name"]);

$view = new View(Game::getInstance()->getConfig());

$view->display("site/reg.tpl");