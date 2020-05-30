<?php 
class User extends Database{

	protected $username;
	protected $password;
	protected $first_name;
	protected $last_name;

	private function qureyExec($sql, $with_params){
		$mysqli = $this->connection();
		$stmt = $mysqli->prepare($sql);

		if ($with_params) {
			$stmt->bind_param("ssss", $this->username, $this->password, $this->first_name, $this->last_name);
		}
		
		$stmt->execute();
	
		if (!$with_params) {
			$result = $stmt->get_result();
			return $result;
		}
		
		$stmt->close();
	}


	protected function addUser(){
		$sql = "INSERT INTO users (username, password, first_name, last_name) VALUES (?, ?, ?, ?)";
		$this->qureyExec($sql, true);
	}


	protected function getUsers(){
		$arr = [];
		$sql = "SELECT * FROM users";
		$result = $this->qureyExec($sql, false);
	
		while($row = $result->fetch_assoc()) {
			$arr[] = $row;
		}
		if(!$arr) exit('No rows');
		return $arr;
	}

}