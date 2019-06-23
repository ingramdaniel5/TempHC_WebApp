<!-- Left Panel -->
<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">

        <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="./"><img src="Views/Styling/ImageAssets/hChoices-Logo_Small.png" alt="Logo"></a>
            <a class="navbar-brand hidden" href="./"><img src="Views/Styling/ImageAssets/CompanyIcon.png" alt="Logo"></a>
        </div>

        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li <?php if($activeMenuSelection == "Overview"){echo "class=\"active\"";} ?>>
                    <a href="index.php?dest=Dashboard"> <i class="menu-icon fa fa-dashboard"></i>Overview</a>
                </li>
                <h3 class="menu-title">Data Management</h3><!-- /.menu-title -->
                <li class="menu-item-has-children dropdown <?php if($activeMenuSelection == "InsertNewDataSet"){echo "active";} ?>">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Insert Data Set</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-table"></i><a href="index.php?dest=DataSheetInput">Excel/CSV</a></li>
                        <li><i class="fa fa-pencil"></i><a href="index.php?dest=ManualDataInput">Manual Data Entry</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children dropdown <?php if($activeMenuSelection == "ExportData"){echo "active";} ?>">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-external-link-square"></i>Export Data</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-th"></i><a href="index.php?dest=ExptExcel">Excel/CSV Report</a></li>
                        <li><i class="menu-icon fa fa-line-chart"></i><a href="index.php?dest=ExptChart">Chart Data</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children dropdown <?php if($activeMenuSelection == "Reports"){echo "active";} ?>">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-book"></i>Reports</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-folder-open-o"></i><a href="index.php?dest=MngReports">Manage Reports</a></li>
                        <li><i class="menu-icon fa fa-edit"></i><a href="index.php?dest=GenReports">Generate Reports</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children dropdown <?php if($activeMenuSelection == "ChartsGraphs"){echo "active";} ?>">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-bar-chart"></i>Charts/Graphs</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-folder-open-o"></i><a href="index.php?dest=MngChartsAndGraphs">Manage Charts/Graphs</a></li>
                        <li><i class="menu-icon fa fa-area-chart"></i><a href="index.php?dest=GenChartsAndGraphs">Generate Charts/Graphs</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside><!-- /#left-panel -->

<!-- Left Panel -->
