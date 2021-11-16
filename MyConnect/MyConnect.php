<?php
/*
	Mysql connector
	Nebi Senol Yilmaz, 2006
*/

class MySqlConnection {
 
	function __construct() {
		$this->host = "";
		$this->db   = "";
		$this->user = "";
		$this->pass = "";
	}
  
	function Open(){
		try {
			$this->ConId = new PDO("mysql:host=$this->host;dbname=$this->db", $this->user, $this->pass);
			$this->ConId->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		}catch (PDOException $e){
			die("Connection Error..\n");
		}
	}
	
	function Close(){
		try {
			$this->ConId = null;

		} catch (PDOException $e){
			die("Close Error..\n");
		}
	}




	function ExecSql($SQL, array $args) {

		try {

			$this->result = $this->ConId->prepare($SQL);
			$this->result->execute($args);


		} catch (PDOException $e){
			die("SQL syntax error..\n");
		}


	}



	function FetchData() {

		try {
			return $this->result->fetch(PDO::FETCH_ASSOC);

		} catch (PDOException $e){
			die("Data fetch error..\n");
		}
	}
	


	function RowCount() {

		return $this->result->rowCount();

	}

}


?>
