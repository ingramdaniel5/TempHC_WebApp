<?php
$DBTextFieldAbbreviations = new TextFieldAbbreviation();
$DBNumericAbbreviations = new NumericFieldAbbreviation();
$DBStandardizedAbbreviations = new StandardizedFieldAbbreviation();
$CurrentTextFieldAbbreviations = $DBTextFieldAbbreviations->getAllItems();
$CurrentNumericFieldAbbreviations = $DBNumericAbbreviations->getAllItems();
$CurrentStandardFieldAbbreviations = $DBStandardizedAbbreviations->getAllItems();
?>
