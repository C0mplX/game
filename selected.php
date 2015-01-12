<?php
include ("template/header.php");
require ("core/get-battle-info.php");
?>
<!--Main page-->
<div id="page-wrapper">
    <div class="col-md-12 wrap-content text-center">
       <img class="battle-img-container" src="<?php echo $battle_img;?>">

    </div>

    <div class="col-md-10 col-md-offset-1 wrap-snippet">
    		

    		<div class="col-md-12 text-center">
    			<h3><?php echo $description;?></h3>
    			<h2>Svakhet: <?php echo $weekness; ?></h2>	
    		</div>
    		<div class="col-md-2" >
				
				<div id="heros-view-arena">
					<!--Heros shows up here-->
				</div>
			</div>

    		<div class="col-md-2">
				<?php echo $slotsView ?>
				<div class="btn btn-default button col-md-8" id="reset_setup">Resett</div>
			</div>
			
			<div class="col-md-4 text-center">
			
				<div class="btn btn-default button lg-button" id="ativate-mission">Start oppdrag</div>
			</div>
    </div>  

</div><!-- /#wrapper -->
<?php
include ("template/footer.php");
?>
