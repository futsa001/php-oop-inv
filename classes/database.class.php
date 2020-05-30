<?php 

class Database {

	private $db_host = "localhost";
	private $db_user = "root";
	private $db_pass = "";
	private $db_name = "inv_mgt";

	protected function connection(){

		mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
		try {
			$mysqli = new mysqli($this->db_host, $this->db_user, $this->db_pass, $this->db_name);
			$mysqli->set_charset("utf8mb4");

			return $mysqli;
		} catch(Exception $e) {
			error_log($e->getMessage());
			exit('Error connecting to database');
		}
	}

}