<?php
include('core/init.php');
$general->logged_in_protect();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>GameWars</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">

      <form class="form-signin">
        <h1>Game wars<h1>
        <h2 class="form-signin-heading">Loggin her</h2>
        <label for="inputEmail" class="sr-only">Epostadresse</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Epostadresse" required autofocus>
        <label for="inputPassword" class="sr-only">Passord</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Passord" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Husk meg
          </label>
        </div>
        <button class="btn btn-lg button btn-primary btn-block" id="login-button" type="submit">Sign in</button>
        <div id="responseLog" class="response text-center"></div>
      </form>

      <form class="form-registrer">
       <h2>Ikke medlem enda? Registrer deg<h2>
        <label for="signupNick" class="sr-only">Kallenavn</label>
        <input type="text" id="signupNick" class="form-control" placeholder="Kallenavn" required> 
        <label for="signupEmail" class="sr-only">Epostadresse</label>
        <input type="email" id="signupEmail" class="form-control" placeholder="Epostadresse" required>
        <label for="signupPassword" class="sr-only">Passord</label>
        <input type="password" id="signupPassword" class="form-control" placeholder="Passord" required>
        <label for="signupPasswordRe" class="sr-only">Gjennta passord</label>
        <input type="password" id="signupPasswordRe" class="form-control" placeholder="gjennta passord" required>
        <button class="btn btn-lg button btn-primary btn-block" id="registration-button" type="submit">Registrer meg</button>
        <div id="responseReg" class="response text-center"></div>
      </form>


    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
    <script src="js/ajax/signup/signup-ajax.js"></script>
  </body>
</html>