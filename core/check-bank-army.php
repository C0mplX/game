<?php

//Get function to run
$function_to_run = $_POST['function_to_run'];

//switch to decide wich function to run
switch($function_to_run){
	case "check_gold":
	checkGold();
	break;
	case "check_army":
	checkArmy();
	break;
	case "check_mission":
	checkMission();
	break;
	case "get_one_mission":
	getMissionInfo();
	break;
}

//Get gold from db
function checkGold(){
	require '../core/init.php';
	//Get member id
	$memID = $_SESSION['id'];

	$get_gold = $bank->get_gold($memID);

	echo $get_gold;
}

//Get heros from db
function checkArmy(){
	require '../core/init.php';
	//Get member id
	$memID = $_SESSION['id'];

	$get_army = $army->get_army($memID);

	foreach ($get_army as $value) {
		$heroName		= $value['heroname'];
		$level			= $value['level'];
		$special		= $value['special'];
		$heropicture	= $value['heropicture'];
		$heroDrag		= $value['dragID'];
		$inuse			= $value['inuse'];

		if ($inuse != 1){
			echo '<div class="col-md-12 hero-drag" id="'.$heroDrag.'" style="background-image: url('.$heropicture.')">
				<h5>'.$heroName.'</h5>
				lvl: '.$level.'</br>
				<h5>'.$special.'</h5>
			</div>'; 
		}else{
			echo '<div class="col-md-12 hero-drag-inuse" style="background-image: url('.$heropicture.')">
				<h5>'.$heroName.'</h5>
				lvl: '.$level.'</br>
				<h5>'.$special.'</h5>
			</div>'; 
		}
		
	}
}

//Get missions from db
function checkMission(){
	require '../core/init.php';
	
	$get_missions = $mission->get_missions();

	foreach ($get_missions as $value) {
		$id 			 = $value['id'];
		$name 			 = $value['name'];
		$slots			 = $value['slots'];
		$levelcap		 = $value['levelcap'];
		$mission_picture = $value['missionpicture'];

		echo '<a href="selected.php?battleid='.$id.'">
				<div class="col-md-3 mission-block" id="battle-'.$id.'" style="background-image: url('.$mission_picture.')">
					<div class="col-md-12 overlay-battle-text">'.$name.'</div>
				</div>
			</a>';		
	}
}


?>