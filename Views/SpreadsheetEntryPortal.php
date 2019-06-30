<?php
/* //For spreadsheet input testing
  include 'Objects/InputSpreadSheet.php';
  $newInputSpreadsheet = new InputSpreadSheet('Assets/ProjectSampleData/SampleInputOne.csv');
  $newInputSpreadsheet->findSpreadSheetTables();
  $newInputSpreadsheet->printCurrentSpreadSheetData();
*/
/* //For spreadsheet input testing
  $testDataTableCSV = new DataTable(0,19,0,30, 'Assets/SampleData/SampleInputOne.csv');
  $testDataTableCSV->printSelf();
  echo "</br></br>";
  $testDataTableEXCEL = new DataTable(0,19,0,30, 'Assets/SampleData/SampleInputOne.xlsx');
  $testDataTableEXCEL->printSelf();
*/
?>

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->
<?php
//Includes the standardized application page header
include 'Views/StandardViewComponents/StandardPageHeader.php';

//Includes dashboard and sets active icon to dashboard icon
$activeMenuSelection = "InsertNewDataSet";
include 'Views/StandardViewComponents/SideNavigationBar.php';

include 'Assets/CustomProjectAssets.php';

//Gets the class that handles query management to the db
include 'Controllers/DataBaseHelper.php';

//Gets all the different DB items
include 'Objects/DatabaseItems.php';

//Gets all of the existing fields and Abbreviations
include 'Program_API/GetAllFields.php';
include 'Program_API/GetAllFieldAbbreviations.php';

include 'Objects/InputSpreadSheet.php';
?>

<body>
<?php
  $ContentPortalHeader = "Insert New Data Set";
  $ContentPortalSubHeader = "Import Data";
  include 'Views/StandardViewComponents/ContentWindowHeader.php'
?>

        <!-- start of page main content -->
        <div class="content mt-3">
          <div class="animated fadeIn"><!-- fades in main page content -->
            <div class="row"><!-- Row, Contains the file selection options -->


              <div class="col-lg-6"><!-- Outer Card Seperation div -->
                <div class="card"><!-- Start of card -->
                  <div class="card-header">
                      <strong>Import File:</strong>
                  </div>
                  <div class="card-body card-block">
                      <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                          <div class="row form-group">
                              <div class="col col-md-3"><label for="file-input" class=" form-control-label">File Input</label></div>
                              <div class="col-9 col-md-9"><input type="file" id="file-input" name="file-input" class="form-control-file"></div>
                            </div>
                      </form>
                  </div>
                </div> <!-- End of card -->
              </div> <!-- End of Outer Card Seperation div -->


              <div class="col-lg-6"><!-- Outer Card Seperation div -->
                <div class="card"><!-- Start of card -->
                  <div class="card-header">
                      <strong>Import Folder:</strong>
                  </div>
                  <div class="card-body card-block">
                      <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                          <div class="row form-group">
                              <div class="col col-md-3"><label for="file-multiple-input" class=" form-control-label">Multiple File Input</label></div>
                              <div class="col-9 col-md-9"><input type="file" id="file-multiple-input" name="file-multiple-input" multiple="" class="form-control-file"></div>
                          </div>
                      </form>
                  </div>
                </div> <!-- End of card -->
              </div> <!-- End of Outer Card Seperation div -->

            </div> <!-- End of current Row-->

            <div class="row"><!-- Contains the tables found on the selected graph -->
              <?php
               //For spreadsheet input testing
                $newInputSpreadsheet = new ValidationInputSpreadsheet('Assets/ProjectSampleData/SampleInputTwoMultipleTables.csv', $CurrentTextFields, $CurrentNumericFields, $CurrentStandardFields, $CurrentTextFieldAbbreviations, $CurrentNumericFieldAbbreviations, $CurrentStandardFieldAbbreviations);
                //$newInputSpreadsheet = new InputSpreadSheet('Assets/ProjectSampleData/SampleInputOne.csv');
                $newInputSpreadsheet->findSpreadSheetTables();
                //$newInputSpreadsheet->printCurrentSpreadSheetData();
                $foundTablesHTMLStrings = $newInputSpreadsheet->getAllSpreadSheetTableHTMLStrings();
                //Here is where the found tables are printed for the user
                for ($x=0;$x<Count($foundTablesHTMLStrings); $x++)
                {
                  $currentTableHTMLString = $foundTablesHTMLStrings[$x];
                  include 'Views/StandardViewComponents/ValidationTableCard.php';
                }
              ?>
              </div> <!-- End of current Row-->
            </div>
          </div><!-- end of div that fades in main page content -->
        </div> <!-- end of page main content -->

<?php include 'Views/StandardViewComponents/StandardPageFooter.php' ?>

</body>

</html>
