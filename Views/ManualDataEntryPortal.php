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
$activeMenuSelection = "ManualDataInput";
include 'Views/StandardViewComponents/SideNavigationBar.php';
?>

<body>
<?php
  $ContentPortalHeader = "Manual Data Entry";
  $ContentPortalSubHeader = "";
  include 'Views/StandardViewComponents/ContentWindowHeader.php';
?>
<?php
//Script handles possible incoming post data upon a page's form being submitted:
include 'Program_API/HandlePostFormRequests.php';
 ?>
        <!-- start of page main content -->
        <div class="content mt-3">
          <div class="animated fadeIn"><!-- fades in main page content -->
            <div class="row"><!-- Row, Contains the file selection options -->



              <div class="col-lg-6"><!-- Outer Card Seperation div -->
                <div class="card"><!-- Start of card -->
                  <div class="card-header"> <!-- card header -->
                      <strong>Add New Field:</strong>
                  </div>
                  <form action="index.php?dest=ManualDataInput&GenerateNewField=1"  method="post"> <!-- start of the card's content's form object -->
                    <div class="card-body card-block"> <!-- card body -->
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class="form-control-label">Field Name</label></div>
                            <div class="col-12 col-md-9"><input type="form-control-lg" id="text-input" name="FieldName" autocomplete="off" placeholder="" class="form-control"><small class="form-text text-muted">Please capatilize the first letter of each word and use full and proper spelling</small></div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="selectLg" class=" form-control-label">Field Type</label></div>
                            <div class="col-12 col-md-9">
                                <select name="FieldType" id="" class="form-control form-control">
                                    <option value="UNSELECTED_TYPE">Please select</option>
                                    <option value="text_field">Text Field</option>
                                    <option value="numeric_field">Numerical Field</option>
                                    <option value="standardized_field">Standardized Field</option>
                                </select>
                            </div>
                        </div>

                    </div>
                    <div class="card-footer"> <!-- card footer -->
                      <button type="submit" class="btn btn-primary">
                          <i class="fa fa-dot-circle-o"></i> Submit
                      </button>
                      <button type="reset" class="btn btn-danger">
                          <i class="fa fa-ban"></i> Reset
                      </button>
                    </div><!-- End of card footer -->
                  </div> <!-- End of card -->
                </form>
              </div> <!-- End of Outer Card Seperation div -->



              <div class="col-lg-6"><!-- Outer Card Seperation div -->
                <div class="card"><!-- Start of card -->
                  <div class="card-header"> <!-- card header -->
                      <strong>Add New Field Abbreviation:</strong>
                  </div>
                  <form action="index.php?dest=ManualDataInput&GenerateNewAbbreviation=1"  method="post"> <!-- start of the card's content's form object -->
                    <div class="card-body card-block"> <!-- card body -->
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class="form-control-label">Abbreviation Name</label></div>
                            <div class="col-12 col-md-9"><input type="form-control-lg" id="text-input" name="FieldAbbreviationName" autocomplete="off" placeholder="" class="form-control"><small class="form-text text-muted">Please capatilize the first letter of each word and use full and proper spelling</small></div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="selectLg" class=" form-control-label">Abbreviated Field</label></div>
                            <div class="col-12 col-md-9">
                                    <?php
                                    //This inclusion expects there to be 3 arrays of all the field types in existance
                                    include 'Views/StandardViewComponents/DropDownListGetters/DropdownBoxWithAllFields.php';
                                    ?>
                            </div>
                        </div>

                    </div>
                    <div class="card-footer"> <!-- card footer -->
                      <button type="submit" class="btn btn-primary">
                          <i class="fa fa-dot-circle-o"></i> Submit
                      </button>
                      <button type="reset" class="btn btn-danger">
                          <i class="fa fa-ban"></i> Reset
                      </button>
                    </div>
                  </div> <!-- End of card -->
                </form>
              </div> <!-- End of Outer Card Seperation div -->

              <div class="col-lg-6"><!-- Outer Card Seperation div -->
                <div class="card"><!-- Start of card -->
                  <div class="card-header"> <!-- card header -->
                      <strong>Add New Standardized Field Option:</strong>
                  </div>
                  <form action="index.php?dest=ManualDataInput&GenerateNewAbbreviation=1"  method="post"> <!-- start of the card's content's form object -->
                    <div class="card-body card-block"> <!-- card body -->
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class="form-control-label">New Field Option Name</label></div>
                            <div class="col-12 col-md-9"><input type="form-control-lg" id="text-input" name="FieldAbbreviationName" autocomplete="off" placeholder="" class="form-control"><small class="form-text text-muted">Please capatilize the first letter of each word and use full and proper spelling</small></div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="selectLg" class=" form-control-label">Standardized Field</label></div>
                            <div class="col-12 col-md-9">
                                    <?php
                                    //This inclusion expects there to be 3 arrays of all the field types in existance
                                    include 'Views/StandardViewComponents/DropDownListGetters/DropdownBoxWithAllStandarizedFieldOptions.php';
                                    ?>
                            </div>
                        </div>

                    </div>
                    <div class="card-footer"> <!-- card footer -->
                      <button type="submit" class="btn btn-primary">
                          <i class="fa fa-dot-circle-o"></i> Submit
                      </button>
                      <button type="reset" class="btn btn-danger">
                          <i class="fa fa-ban"></i> Reset
                      </button>
                    </div>
                  </div> <!-- End of card -->
                </form>
              </div> <!-- End of Outer Card Seperation div -->

              <div class="col-lg-6"><!-- Outer Card Seperation div -->
                <div class="card"><!-- Start of card -->
                  <div class="card-header"> <!-- card header -->
                      <strong>Add New Standardized Field Option Abbreviation:</strong>
                  </div>
                  <form action="index.php?dest=ManualDataInput&GenerateNewAbbreviation=1"  method="post"> <!-- start of the card's content's form object -->
                    <div class="card-body card-block"> <!-- card body -->
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class="form-control-label">Abbreviation Name</label></div>
                            <div class="col-12 col-md-9"><input type="form-control-lg" id="text-input" name="FieldAbbreviationName" autocomplete="off" placeholder="" class="form-control"><small class="form-text text-muted">Please capatilize the first letter of each word and use full and proper spelling</small></div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="selectLg" class=" form-control-label">Standardized Field</label></div>
                            <div class="col-12 col-md-9">
                                    <?php
                                    //This inclusion expects there to be 3 arrays of all the field types in existance
                                    include 'Views/StandardViewComponents/DropDownListGetters/DropdownBoxWithAllStandarizedFieldOptions.php';
                                    ?>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="selectLg" class=" form-control-label">Standardized Field Option</label></div>
                            <div class="col-12 col-md-9">
                                    <?php
                                    //This inclusion expects there to be 3 arrays of all the field types in existance
                                    include 'Views/StandardViewComponents/DropDownListGetters/DropdownBoxWithAllStandarizedFieldOptions.php';
                                    ?>
                            </div>
                        </div>

                    </div>
                    <div class="card-footer"> <!-- card footer -->
                      <button type="submit" class="btn btn-primary">
                          <i class="fa fa-dot-circle-o"></i> Submit
                      </button>
                      <button type="reset" class="btn btn-danger">
                          <i class="fa fa-ban"></i> Reset
                      </button>
                    </div>
                  </div> <!-- End of card -->
                </form>
              </div> <!-- End of Outer Card Seperation div -->

            </div> <!-- End of current Row-->
          </div>
        </div><!-- end of div that fades in main page content -->
      </div> <!-- end of page main content -->
<?php include 'Views/StandardViewComponents/StandardPageFooter.php' ?>
  </body>
</html>
