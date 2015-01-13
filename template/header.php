<?php
    include('core/init.php');
    $general->logged_out_protect();    
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Lister på den enkle måten. Registrer deg idag">
    <meta name="author" content="Ole Martin skaug"> 

    <title>War Game</title>
    <!--Favicon-->
    <link rel="shortcut icon" href="myfavicon.ico" type="image/x-icon">
    <link rel="icon" href="myfavicon.ico" type="image/x-icon">
    <link href='http://fonts.googleapis.com/css?family=Yellowtail' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Indie+Flower' rel='stylesheet' type='text/css'>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css" />
    <!-- Add custom CSS here -->
    <link href="css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <!-- Page Specific CSS -->
    <link rel="stylesheet" href="http://cdn.oesmith.co.uk/morris-0.4.3.min.css">
    
  </head>

  <body>
      <!-- Sidebar -->
      
      <nav class="navbar navbar-default" role="navigation">
          <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand wrap-brand" id="top-main-active" href="main.php">Wargames</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                <li id="main-active"><a href="main.php">Kamp Arena</a></li>
                <li id="secound-active"><a href="main.php">Mine krigere</a></li>
              </ul>
              
            <ul class="nav navbar-nav navbar-right navbar-user">
                
                <!--Gold-->
                <li class="dropdown alerts-dropdown">

                    <a class="dropdown-toggle" data-toggle="dropdown" id="show-gold" href="#">
                      
                    </a>
                </li>

                <!--Requests-->
                <li class="dropdown messages-dropdown">
                  <a href="#" id="requestTab" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> 
                   Meldinger
                  <ul class="dropdown-menu">
                    <li class="dropdown-header">Meldinger</li>
                    <li class="message-preview">
                      <a id="messagesBlock">
                        
                      </a>
                    </li>
                   
                  </ul>
                </li>

                <!--Alerts-->
                <li class="dropdown alerts-dropdown">

                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell"></i>
                    </a>
                </li>
              
              <!--User-->
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="user-nickname-header"></a>
                  <ul class="dropdown-menu">
                    <li><a href="changePw.php"><i class="fa fa-key"></i> Bytt passord</a></li>
                    <li class="divider"></li>
                    <li id="logoutBtn"><a href="#"><i class="fa fa-power-off"></i> Logg ut</a></li>
                  </ul>
                </li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
        
