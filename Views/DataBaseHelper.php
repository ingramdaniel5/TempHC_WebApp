<?php
/**
 * Class to handle direct connections to the sql database only,  receives input from object classes,  W
 * NOTE  ONLY RETURNS AN ARRAY OF JSON OBJECTS
 */
class DataBaseHelper
{
  public static $defaultResponseMessage = "Warning!!! 0 results found";
  public static function handleDatabaseQueryTransaction($query)
  {
    $newDatabaseConnection = DataBaseHelper::connectToDatabase();
    if (!$newDatabaseConnection)
    {
      die("Connection failed: " .$newDatabaseConnection->mysqli_connect_error());
    }
    else
    {
      $resultOfQuery = DataBaseHelper::submitQueryAndHandleResponse($newDatabaseConnection, $query/*Query*/);
      DataBaseHelper::terminateConnection($newDatabaseConnection);
      return $resultOfQuery;
    }
  }

  public static function handleDatabaseMultiQueryTransaction($query)
  {
    //var_dump($query);
    $newDatabaseConnection = DataBaseHelper::connectToDatabase();
    if (!$newDatabaseConnection)
    {
      die("Connection failed: " .$newDatabaseConnection->mysqli_connect_error());
    }
    else
    {
      $resultsOfQuery = array();
      $count = count($query);
      for ($x=0; $x<$count; $x++)
      {
        array_push($resultsOfQuery, DataBaseHelper::submitQueryAndHandleResponse($newDatabaseConnection, $query[$x]));
      }
      DataBaseHelper::terminateConnection($newDatabaseConnection);
      return $resultsOfQuery;
    }
  }

  private static function connectToDatabase()
  {
    //Credentials specific to the server, user, and database
    /*
    $servername = "127.0.0.1";
    $username = "root";
    $password = "DanIsMast";
    $databaseName = "wannabehere";
    */
    $servername = "wannabeheretestdb.chcmufkw63dp.us-east-2.rds.amazonaws.com";
    $username = "DevsAtGremlinAps";
    $password = "DevsAtGremlinAps";
    $databaseName = "WannaBeHereTestDB";
    // Create connection
    $conn = new mysqli($servername, $username, $password, $databaseName);
    // Check connection
    if ($conn->connect_error)
    {
      die("Connection attempt failed to ".$databaseConnection->host_info.": " . $conn->connect_error);
    }
    else
    {
      //echo "connected to ".$conn->host_info."</br>";
      return $conn;
    }
  }
  private static function submitQueryAndHandleResponse($databaseConnection, $query)
  {
      //echo "Query is: ".$query."</br></br>";
      if ($databaseConnection->connect_error)
      {
        die("Connection has failed to ".$databaseConnection->host_info.":". $databaseConnection->connect_error);
      }
      else
      {
        $formattedResult = array();
        $resultOfQuery = $databaseConnection->query($query);
        if ($resultOfQuery === TRUE || $resultOfQuery === FALSE)
        {
          array_push($formattedResult, json_encode($resultOfQuery));
          if ($databaseConnection->insert_id != null)
          {
            array_push($formattedResult, json_encode(DataBaseHelper::steralizeString($databaseConnection->insert_id)));
          }
          if (($databaseConnection->affected_rows) > 0 && ($databaseConnection->affected_rows != null))
          {
            array_push($formattedResult, json_encode(DataBaseHelper::steralizeString($databaseConnection->affected_rows)));
          }
        }
        else
        {
          if ($resultOfQuery->num_rows > 0)
          {
              // output data of each row
              while($row = $resultOfQuery->fetch_assoc())
              {
                  //echo json_encode($row)."</br></br>";
                  array_push($formattedResult, $row);
              }
          }
          else
          {
            //echo "0 results";
            array_push($formattedResult, DataBaseHelper::$defaultResponseMessage);
          }
        }
        return $formattedResult;
      }
  }
  private static function terminateConnection($databaseConnection)
  {
    if ($databaseConnection->connect_error)
    {
      die("Connection has failed to ".$databaseConnection->host_info.":". $databaseConnection->connect_error);
    }
    else
    {
      $databaseConnection->close();
    }
  }

  public static function getItemCount($table, $whereParameterColumn, $whereParameterValue)//$whereParameter can be an array if multiple count parameters are to be passed.
  {
    $qString = "SELECT Count(`id`) AS `total_found` FROM `".$table."` WHERE ";
    if ($whereParameterColumn != null && $whereParameterValue != null)
    {
      if (is_array($whereParameterColumn) && is_array($whereParameterValue))
      {
        $count = count($whereParameterColumn);
        for ($x=0; $x<$count; $x++)
        {
            $qString = $qString."`".$whereParameterColumn[$x]."` = ".$whereParameterValue[$x];
        }
      }
      else
      {
        $qString = $qString."`".$whereParameterColumn."` = ".$whereParameterValue;
      }
    }
    $qString = $qString." AND WHERE `is_hidden` = 0";
    $response = DataBaseHelper::handleDatabaseQueryTransaction($qString);
    return $response[0];
  }
  public static function permaDeleteItem($itemID, $desiredTable)
  {
    $qString = "DELETE FROM `WannaBeHereTestDB`.`".$desiredTable."` WHERE  `id`=".$itemID;
    //echo 'Sending: '.$qString;
    //var_dump($qString);
    $response = DataBaseHelper::handleDatabaseQueryTransaction($qString);
    //echo "Response: \n\r";
    //var_dump($response);
    return $response;
  }

  public static function hideObject($objectID, $tableLocation)//default message to hide an object by id and table
  {
    $qString = "UPDATE `".$tableLocation."` SET `is_hidden` = '1' WHERE (`id`) IN(";
    if (is_array($objectID))
    {
      $count = count($objectID);
      for ($x=0; $x<$count; $x++)
      {
          $qString = $qString.$objectID[$x].",";
      }
      $qString = substr($qString, 0, -1);//Removes last items comma
    }
    else
    {
      $qString = $qString.$objectID;
    }
    $qString = $qString.");";
    $response = DataBaseHelper::handleDatabaseQueryTransaction($qString);
    return $response;
  }

  public static function recoverObject($objectID, $tableLocation)//default message to hide an object by id and table
  {
    $qString = "UPDATE `".$tableLocation."` SET `is_hidden` = '0' WHERE (`id`) IN(";
    if (is_array($objectID))
    {
      $count = count($objectID);
      for ($x=0; $x<$count; $x++)
      {
          $qString = $qString.$objectID[$x].",";
      }
      $qString = substr($qString, 0, -1);//Removes last items comma
    }
    else
    {
      $qString = $qString.$objectID;
    }
    $qString = $qString.");";
    $response = DataBaseHelper::handleDatabaseQueryTransaction($qString);
    return $response;
  }
  //String for hiding an object UPDATE `user` SET `is_hidden` = '1' WHERE `user`.`id` = 1;

  public static function steralizeString($input)
  {
    return authenticationStation::encryptData($input);
  }
}
?>
