<select name="ParentField" id="" class="form-control form-control">
    <option value="UNSELECTED_PARENT">Please Select</option>
    <?php
    //Disclaimer!!! only here for first revision. Plan on class design for all components
    //Determining what value is saved in the db is done by combining the object id as well as the table name
    if ($CurrentStandardFields[0] != DataBaseHelper::$defaultResponseMessage)
    {
      foreach($CurrentStandardFields as &$standField)
      {
        echo "<option value=\"standardized_field".$standField["id"]."\">".$standField["field_name"]."</option>";
      }
    }
    ?>
</select>
