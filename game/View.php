<?php
namespace Elonia;
if(!defined("ROOT_DIR")){
	die("Error");
}

class View extends \Smarty {

	public function __construct($config){
		parent::__construct();
		//var_dump(ROOT_DIR.DIRECTORY_SEPARATOR.$config["smarty"]["template"]."/");
		$this->template_dir = ROOT_DIR.DIRECTORY_SEPARATOR.$config["smarty"]["template"]."/";
		$this->compile_dir = ROOT_DIR.DIRECTORY_SEPARATOR.$config["smarty"]["compile"]."/";
		$this->config_dir = ROOT_DIR.DIRECTORY_SEPARATOR.$config["smarty"]["config"]."/";
		$this->cache_dir = ROOT_DIR.DIRECTORY_SEPARATOR.$config["smarty"]["cache"]."/";
		$this->debugging = $config["smarty"]["debug"];
	}

}