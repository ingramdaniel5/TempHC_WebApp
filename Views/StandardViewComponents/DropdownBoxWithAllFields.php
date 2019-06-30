<select name="ParentField" id="" class="form-control form-control">
    <option value="UNSELECTED_PARENT">Please select</option>
    <?php
    //Disclaimer!!! only here for first revision. Plan on class design for all components
    //Determining what value is saved in the db is done by combining the object id as well as the table name
    if ($CurrentTextFields[0] != DataBaseHelper::$defaultResponseMessage)
    {
      foreach($CurrentTextFields as &$textField)
      {
        echo "<option value=\"text_field".$textField["id"]."\">".$textField["field_name"]."</option>";
      }
    }
    if ($CurrentNumericFields[0] != DataBaseHelper::$defaultResponseMessage)
    {
      foreach($CurrentNumericFields as &$numField)
      {
        echo "<option value=\"numeric_field".$numField["id"]."\">".$numField["field_name"]."</option>";
      }
    }
    if ($CurrentStandardFields[0] != DataBaseHelper::$defaultResponseMessage)
    {
      foreach($CurrentStandardFields as &$standField)
      {
        echo "<option value=\"standardized_field".$standField["id"]."\">".$standField["field_name"]."</option>";
      }
    }
    ?>
</select>
