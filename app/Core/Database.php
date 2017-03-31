<?php

class Database{

	private static $_instance = null;
	private $mysqli;


	public function __construct(){
		$this->mysqli = new mysqli('localhost','root','era','coba') or die('erro koneksi');
	}

	public static function getInstance(){
		if(!isset(self::$_instance)){
			self::$_instance = new Database;
		}

		return self::$_instance;
	}

	public function index($table){
		$replay = [];
		$query = "SELECT * FROM $table";
		$result = $this->mysqli->query($query);
		while($row = $result->fetch_assoc()){
			$replay[] = $row;
		}
		return $replay;
	}


}