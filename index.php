<?php
//Error display settings for development process:
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);
//Credentials Checking before User proceeds to dashboard:
//Required values for entry are stored as post values
// Commented out for testing purposes:  if(!empty($_POST["username"]) && !empty($_POST["password"])) //If both post fields are set...
if (TRUE)
{
  //  echo "Found UN and PWD!";
  //  Validity checking of username and password goes here
  if(isset($_GET["dest"]))   // I specific desitination is set
  {
    if ($_GET["dest"] == "Dashboard") // Goto dashboard page
    {
      include 'Views/Dashboard.php';
    }
    else if ($_GET["dest"] == "DataSheetInput") // Goto datasheet input page
    {
      include 'Views/SpreadsheetEntryPortal.php';
    }
    else if ($_GET["dest"] == "ManualDataInput") // Goto Manual Data Input Page
    {
      include 'Views/ManualDataEntryPortal.php';
    }
    else if ($_GET["dest"] == "ExptExcel") // Goto Export Excel spreadsheet page
    {
      include 'Views/ExportCSVAndExcelPortal.php';
    }
    else if ($_GET["dest"] == "ExptChart") // Goto export chart page
    {
      include 'Views/ManualDataEntryPortal.php';
    }
    else if ($_GET["dest"] == "MngReports") // Goto Manage reports page
    {
      include 'Views/ManageReportsPortal.php';
    }
    else if ($_GET["dest"] == "GenReports") // Goto Generate reports page
    {
      include 'Views/GenerateReportsPortal.php';
    }
    else if ($_GET["dest"] == "MngChartsAndGraphs") // Goto manage charts and graphs page
    {
      include 'Views/ManageChartsAndGraphsPortal.php';
    }
    else if ($_GET["dest"] == "GenChartsAndGraphs") // Goto Generate charts and graphs page
    {
      include 'Views/GenerateChartsAndGraphsPortal.php';
    }
    else { //If an incorrect Navigation request is made goto custom 404 page
      echo "<h1>OH NO! Requested page does not exist:(</h1>";
      include 'Views/MainLogin.php';
    }
  }
  else { //If no Navigation request is made goto custom 404 page
    echo "<center><h1>OH NO! No destination request to go to a page was made! :(</h1></center>";
    include 'Views/MainLogin.php';
  }
}
else //If one or both post fields aren't set... or they are invalid
{
  //echo "No entry for you!";
  //Inclusion of starting page on release should be login screen
  include 'Views/MainLogin.php';
}

?>
