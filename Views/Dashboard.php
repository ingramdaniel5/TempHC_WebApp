<?php
  include 'Objects/InputSpreadSheet.php';
  $newInputSpreadsheet = new InputSpreadSheet('Assets/SampleData/SampleInputTwoMultipleTables.csv');
  $newInputSpreadsheet->findSpreadSheetTables();
  $newInputSpreadsheet->printCurrentSpreadSheetData();
  /*
  $testDataTableCSV = new DataTable(0,19,0,30, 'Assets/SampleData/SampleInputOne.csv');
  $testDataTableCSV->printSelf();
  echo "</br></br>";
  $testDataTableEXCEL = new DataTable(0,19,0,30, 'Assets/SampleData/SampleInputOne.xlsx');
  $testDataTableEXCEL->printSelf();
  */
?>
