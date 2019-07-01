<?php
  /**
   *  This is the parent class that manages the default table cell item
   */
  class TableCell
  {
    public $IsColumnHeader = FALSE;
    private $cellContents = "EMPTY";

    // The default cell html settings
    protected $currentCellHTMLStartTag = "<td>";
    protected $currentCellHTMLEndTag = "</td>";

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

  class TableCellHeader extends TableCell
  {
    function __construct($newCellContents)
    {
      //Calls the parents constructor and passes the construct vars
      parent::__construct($newCellContents);
      //Updates all of the items that need to change from the parent item:
      //The Default table and row html settings.  Is overwritten in child classes
      $this->currentCellHTMLStartTag = "<th scope=\"col\">";
      $this->currentCellHTMLEndTag = "</th>";
    }
  }

  /**
   * This child class extendsd the table cells functionality to validate its contents in the database
   */
  class VerificationTableCellData extends TableCell
  {
    public $VerificationStatusClass = "validationTC_InValid";
    function __construct($newCellContents)
    {
      //Calls the parents constructor and passes the construct vars
      parent::__construct($newCellContents);

      //Updates all of the items that need to change from the parent item:
      //The Default table and row html settings.  Is overwritten in child classes
      $this->currentCellHTMLStartTag = "<td class=\"".$this->VerificationStatusClass."\">";
    }

    //Here is where the special Verification header cell methods go

  }

  /**
   * This child class extendsd the table cells functionality to validate its contents in the database
   */
  class VerificationTableCellHeader extends TableCellHeader
  {
    public $VerificationStatusClass = "validationTC_InValid";
    function __construct($newCellContents)
    {
      //Calls the parents constructor and passes the construct vars
      parent::__construct($newCellContents);
      //if ($this->isValidField())
      //  $this->currentCellHTMLStartTag = "<th scope=\"col\" class=\"validationTC_Valid\">";
      //else
      //  $this->currentCellHTMLStartTag = "<th scope=\"col\" class=\"validationTC_InValid\">";
      $this->currentCellHTMLStartTag = "<td class=\"".$this->VerificationStatusClass."\">";
    }

    public function validateSelf($twoDArrayToCompare)
    {
      foreach($twoDArrayToCompare as &$arrayToCompare)
      {
        foreach($arrayToCompare as &$field)
        {
          if ($this->cellContents == $field["field_name"])
            $VerificationStatusClass = "validationTC_Valid";
        }
      }
    }
    //Here is where the special Verification header cell methods go
  }



?>
