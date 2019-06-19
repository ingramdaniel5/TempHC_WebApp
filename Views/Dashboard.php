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

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sufee Admin - HTML5 Admin Template</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="Assets/TemplateVendorAssets/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="Assets/TemplateVendorAssets/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="Assets/TemplateVendorAssets/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="Assets/TemplateVendorAssets/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="Assets/TemplateVendorAssets/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="Assets/TemplateVendorAssets/jqvmap/dist/jqvmap.min.css">


    <link rel="stylesheet" href="Assets/TemplateAssets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

</head>

<body>







    <!-- Left Panel -->
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./"><img src="Views/Styling/ImageAssets/hChoices-Logo_Small.png" alt="Logo"></a>
                <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="index.html"> <i class="menu-icon fa fa-dashboard"></i>Dashboard</a>
                    </li>
                    <h3 class="menu-title">Data Management</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Insert New Data Set</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-table"></i><a href="tables-basic.html">Excel/CSV</a></li>
                            <li><i class="fa fa-pencil"></i><a href="tables-data.html">Manual Data Entry</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-external-link-square"></i>Export Data</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-th"></i><a href="forms-basic.html">Excel/CSV Report</a></li>
                            <li><i class="menu-icon fa fa-line-chart"></i><a href="forms-advanced.html">Chart Data</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-book"></i>Reports</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-folder-open-o"></i><a href="charts-chartjs.html">Manage Reports</a></li>
                            <li><i class="menu-icon fa fa-edit"></i><a href="charts-flot.html">Generate Reports</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-bar-chart"></i>Charts/Graphs</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-folder-open-o"></i><a href="charts-chartjs.html">Manage Charts/Graphs</a></li>
                            <li><i class="menu-icon fa fa-area-chart"></i><a href="charts-flot.html">Generate Charts/Graphs</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->





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
