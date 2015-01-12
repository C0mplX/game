<?php
$selected = $_GET['battleid'];

if( $selected == 1 ){
	$battle_header 	= "Black Dragon";
	$battle_img		= "img/battle-img/castle.jpg";
}
if( $selected == 2 ){
	$battle_header 	= "Fire age";
	$battle_img		= "img/battle-img/heroic.jpg";
}
if( $selected == 3 ){
	$battle_header 	= "Light Wall";
	$battle_img		= "img/battle-img/mage.jpg";
}
if( $selected == 4 ){
	$battle_header 	= "Wolf Quest";
	$battle_img		= "img/battle-img/wolf.jpg";
}
if( $selected == 5 ){
	$battle_header 	= "Snow Land";
	$battle_img		= "img/battle-img/battle4.jpg";
}
if( $selected == 6 ){
	$battle_header 	= "Dragon Slayer";
	$battle_img		= "img/battle-img/battle6.jpg";
}

//Get info from db
$get_mission = $mission->get_one_mission($selected);

$id 			 = $get_mission['id'];
$name 			 = $get_mission['name'];
$slots			 = $get_mission['slots'];
$levelcap		 = $get_mission['levelcap'];
$mission_picture = $get_mission['missionpicture'];
$description	 = $get_mission['description'];
$weekness		 = $get_mission['weekness'];

$slotsView = showSlots($slots);

//How many slots funtion
function showSlots($slots){
	if($slots == 1){
		return '<div class="hero-drop col-md-12" id="hero-1-drop"></div>';
	}
	if($slots == 2){
		return '<div class="hero-drop col-md-6" id="hero-1-drop"></div>
		<div class="hero-drop col-md-6" id="hero-2-drop"></div>';
	}
	if($slots == 3){
		return '<div class="hero-drop col-md-4" id="hero-1-drop"></div>
		<div class="hero-drop col-md-4" id="hero-2-drop"></div>
		<div class="hero-drop col-md-4" id="hero-3-drop"></div>';
	}
}

?>