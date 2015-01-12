<?php
/***************
*
* This class handles everything with the economy. 
*
***************/
class Army{

	/*********
	*Connect to the database and make that object __contruct and avialable for the hole class
	***********/
	private $db;
		
	public function __construct($database){
		$this->db = $database;
	}

	/*****************
	* Give users Army on first login
	*****************/

	//check if there allready exists a bank for the user

	public function check_army($id){
		$query = $this->db->prepare("SELECT count(`memID`) FROM `army` WHERE `memID`= ?");
		$query->bindValue(1, $id);

		try{
			$query->execute();
			$rows = $query->fetchColumn();

			if($rows >= 1){

				return true;

			}else{

				return false;
			}

		}catch(PDOException $e){
			die($e->getMessage());
		}
	}

	//Insert gold in the bank at first login
	public function insert_army_login($memID, $heroname, $special, $heropicture, $dragID){
		
		$level = 1;

		$query = $this->db->prepare("INSERT INTO `army` (memID, heroname, level, special, heropicture, dragID) VALUES (?,?,?,?,?,?)");

		$query->bindValue(1, $memID);
		$query->bindValue(2, $heroname);
		$query->bindValue(3, $level);
		$query->bindValue(4, $special);
		$query->bindValue(5, $heropicture);
		$query->bindValue(6, $dragID);

		try{
			$query->execute();

		}catch(PDOException $e){
			die($e->getMessage());
		}
	}

	/**************
	* Get values from the bank
	**************/

	public function get_army($memID){
		$query = $this->db->prepare("SELECT * FROM `army` WHERE `memID` = ?");
		$query->bindValue(1, $memID);

		try{
			$query->execute();
			
			return $query->fetchAll();

		}catch(PDOException $e){
			die($e ->getMessage());
		}
	}
}

?>