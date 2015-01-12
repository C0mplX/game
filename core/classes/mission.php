<?php
/***************
*
* This class handles everything with the economy. 
*
***************/
class mission{

	/*********
	*Connect to the database and make that object __contruct and avialable for the hole class
	***********/
	private $db;
		
	public function __construct($database){
		$this->db = $database;
	}

	//Get all missions
	public function get_missions(){
		$query = $this->db->prepare("SELECT * FROM `missions`");

		try{
			$query->execute();
			
			return $query->fetchAll();

		}catch(PDOException $e){
			die($e ->getMessage());
		}
	}

	//Get one mission 
	public function get_one_mission($id){

		$query = $this->db->prepare("SELECT * FROM `missions` WHERE `id` = ?");
		$query->bindValue(1, $id);

		try{
			$query->execute();
			
			return $query->fetch();

		}catch(PDOException $e){
			die($e ->getMessage());
		}
	}
}

?>