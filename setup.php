<?php
define("ROOT_DIR", __DIR__);
$loader = require ROOT_DIR."/vendor/autoload.php";
$loader->add("Elon\\", ROOT_DIR."/game");
$config = spyc_load_file(ROOT_DIR."/res/config.yml");

Elonia\Game::getInstance()->setConfig($config);
