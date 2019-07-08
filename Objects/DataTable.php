<?php
  //Sub item is the table cell item
  include "Objects/TableCell.php";

  /**
   * This is the parent class object that stores and handles the generic table object
   */
  class DataTable
  {
    private $tableFileLocation = "UNKNOWN";

    //The Default table and row html settings.  Is overwritten in child classes
    protected $tableClassHTML = "<table class=\"table table-bordered table-dark\">";
    protected $tableRowHTML = "<tr>";

    protected $tableCellClassName = "TableCell";
    protected $tableCellHeaderClassName = "TableCellHeader";

    //Stored table width and height
    private $xDimensionAddressMin = 0;
    private $xDimensionAddressMax = 0;
    private $yDimensionAddressMin = 0;
    private $yDimensionAddressMax = 0;

    //2d Array to store all of the sheets text values
    protected $tableRows = array();

    function __construct($newMinXAddress, $newMaxXAddress, $newMinYAddress, $newMaxYAddress, $newTableFileLocation)
    {
      $this->tableFileLocation = $newTableFileLocation;

      $this->xDimensionAddressMin = $newMinXAddress;
      $this->xDimensionAddressMax = $newMaxXAddress;
      $this->yDimensionAddressMin = $newMinYAddress;
      $this->yDimensionAddressMax = $newMaxYAddress;

      $this->tableRows = array();
    }

    public function readInTable()
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
                  if (Count($this->tableRows) == 0) //If its the first row it prints the header cell
                  {
                    array_push($newRow, new $this->tableCellHeaderClassName($row[$currentCol]));
                  }
                  else
                  {
                    array_push($newRow, new $this->tableCellClassName($row[$currentCol]));  //Else it prints the regular cell item
                  }
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

      //Prints table Opening Line:
      echo $this->tableClassHTML;
      for ($y=0; $y<$tableHeight; $y++)
      {
        echo $this->tableRowHTML; // Echos this at the start of a new tables row
        for($x=0; $x<$tableWidth; $x++)
        {
          $currentCell = $this->tableRows[$y][$x];
          $currentCell->printSelf();
        }
        echo "</tr>"; // Prints the standard tag to close the row
      }
      echo "</table>"; // Prints the standard class to close the table
    }

    public function getHTMLElementString()
    {
      $toReturn = ""; // The html string return value
      $tableHeight = $this->getTableHeight();
      $tableWidth = $this->getTableWidth();

      //Prints table Opening Line:
      $toReturn = $toReturn.$this->tableClassHTML;
      for ($y=0; $y<$tableHeight; $y++)
      {
        $toReturn = $toReturn.$this->tableRowHTML; // Echos this at the start of a new tables row
        for($x=0; $x<$tableWidth; $x++)
        {
          $currentCell = $this->tableRows[$y][$x];
          $toReturn = $toReturn.$currentCell->getHTMLElementString();
        }
        $toReturn = $toReturn."</tr>"; // Prints the standard tag to close the row
      }
      $toReturn = $toReturn."</table>"; // Prints the standard class to close the table
      return $toReturn;
    }
  }

  // This table format will be used for initial data entry to validate the input for the
  // fields and field values
  class DataValidationTable extends DataTable
  {
    function __construct($newMinXAddress, $newMaxXAddress, $newMinYAddress, $newMaxYAddress, $newTableFileLocation)
    {
        //Calls the parents constructor and passes the construct vars
        parent::__construct($newMinXAddress, $newMaxXAddress, $newMinYAddress, $newMaxYAddress, $newTableFileLocation);

        //Updates all of the items that need to change from the parent item:
        //The Default table and row html settings.  Is overwritten in child classes
        $this->tableClassHTML = "<table class=\"table table-striped\">";
        $this->tableRowHTML = "<tr>";
        $this->tableCellClassName = "VerificationTableCellData";
        $this->tableCellHeaderClassName = "VerificationTableCellHeader";
    }

    public function validateCells($twoDArrayToCompare)
    {
      foreach ($this->tableRows as &$row) {
        foreach ($row as &$cell) {
          $cell->validateSelf($twoDArrayToCompare);
        }
      }
    }
  }



?>
