<?php


require  "DatabaseTable.php";

class Users
{
    protected $users_table;
    protected $id;

    public function __construct($id)
    {
        $this->id = $id;
        $this->users_table = new DatabaseTable('users', $id);
    }

    public function getUsers($column, $value) {

        return ($this ->users_table -> find($column, $value) ?? 'No students found');
    }

    public function getAllUsers() {

        return ($this ->users_table -> findAll() ?? 'No students found');
    }
    
    public function loginCheck($username, $password) {
		$verified = false;
	
		$users = $this->getUsers('username', $username);
	
		// If a student is found and their password matches the input password then return true, else return false;
		(!empty($users) && $users[0]['password'] == $password) ? $verified = true : $verified = false;
	
		return $verified;
	}
}