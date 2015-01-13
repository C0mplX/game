<?php
include('PassHass.php');

class Users{
	
	/*********
	*Connect to the database and make that object __contruct and available for the whole class
	***********/
	private $db;
		
	public function __construct($database){
		$this->db = $database;
	}

	
	/***************
	*
	*registration and validation of input from user
	*
	***************/

	/***********
	*Validation of inputs upon registration
	***********/

	//Check if email existst in the database
	public function email_exists($email){
		$query = $this->db->prepare("SELECT count(`email`) FROM `members` WHERE `email`= ?");
		$query->bindValue(1, $email);

		try{
			$query->execute();
			$rows = $query->fetchColumn();

			if($rows == 1){

				return true;

			}else{

				return false;
			}

		}catch(PDOException $e){
			die($e->getMessage());
		}
	}

	//Check if nickname existst in the database
	public function name_exists($name){
		$query = $this->db->prepare("SELECT count(`nickname`) FROM `members` WHERE `nickname` = ?");
		$query->bindValue(1, $name);

		try{
			$query->execute();
			$rows = $query->fetchColumn();

			if($rows == 1){

				return true;
			}else{
				
				return false;
			}
		}catch(PDOException $e){
			die($e->getMessage());
		}
	}

	//register the new user 
	public function register($nickname, $email, $password){
		
		$date				= date("Y.m.d");
		$password 			= PassHash::hash($password);

		$query = $this->db->prepare("INSERT INTO `members` (nickname,email,password,joindate) VALUES (?,?,?,?)");

		$query->bindValue(1, $nickname);
		$query->bindValue(2, $email);
		$query->bindValue(3, $password);
		$query->bindValue(4, $date);


		try{
			$query->execute();

			return true;

		}catch(PDOException $e){
			die($e->getMessage());
		}
	}

	/***************
	*
	* Login user
	*
	***************/
	
	//loging in the user
	//Loggin User
	public function login($email, $password){
		$query = $this->db->prepare("SELECT `password`, `id` FROM `members` WHERE `email` = ?");
		$query->bindValue(1, $email);

		try{
			$query->execute();
			$data 				= $query->fetch();
			$stored_password	= $data['password'];
			$id 				= $data['id']; 

			if(PassHash::check_password($stored_password, $password)){

				return $id;

			}else{

				return false;
			}
		}catch(PDOException $e){
			die($e ->getMessage());
		}
	}

	/***************
	* get userdata from the members database
	***************/
	public function get_user_data($memID){
		$query = $this->db->prepare("SELECT * FROM `members` WHERE `id` = ?");
		$query->bindValue(1, $memID);

		try{
			
			$query->execute();

			return $query->fetchAll();

		}catch(PDOException $e){
			die($e->getMessage());
		}

	}


}
?>