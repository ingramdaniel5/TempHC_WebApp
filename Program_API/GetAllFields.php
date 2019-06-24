<?php
$DBTextFields = new TextField();
$DBNumericFields = new NumericField();
$DBStandardizedFields = new StandardizedField();

$CurrentTextFields = $DBTextFields->getAllItems();
$CurrentNumericFields = $DBNumericFields->getAllItems();
$CurrentStandardFields = $DBStandardizedFields->getAllItems();
?>
