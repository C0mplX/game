<?php
session_start();
header('Content-Type: text/html; charset=ISO-8859-1');
require 'connect/database.php';
require 'classes/users.php';
require 'classes/bank.class.php';
require 'classes/army.class.php';
require 'classes/mission.php';
require 'classes/general.php';

$users			= new Users($db);
$bank			= new Bank($db);
$mission		= new mission($db);
$army			= new Army($db);
$general  		= new General();
$errors			= array();
?>