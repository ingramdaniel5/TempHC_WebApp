<?php
  include 'Objects/DataTable.php';
  $testDataTable = new DataTable(0,5,0,5, 'Assets/SampleData/SampleInputOne.xlsx');
  $testDataTable->printSelf();
?>
