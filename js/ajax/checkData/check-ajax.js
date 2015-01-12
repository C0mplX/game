$(document).ready(function(){

	checkArmy();
	checkMissions();


	//Get username  from user database
	$.ajax({
		type: "POST",
		dataType: "",
		url: "core/get_user_info.php",
		success: function(data){

			//Get username in header section
			$('#user-nickname-header').html('<i class="fa fa-user" style="color: #fff;"></i> '+data+' <b class="caret"></b>');											

		},
		failure: function(){
			alert('Noe gikk galt, vennligst prøv igjen.');
		}
	});	

	//Set timers
	var time 	= setTimeout(checkGold, 0);

	/**************
	*Check for gold in the bank
	**************/
	function checkGold(){
		var  function_to_run = "check_gold";
		$.ajax({
			type: "POST",
			dataType: "",
			url: "core/check-bank-army.php",
			data: {function_to_run: function_to_run},
			success: function(data){

				$('#show-gold').html('<i class="fa fa-dollar"></i> ' + data);
														

			},
			failure: function(){
				alert('Noe gikk galt, vennligst prøv igjen.');
			}
		});	
		var time = setTimeout(checkGold, 60000);
	}

	function checkArmy(){
		var function_to_run = "check_army"
		$.ajax({
			type: "POST",
			dataType: "",
			url: "core/check-bank-army.php",
			data: {function_to_run: function_to_run},
			success: function(data){
				
				$('#heros-view-arena').html(data);

				//Make hero dragable
				$('#hero-1-drag').draggable();
				$('#hero-2-drag').draggable();
				$('#hero-3-drag').draggable();											

			},
			failure: function(){
				alert('Noe gikk galt, vennligst prøv igjen.');
			}
		});	

	}

	/*************
	*Get missions
	**************/
	function checkMissions(){
		var function_to_run = "check_mission"
		$.ajax({
			type: "POST",
			dataType: "",
			url: "core/check-bank-army.php",
			data: {function_to_run: function_to_run},
			success: function(data){
				
				$('#show-missions').html(data);										

			},
			failure: function(){
				alert('Noe gikk galt, vennligst prøv igjen.');
			}
		});	
	}

});