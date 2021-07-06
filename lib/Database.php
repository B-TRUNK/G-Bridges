<?php

	//PDO Connection with Database

class Database {
	private $host = DB_HOST;
	private $user = DB_USER;
	private $pass = DB_PASS;
	private $dbname = DB_NAME;

	private $dbh;  	//database handler
	private $error; //error handler
	private $stmt;  

	//creating the construct
	public function __construct(){
		//set DSN
		$dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname;

		//set options
		$options = array(
			PDO::ATTR_PERSISTENT => true,
			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
		);

		//create a PDO instance
		try {
			$this->dbh = new PDO ($dsn ,$this->user , $this->pass , $options);
		} catch(PDOException $e) {
			$this->error = $e->getMessage();
		}
	}

	//creating a query method
	public function query($query){
		$this->stmt = $this->dbh->prepare($query); 
	}

	//binding values obtained from query method
	public function bind($param, $value, $type = null){
		if(is_null($type)){
				switch (true) {
					case is_int($value):
						$type = PDO::PARAM_INT;
						break;

					case is_bool($value):
						$type = PDO::PARAM_BOOL;
						break;

					case is_null($value):
						$type = PDO::PARAM_NULL;
						break;	

					
					default:
						$type = PDO::PARAM_STRING;
				}
		}
		$this->stmt->bindValue($param ,$value ,$type);
	}
	

	//execute method
	public function execute(){
		$this->stmt->execute();
	}
	
	//result set (fetching method)
	public function resultSet(){
		$this->execute();
		return $this->stmt->fetchAll(PDO::FETCH_OBJ);
	}

	//single result fetching
	public function single(){
		$this->execute();
		return $this->stmt->fetch(PDO::FETCH_OBJ);
	}
}




















