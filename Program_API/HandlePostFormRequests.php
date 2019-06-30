<?php
include 'Assets/CustomProjectAssets.php';
include 'Controllers/DataBaseHelper.php';
include 'Objects/DatabaseItems.php';


//Page resource gathering:
//This script gets all of the assets the manual data entry page needs
include 'Program_API/GetAllFields.php';


// Form Input handling code:
// Here is the code that handles post requests for the manual data entry page:
if (isset($_GET["GenerateNewField"]))
{
  if (!empty($_POST["FieldType"]) && !empty($_POST["FieldName"])) // Checks if required fields are set in post form
  {
    if ($_POST["FieldType"] != "UNSELECTED_TYPE")
    {
      $newItem;
      if ($_POST["FieldType"] == "text_field")
        $newItem = new TextField();
      else if ($_POST["FieldType"] == "numeric_field")
        $newItem = new NumericField();
      else if ($_POST["FieldType"] == "standardized_field")
        $newItem = new StandardizedField();
      $insertionResult = $newItem->insertNewItem(array($_POST["FieldName"]));
      if($insertionResult[0] != "true")//My DB class returns an array the first item of which is success status
      {
        $currentAlertMessage = "ERROR, Unable to insert new field!";
        include 'Views/StandardViewComponents/ErrorAlertBox.php';
      }
      else
      {
        $currentAlertMessage = "Success! New Field Added";
        include 'Views/StandardViewComponents/SuccessAlertBox.php';
      }
    }
  }
}

if (isset($_GET["GenerateNewAbbreviation"]))
{
  if (!empty($_POST["ParentField"]) && !empty($_POST["FieldAbbreviationName"])) // Checks if required fields are set in post form
  {
    if ($_POST["ParentField"] != "UNSELECTED_PARENT")
    {
      $newItem;
      if (strpos($_POST["ParentField"], 'text_field') !== false) //If the string contains the table name
        $newItem = new TextFieldAbbreviation();
      else if (strpos($_POST["ParentField"], 'numeric_field') !== false)
        $newItem = new NumericFieldAbbreviation();
      else if (strpos($_POST["ParentField"], 'standardized_field') !== false)
        $newItem = new StandardizedFieldAbbreviation();

      //Extracts the ID from the string value
      preg_match_all('!\d+!', $_POST["ParentField"], $matches);
      //Condences the matched int result ot get the item ID
      $newItemID = implode(' ', $matches[0]);
      $insertionResult = $newItem->insertNewItem(array($newItemID, $_POST["FieldAbbreviationName"]));
      if($insertionResult[0] != "true")//My DB class returns an array the first item of which is success status
      {
        $currentAlertMessage = "ERROR, Unable to insert new Abbreviation!";
        include 'Views/StandardViewComponents/ErrorAlertBox.php';
      }
      else
      {
        $currentAlertMessage = "Success! New Abbreviation Added";
        include 'Views/StandardViewComponents/SuccessAlertBox.php';
      }
    }
  }
}

?>
