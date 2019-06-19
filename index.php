<?php
//Error display settings for development process:
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);
include 'Views/Dashboard.php';
//Credentials Checking before User proceeds to dashboard:
//Required values for entry are stored as post values
/*
if(!empty($_POST["username"]) && !empty($_POST["password"])) //If both post fields are set...
{
  //  echo "Found UN and PWD!";
  //  Validity checking of username and password goes here
  include 'Views/Dashboard.php';
}
else //If one or both post fields aren't set... or they are invalid
{
  //echo "No entry for you!";
  //Inclusion of starting page on release should be login screen
  include "Views/MainLogin.php";
}
*/
?>
