<?php
/*
 *
 * This is the generic database item/query generator helper class
 * Is used for both the creation of single items as well as the retrieval of large queries
 *
 */

class DatabaseItem
{
  protected $tableName = "UNKNOWN"; //Made public in order to format selection values on ui
  protected $tableFields = array();
  protected $payloadFields = array(); //Fields to be set on insert and update
  protected $encryptedFields = array(); //Fields that need to be encrypted in the database

  function __construct($tableName, $fields) //Takes the table name as well as the table fields
  {
    $this->tableName = $tableName;
    $this->tableFields = $fields;
  }

  private function is_Encrypted($field)
  {
    for ($x=0; $x<count($this->encryptedFields); $x++)
    {
      if ($field == $this->encryptedFields[$x])
        return TRUE;
    }
    return FALSE;
  }

  //Takes an array of object values that should be the same size as the field amount and
  // Should check if the id == -1 as a safeguard for duplicating objects
  public function insertNewItem($ValuesToInsert)
  {
    $qString = "";
    //Standardized query string generation procedure
    if ($this->tableName != "UNKNOWN" && count($ValuesToInsert) == count($this->payloadFields))
    {
      $qString = "INSERT INTO `h_choices_db`.`".$this->tableName."` ("; // adds the desired table to insert
      for ($x=0; $x<Count($this->payloadFields); $x++) //Adds all fields to insert
      {
        $qString = $qString."`".$this->payloadFields[$x]."`,";
      }
      $qString = rtrim($qString,',');//Trims the last character of the string
      $qString = $qString.") VALUES ("; //Closes the field names and starts the values to insert
      for ($x=0; $x<Count($ValuesToInsert); $x++) //Adds all fields to insert
      {
        if ($this->is_Encrypted($this->payloadFields[$x])) //If its an encrypted field encrypt value
        {
          $qString = $qString."'".DataBaseHelper::secured_encrypt($ValuesToInsert[$x])."',";
        }
        else { //Else just print the value
          $qString = $qString."'".$ValuesToInsert[$x]."',";
        }
      }
      $qString = rtrim($qString,',');//Trims the last character of the string
      $qString = $qString.");"; //Closes the values to be added
      //Returns the array given by DB Helper
      //var_dump($qString); //For testing purposes only

    }
    return DataBaseHelper::handleDatabaseQueryTransaction($qString);
  }

  //Takes an array of values that should be the same size as the array of field names
  //And should check for an id field being set
  public function updateItem($ValuesToUpdate)
  {

  }

  //Returns a dictionary of all Items Found
  public function getAllItems()
  {
    $qString = "";
    if ($this->tableName != "UNKNOWN")
    {
      $qString = "SELECT * FROM `h_choices_db`.`".$this->tableName."`;";
    }
    $toReturn = DataBaseHelper::handleDatabaseQueryTransaction($qString);
    if ($toReturn[0] != DataBaseHelper::$defaultResponseMessage)
    foreach($toReturn as &$item)
    {
      for ($x=0; $x<Count($this->encryptedFields); $x++)
      {
        $item[$this->encryptedFields[$x]] = DataBaseHelper::secured_decrypt($item[$this->encryptedFields[$x]]);
      }
    }
    return $toReturn;
  }

  public function deleteItem()
  {

  }
}

class TextField extends DatabaseItem
{
  function __construct()
  {
    //Calls the parents constructor and passes the construct vars
    parent::__construct("text_field", array("id", "is_confirmed", "date_entered", "field_name"));
    $this->payloadFields = array("field_name"); //Only field set in data entry
    $this->encryptedFields = array("field_name");
  }
}

class TextFieldAbbreviation extends DatabaseItem
{
  function __construct()
  {
    //Calls the parents constructor and passes the construct vars
    parent::__construct("text_field_abbreviation", array("id", "is_confirmed", "date_entered", "text_field_id", "field_abbreviation"));
    $this->payloadFields = array("text_field_id", "field_abbreviation"); //Only field set in data entry
    $this->encryptedFields = array("field_abbreviation");
  }
}

class TextFieldValue extends DatabaseItem
{
  function __construct()
  {
    //Calls the parents constructor and passes the construct vars
    parent::__construct();
  }
}


class NumericField extends DatabaseItem
{
  function __construct()
  {
    //Calls the parents constructor and passes the construct vars
    parent::__construct("numeric_field", array("id", "is_confirmed", "date_entered", "field_name"));
    $this->payloadFields = array("field_name"); //Only field set in data entry
    $this->encryptedFields = array("field_name");
  }
}

class NumericFieldAbbreviation extends DatabaseItem
{
  function __construct()
  {
    //Calls the parents constructor and passes the construct vars
    parent::__construct("numeric_field_abbreviation", array("id", "is_confirmed", "date_entered", "numeric_field_id", "field_abbreviation"));
    $this->payloadFields = array("numeric_field_id", "field_abbreviation"); //Only field set in data entry
    $this->encryptedFields = array("field_abbreviation");
  }
}

class NumericFieldValue extends DatabaseItem
{
  function __construct()
  {
    //Calls the parents constructor and passes the construct vars
    parent::__construct();
  }
}


class StandardizedField extends DatabaseItem
{
  function __construct()
  {
    //Calls the parents constructor and passes the construct vars
    parent::__construct("standardized_field", array("id", "is_confirmed", "date_entered", "field_name"));
    $this->payloadFields = array("field_name"); //Only field set in data entry
    $this->encryptedFields = array("field_name");
  }
}

class StandardizedFieldAbbreviation extends DatabaseItem
{
  function __construct()
  {
    //Calls the parents constructor and passes the construct vars
    parent::__construct("standardized_field_abbreviation", array("id", "is_confirmed", "date_entered", "standardized_field_id", "field_abbreviation"));
    $this->payloadFields = array("standardized_field_id", "field_abbreviation"); //Only field set in data entry
    $this->encryptedFields = array("field_abbreviation");
  }
}

class StandardizedFieldValue extends DatabaseItem
{
  function __construct()
  {
    //Calls the parents constructor and passes the construct vars
    parent::__construct();
  }
}

class StandardizedFieldValueAbbreviation extends DatabaseItem
{
  function __construct()
  {
    //Calls the parents constructor and passes the construct vars
    parent::__construct();
  }
}





?>
