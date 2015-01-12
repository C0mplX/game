$(document).ready(function(){

	//Event to handle the drop! 
	$('#hero-1-drop').droppable( {
    drop: handleDropEvent
  	} );
  	$('#hero-2-drop').droppable( {
    drop: handleDropEvent
  	} );
  	$('#hero-3-drop').droppable( {
    drop: handleDropEvent
  	} );


  	function handleDropEvent( event, ui ) {
  		var hero = ui.draggable;
  		
  		hero.position( { of: $(this), my: 'left top', at: 'left top' } );
		hero.addClass('hero-placed').attr('name', 'placed');
		ui.draggable.draggable( 'disable' );
    	$(this).droppable( 'disable' );
  		
  	}

  	var url = window.location.search;

  	$(document).on("click", "#reset_setup", function(){
  		window.location.replace("selected.php"+ url);
  	});

});