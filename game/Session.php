<?php
namespace Elonia;
if(!defined("ROOT_DIR")){
	die("Error");
}
namespace Elonia;

class Session {
	private $_sessionName = "SID";

	protected static $_session = null;

	private function __construct(){
		session_name($this->sessionName);
		session_start();
	}

	public function __get($key){
		return (isset($_SESSION[$key])) ? $_SESSION[$key] : NULL;
	}

	public function __set($key, $value){
		$_SESSION[$key] = $value;
	}

	public function __isset($key){
		return isset($_SESSION[$key]);
	}

	public function __unset($key){
		unset($_SESSION[$key]);
	}

	public function __destruct(){
		session_destroy();
	}

	public static function getInstance(){
		if(is_null(SELF::$_session)){
			SELF::$_session = new SELF();
		}
		return SELF::$_SESSION;
	}
}