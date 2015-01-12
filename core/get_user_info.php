<?php
require '../core/init.php';
//Get member id
$memID = $_SESSION['id'];

$get_user_info  = $users->get_user_data($memID);

foreach ($get_user_info as $value) {
	
	$nickname = $value['nickname'];

	echo $nickname;
}
?>