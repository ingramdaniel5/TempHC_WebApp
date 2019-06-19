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
$activeMenuSelection = "Dashboard";
include 'Views/StandardViewComponents/SideNavigationBar.php';
?>

<body>
    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
        <!-- Header-->
        <header id="header" class="header">
            <div class="header-menu">
                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>
                        <div class="dropdown for-notification">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-bell"></i>
                                <span class="count bg-danger">5</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="notification">
                                <p class="red">You have 3 Notification</p>
                                <a class="dropdown-item media bg-flat-color-1" href="#">
                                <i class="fa fa-check"></i>
                                <p>Server #1 overloaded.</p>
                            </a>
                                <a class="dropdown-item media bg-flat-color-4" href="#">
                                <i class="fa fa-info"></i>
                                <p>Server #2 overloaded.</p>
                            </a>
                                <a class="dropdown-item media bg-flat-color-5" href="#">
                                <i class="fa fa-warning"></i>
                                <p>Server #3 overloaded.</p>
                            </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header><!-- /header -->
        <!-- Header-->
        <!-- Main Page Content Header -->
        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Main Application Overview</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">Dashboard</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Content Header -->






        <!-- start of page main content -->
        <div class="content mt-3">
        <!-- Total Students Stored Card -->
          <div class="col-sm-6 col-lg-3">
              <div class="card text-white bg-flat-color-1">
                  <div class="card-body pb-0">
                      <div class="dropdown float-right">
                          <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton1" data-toggle="dropdown">
                              <i class="fa fa-cog"></i>
                          </button>
                          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                              <div class="dropdown-menu-content">
                                  <a class="dropdown-item" href="#">Action</a>
                                  <a class="dropdown-item" href="#">Another action</a>
                                  <a class="dropdown-item" href="#">Something else here</a>
                              </div>
                          </div>
                      </div>
                      <h4 class="mb-0">
                          <span class="count">0</span>
                      </h4>
                      <p class="text-light">Students</p>
                      <div class="chart-wrapper px-0" style="height:70px;" height="70">
                          <canvas id="widgetChart1"></canvas>
                      </div>
                  </div>
              </div>
          </div>
          <!-- end of Students Stored Card -->


          <!-- Total Records Stored Card -->
          <div class="col-sm-6 col-lg-3">
              <div class="card text-white bg-flat-color-2">
                  <div class="card-body pb-0">
                      <div class="dropdown float-right">
                          <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton3" data-toggle="dropdown">
                              <i class="fa fa-cog"></i>
                          </button>
                          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
                              <div class="dropdown-menu-content">
                                  <a class="dropdown-item" href="#">Action</a>
                                  <a class="dropdown-item" href="#">Another action</a>
                                  <a class="dropdown-item" href="#">Something else here</a>
                              </div>
                          </div>
                      </div>
                      <h4 class="mb-0">
                          <span class="count">0</span>
                      </h4>
                      <p class="text-light">Total Field Values Stored</p>
                  </div>
                  <div class="chart-wrapper px-0" style="height:70px;" height="70">
                      <canvas id="widgetChart1"></canvas>
                  </div>
              </div>
          </div>
          <!-- end of Total Records Stored Card  -->

          <!-- Total Schools Stored Card -->
          <div class="col-sm-6 col-lg-3">
              <div class="card text-white bg-flat-color-3">
                  <div class="card-body pb-0">
                      <div class="dropdown float-right">
                          <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton3" data-toggle="dropdown">
                              <i class="fa fa-cog"></i>
                          </button>
                          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
                              <div class="dropdown-menu-content">
                                  <a class="dropdown-item" href="#">Action</a>
                                  <a class="dropdown-item" href="#">Another action</a>
                                  <a class="dropdown-item" href="#">Something else here</a>
                              </div>
                          </div>
                      </div>
                      <h4 class="mb-0">
                          <span class="count">0</span>
                      </h4>
                      <p class="text-light">Schools</p>
                  </div>
                  <div class="chart-wrapper px-0" style="height:70px;" height="70">
                      <canvas id="widgetChart1"></canvas>
                  </div>
              </div>
          </div>
          <!-- end of Total Records Stored Card  -->

          <!-- Total States stored Card -->
          <div class="col-sm-6 col-lg-3">
              <div class="card text-white bg-flat-color-4">
                  <div class="card-body pb-0">
                      <div class="dropdown float-right">
                          <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton3" data-toggle="dropdown">
                              <i class="fa fa-cog"></i>
                          </button>
                          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
                              <div class="dropdown-menu-content">
                                  <a class="dropdown-item" href="#">Action</a>
                                  <a class="dropdown-item" href="#">Another action</a>
                                  <a class="dropdown-item" href="#">Something else here</a>
                              </div>
                          </div>
                      </div>
                      <h4 class="mb-0">
                          <span class="count">0</span>
                      </h4>
                      <p class="text-light">Total Field Values Stored</p>
                  </div>
                  <div class="chart-wrapper px-0" style="height:70px;" height="70">
                      <canvas id="widgetChart1"></canvas>
                  </div>
              </div>
          </div>
          <!-- end of Total States Stored Card  -->

        </div> <!-- end of page main content -->

    </div><!-- end of right-panel -->






    <script src="Assets/TemplateVendorAssets/jquery/dist/jquery.min.js"></script>
    <script src="Assets/TemplateVendorAssets/popper.js/dist/umd/popper.min.js"></script>
    <script src="Assets/TemplateVendorAssets/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="Assets/TemplateAssets/js/main.js"></script>


    <script src="Assets/TemplateVendorAssets/chart.js/dist/Chart.bundle.min.js"></script>
    <script src="Assets/TemplateAssets/js/dashboard.js"></script>
    <script src="Assets/TemplateAssets/js/widgets.js"></script>
    <script src="Assets/TemplateVendorAssets/jqvmap/dist/jquery.vmap.min.js"></script>
    <script src="Assets/TemplateVendorAssets/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <script src="Assets/TemplateVendorAssets/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script>
        (function($) {
            "use strict";

            jQuery('#vmap').vectorMap({
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: ['#1de9b6', '#03a9f5'],
                normalizeFunction: 'polynomial'
            });
        })(jQuery);
    </script>

</body>

</html>
