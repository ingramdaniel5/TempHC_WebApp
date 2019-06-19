<?php
//Error display settings for development process:
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

//Inclusion of starting page on release should be login screen
include "Views/Dashboard.php";
?>
