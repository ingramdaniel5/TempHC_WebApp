<?php

  /**
   * This is the class object that stores and handles a table object
   */

  //Sub item is the table cell item
  include "Objects/TableCell.php";

  class DataTable
  {
    private $tableFileLocation = "UNKNOWN";

    //Stored table width and height
    private $xDimensionAddressMin = 0;
    private $xDimensionAddressMax = 0;
    private $yDimensionAddressMin = 0;
    private $yDimensionAddressMax = 0;

    //2d Array to store all of the sheets text values
    private $tableRows = array();

    function __construct($newMinXAddress, $newMaxXAddress, $newMinYAddress, $newMaxYAddress, $newTableFileLocation)
    {
      $this->tableFileLocation = $newTableFileLocation;

      $this->xDimensionAddressMin = $newMinXAddress;
      $this->xDimensionAddressMax = $newMaxXAddress;
      $this->yDimensionAddressMin = $newMinYAddress;
      $this->yDimensionAddressMax = $newMaxYAddress;

      $this->tableRows = array();
      $this->readInTable();
    }

    private function readInTable()
    {
      if ($this->tableFileLocation != "UNKNOWN")  //If the location var has been set...
      {
        if (($handledFile = fopen($this->tableFileLocation, "r")) !== FALSE)  //Attempts to open the set file location
        {
          if (Count($this->tableRows) != 0) //In the event the array is already occupied, clear it out to refresh the data.
          {
            $this->tableRows = array();
          }
          $currentRow = 0;
          $currentCol = 0;

          //Gets the file to the table starting dimensions
          while (($row = fgetcsv($handledFile)) !== FALSE)
          {
            if ($currentRow >= $this->yDimensionAddressMin && $currentRow <= $this->yDimensionAddressMax) // New Row Adding
            {
              $newRow = array();
              while ($currentCol < Count($row))
              {
                if ($currentCol >= $this->xDimensionAddressMin && $currentCol <= $this->xDimensionAddressMax) // New Col Adding
                {
                  array_push($newRow, new TableCell($row[$currentCol]));
                }
                $currentCol++;
              }
              $currentCol = 0; //Resets Current Column Counter
              array_push($this->tableRows, $newRow);
            }
            $currentRow++;
          }
          fclose($handledFile);
        }
        else {
          //If this else is reached, the file was unable to be opened....
          echo "</br>Unable to open file, not updating data set</br>";
        }
      }
    }

    private function getTableWidth()
    {
      return $this->xDimensionAddressMax - $this->xDimensionAddressMin;
    }

    private function getTableHeight()
    {
      return $this->yDimensionAddressMax - $this->yDimensionAddressMin;
    }

    public function printSelf()
    {
      $tableHeight = $this->getTableHeight();
      $tableWidth = $this->getTableWidth();
      for ($y=0; $y<$tableHeight; $y++)
      {
        for($x=0; $x<$tableWidth; $x++)
        {
          $currentCell = $this->tableRows[$y][$x];
          $currentCell->printSelf();
        }
        echo "</br>";
      }
    }
  }



?>
