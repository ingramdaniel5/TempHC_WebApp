<?php
  /**
   *  This is the class that manages the individual table cells
   */
  class TableCell
  {
    private $cellContents = "EMPTY";

    function __construct($newCellContents)
    {
      if (trim($newCellContents) != "")
      {
          $this->cellContents = $newCellContents;
      }
    }
    //Simple getter and setter methods
    public function get_Contents(){return $this->cellContents;}
    public function update_Contents($newContents){$this->cellContents = $newContents;}
    public function printSelf(){echo $this->cellContents;}
  }


?>
