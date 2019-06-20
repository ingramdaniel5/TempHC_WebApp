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
$activeMenuSelection = "Overview";
include 'Views/StandardViewComponents/SideNavigationBar.php';
?>

<body>
<?php
  $ContentPortalHeader = "Main Application Overview";
  $ContentPortalSubHeader = "Dashboard";
  include 'Views/StandardViewComponents/ContentWindowHeader.php'
?>

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

<?php include 'Views/StandardViewComponents/StandardPageFooter.php' ?>

</body>

</html>
