<?php
/***************
*
* This class handles everything with the economy. 
*
***************/
class Bank{

	/*********
	*Connect to the database and make that object __contruct and avialable for the hole class
	***********/
	private $db;
		
	public function __construct($database){
		$this->db = $database;
	}

	/*****************
	* Give users gold at first login
	*****************/

	//check if there allready exists a bank for the user

	public function check_bank($id){
		$query = $this->db->prepare("SELECT count(`memID`) FROM `bank` WHERE `memID`= ?");
		$query->bindValue(1, $id);

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

	//Insert gold in the bank at first login
	public function insert_gold_login($memID){
		
		$gold = 500;

		$query = $this->db->prepare("INSERT INTO `bank` (memID, gold) VALUES (?,?)");

		$query->bindValue(1, $memID);
		$query->bindValue(2, $gold);

		try{
			$query->execute();

		}catch(PDOException $e){
			die($e->getMessage());
		}
	}


	/**************
	* Get values from the bank
	**************/

	public function get_gold($memID){
		$query = $this->db->prepare("SELECT `gold` FROM `bank` WHERE `memID` = ?");
		$query->bindValue(1, $memID);

		try{
			$query->execute();
			$data 				= $query->fetch();
			$gold				= $data['gold'];
			
			return $gold;

		}catch(PDOException $e){
			die($e ->getMessage());
		}
	}
}

?>