<?php
  /**
   *  This class will handle the intake, reading, and management of the excel/csv spread sheet in php
   */
  include 'Objects/DataTable.php';
  class InputSpreadSheet
  {
    // Class specific variables
    private $fileLink;
    private $tables = array();

    // Constructor function
    function __construct($newFileLink)
    {
      $this->fileLink = $newFileLink
    }

    public function printCurrentSpreadSheetData()
    {
      for ($x=0; $x<count($tables); $x++)
      {
        $currentTable = $tables[$x];
        $currentTable->printSelf();
      }
    }
  }


?>
