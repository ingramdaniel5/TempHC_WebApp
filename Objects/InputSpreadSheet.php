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
      $this->fileLink = $newFileLink;
    }

    //Loops through and gets how many items are in the table row
    function getRowTrueLength($currentRow)
    {
      $rowSize = 0;
      for ($x=0; $x<Count($currentRow); $x++)
      {
        if ($currentRow[$x] != "")
        {
          $rowSize++;
        }
      }
      return $rowSize;
    }

    public function findSpreadSheetTables()
    {
      if ($this->fileLink != "UNKNOWN")  //If the location var has been set...
      {
        if (($handledFile = fopen($this->fileLink, "r")) !== FALSE)  //Attempts to open the set file location
        {
          //In future will support multiple tables per excel sheet
          $startX = 0;
          $startY = 0;
          $currentEndX = 0;
          $currentEndY = 0;
          while (($row = fgetcsv($handledFile)) !== FALSE)//Gets each row from the file
          {
            $rowLength = $this->getRowTrueLength($row);
            if ($rowLength > $currentEndX || $rowLength == 0)//Start of a new table!
            {
              if ($currentEndY - $startY != 0) //Handles Turning past rows into a table if table is identified
              {
                // If the new table has more then 0 rows, its dimensions are sent to the DataTable Class to read later
                array_push($this->tables, new DataTable($startX, $currentEndX, $startY, $currentEndY, $this->fileLink));
              }
              $startY = $currentEndY; // Sets the starting point of the next table as the endpoint of the first
              $currentEndX = $rowLength; // Sets new table width to found column amount
            }
            $currentEndY++; //Increments the current end Y row
          }
          //At the end of file needs to submit the final found table dimmensions:
          array_push($this->tables, new DataTable($startX, $currentEndX, $startY, $currentEndY, $this->fileLink));
          //Closes file
          fclose($handledFile);
        }
        else {
          //If this else is reached, the file was unable to be opened....
          echo "</br>Unable to open file, not updating data set</br>";
        }
      }
      //For testing of multiple table recognition
      //var_dump($this->tables);
      //Once file's table dimmensions are found, read in each tabls data from the files...
      $tableAmount = count($this->tables);
      for ($x=0; $x<$tableAmount; $x++)
      {
        $currentTable = $this->tables[$x];
        $currentTable->readInTable();
      }
    }

    public function printCurrentSpreadSheetData()
    {
      $tableAmount = count($this->tables);
      for ($x=0; $x<$tableAmount; $x++)
      {
        $currentTable = $this->tables[$x];
        $currentTable->printSelf();
        echo "</br></br>";
      }
    }
  }


?>
