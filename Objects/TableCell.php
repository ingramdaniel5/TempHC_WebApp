<?php
  /**
   *  This is the parent class that manages the default table cell item
   */
  class TableCell
  {
    public $IsColumnHeader = FALSE;
    private $cellContents = "EMPTY";

    // The default cell html settings
    private $currentCellHTMLStartTag = "<td>";
    private $currentCellHTMLEndTag = "</td>";

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

    public function printSelf()//Prints all of the html components of the current configured cell
    {
      echo $this->currentCellHTMLStartTag;
      echo $this->cellContents;
      echo $this->currentCellHTMLEndTag;
    }

    // Does the same thing as print self just returns the string instead of echoing it
    public function getHTMLElementString()
    {
      return $this->currentCellHTMLStartTag.$this->cellContents.$this->currentCellHTMLEndTag;
    }
  }

  /**
   * This child class extendsd the table cells functionality to validate its contents in the database
   */
  class VerificationTableCellData extends TableCell
  {

  }

  /**
   * This child class extendsd the table cells functionality to validate its contents in the database
   */
  class VerificationTableCellHeader extends TableCell
  {

  }



?>
