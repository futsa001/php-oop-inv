<?php 

class UserView extends User {

	public function allUsers(){
		return $this->getUsers();
	}
}