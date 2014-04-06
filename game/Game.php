<?php
namespace Elonia;
if(!defined("ROOT_DIR")){
	die("Error");
}
use \RedBean_Facade as R;
class Game {

	protected static $_game = NULL;
	/** @var array */
	protected $config;

	public function start(){
		$dns = $this->config["database"][$this->config["game"]["db_driver"]];
		R::setup("sqlite:".ROOT_DIR."/res/elonia.dat",
        $dns["user"],$dns["password"]);

	}

	public function save(array $g = array()){
		$this->_timers();
		R::close();	
	}

	public function setConfig(array $config){
		$this->config = $config;
	}

	public static function getInstance() {
		if(is_null(self::$_game)){
			self::$_game = new self();
		}
		return self::$_game;
	}

	private function _timers(){
		$timers = R::findOne("timers", "id=1");
		if(is_null($timers)){
			$timers = R::dispense("timers");
		}
		$timers->current_time = time();
		//смена дня и ночи
		if($timers->next_day_change < time()){
			if($timers->day_part >= 4){
				$timers->day_part = 1;
			} else {
				$timers->day_part++;
			}
			$timers->next_day_change = time() + $this->config["game"]["day_long"];
		}
        R::store($timers);
	}
}