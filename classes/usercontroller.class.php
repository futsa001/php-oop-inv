<?php 

class UserController extends User {
	function __construct(){
		if(isset($_POST['addUser'])){
			$this->username = $_POST['username'];
			$this->password = $_POST['password'];
			$this->first_name = $_POST['first_name'];
			$this->last_name = $_POST['last_name'];

			$this->create();
		}
	}

	public function create(){
			$this->addUser();
	}
}