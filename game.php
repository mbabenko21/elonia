<?php
if(!defined("ROOT_DIR")){
	die("Error");
}
use Redbean_Facade as R;
use Elonia;
$session = Elonia\Session::getInstance();

$COOKIE = Elonia\Cookie::get($config["game"]["name"]);
$request = new Elonia\HttpRequest();
$game = Elonia\Game::getInstance();
$session->errors = array();

$user = R::findOne("users", "cookie = :COOKIE",
	array(":COOKIE" => $COOKIE)
	);

if(!is_null($user)){
	$game->start();
	$session->user = $user;
	if(is_null($user->activePlayer)){
		//into cabinet
		require_once ROOT_DIR."/actions/cabinet.php";
	} else {
		$player = R::load("players", $session->user->activePlayer);
		$session->player = $player;
		$key = "action" || "act" || "a";
		if($request->byGet($key, true, true) == null or $request->byGet($key, true, true) == "index"){$route = "game/index";}
		if($request->byGet($key, true, true) == "move"){$route = "game/move";}
		if(!isset($route)){$route "game/index"}
		if(file_exists(ROOT_DIR."/actions/".$route.".php")){
			require_once ROOT_DIR."/actions/".$route.".php";
		}
		$session->user->last_action = time();
		R::store($session->user);
		$game->save();
		$session->errors = array();
	}
} else {
	header("Location: login.php");
}


