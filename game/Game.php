<?php
namespace Elonia;
if(!defined("ROOT_DIR")){
	die("Error");
}
use Redbean_Facade as R;
class Game {

	protected static $_game = NULL;

	public function start(){

	}

	public function save(){
		
	}

	public static function getInstance() {
		if(is_null(SELF::$_game)){
			SELF::$_game = new SELF();
		}
		return SELF::$_game;
	}
}