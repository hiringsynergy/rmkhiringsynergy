<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />
    <title>Student Interaction - Ace Admin</title>

    <meta name="description" content="overview &amp; stats" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

    <!-- bootstrap & fontawesome -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/font-awesome/4.5.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="assets/css/jquery-ui.min.css" />
    <link rel="stylesheet" href="assets/css/jquery-ui.custom.min.css" />
    <link rel="stylesheet" href="assets/css/jquery.mobile-1.4.5.min.css" />
    <link rel="stylesheet" href="assets/jquery.mobile-1.4.4.css" />
    <link rel="stylesheet" href="assets/jquery.mobile-1.4.4.min.css" />
    <link rel="stylesheet" href="assets/jquery.mobile.external-png-1.4.4.css" />
    <link rel="stylesheet" href="assets/jquery.mobile.external-png-1.4.4.min.css" />
    <link rel="stylesheet" href="assets/jquery.mobile.icons-1.4.4.css" />
    <link rel="stylesheet" href="assets/jquery.mobile.icons-1.4.4.min.css" />
    <link rel="stylesheet" href="assets/jquery.mobile.inline-png-1.4.4.css" />
    <link rel="stylesheet" href="assets/jquery.mobile.inline-png-1.4.4.min.css" />
    <link rel="stylesheet" href="assets/jquery.mobile.inline-svg-1.4.4.css" />
    <link rel="stylesheet" href="assets/jquery.mobile.inline-svg-1.4.4.min.css" />
    <link rel="stylesheet" href="assets/jquery.mobile.structure-1.4.4.css" />
    <link rel="stylesheet" href="assets/jquery.mobile.structure-1.4.4.min.css" />
    <link rel="stylesheet" href="assets/jquery.mobile.theme-1.4.4.css" />
    <link rel="stylesheet" href="assets/jquery.mobile.theme-1.4.4.min.css" />
    <link rel="stylesheet" href="assets/jquery-ui.css" />


    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


    <!--button-navigation-->
    <script type="text/javascript">
        function myfuncreport() {
            location.href = "reports.php";

        }




var mouseDown = false

$("#rangevalue").mousedown(function() {
    mouseDown = true;
    updateSlider()
});

$("#rangevalue").mouseup(function() {
    mouseDown = false;
});

function updateSlider(){
    if(mouseDown){
        $("#text").text($("#rangevalue").val());
        setTimeout(updateSlider, 50);
    }
}
        function myfuncadmin() {
            location.href = "admin_panel/admin_panel.php";

        }
        function myfuncjobs() {
            location.href = "jobs/jobs_panel.php";

        }
        function myfuncsettings() {
            location.href = "settings.php";

        }



    </script>





    <!-- page specific plugin styles -->
		<link rel="stylesheet" href="assets/css/jquery-ui.custom.min.css" />
		<link rel="stylesheet" href="assets/css/select2.min.css" />
		<link rel="stylesheet" href="assets/css/chosen.min.css" />
		<link rel="stylesheet" href="assets/css/bootstrap-datepicker3.min.css" />
		<link rel="stylesheet" href="assets/css/bootstrap-timepicker.min.css" />
		<link rel="stylesheet" href="assets/css/daterangepicker.min.css" />
		<link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css" />
		<link rel="stylesheet" href="assets/css/bootstrap-colorpicker.min.css" />
		<link rel="stylesheet" href="assets/js/date-time/moment.min.js" />
		<link rel="stylesheet" href="assets/js/date-time/bootstrap-datetimepicker.min.js" />


    <!-- text fonts -->
    <link rel="stylesheet" href="assets/css/fonts.googleapis.com.css" />

    <!-- ace styles -->
    <link rel="stylesheet" href="assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

    <!--[if lte IE 9]>
    <link rel="stylesheet" href="assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
    <![endif]-->
    <link rel="stylesheet" href="assets/css/ace-skins.min.css" />
    <link rel="stylesheet" href="assets/css/ace-rtl.min.css" />

    <!--[if lte IE 9]>
    <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
    <![endif]-->

    <!-- inline styles related to this page -->

    <!-- ace settings handler -->
    <script src="assets/js/ace-extra.min.js"></script>

    <!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

    <!--[if lte IE 8]>
    <script src="assets/js/html5shiv.min.js"></script>
    <script src="assets/js/respond.min.js"></script>
    <script src="assets/js/jquery-1.11.3.min.js"></script>
    <script src="assets/js/jquery.mobile.custom.min.js"></script>
    <script src="assets/js/jquery.mobile-1.4.5.min.js"></script>
    <script src="assets/jquery.mobile-1.4.4.js"></script>
    <script src="assets/jquery.mobile-1.4.4.min.js"></script>
    <![endif]-->
</head>

<body class="no-skin">
<div id="navbar" class="navbar navbar-default          ace-save-state">
    <div class="navbar-container ace-save-state" id="navbar-container">
        <button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
            <span class="sr-only">Toggle sidebar</span>

            <span class="icon-bar"></span>

            <span class="icon-bar"></span>

            <span class="icon-bar"></span>
        </button>

        <div class="navbar-header pull-left">
            <a href="index.html" class="navbar-brand">
                <small>
                    <i class="fa fa-leaf"></i>
                    Ace Admin
                </small>
            </a>
        </div>

        <div class="navbar-buttons navbar-header pull-right" role="navigation">
            <ul class="nav ace-nav">
                <li class="grey dropdown-modal">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <i class="ace-icon fa fa-tasks"></i>
                        <span class="badge badge-grey">4</span>
                    </a>

                    <ul class="dropdown-menu-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
                        <li class="dropdown-header">
                            <i class="ace-icon fa fa-check"></i>
                            4 Tasks to complete
                        </li>

                        <li class="dropdown-content">
                            <ul class="dropdown-menu dropdown-navbar">
                                <li>
                                    <a href="#">
                                        <div class="clearfix">
                                            <span class="pull-left">Software Update</span>
                                            <span class="pull-right">65%</span>
                                        </div>

                                        <div class="progress progress-mini">
                                            <div style="width:65%" class="progress-bar"></div>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <div class="clearfix">
                                            <span class="pull-left">Hardware Upgrade</span>
                                            <span class="pull-right">35%</span>
                                        </div>

                                        <div class="progress progress-mini">
                                            <div style="width:35%" class="progress-bar progress-bar-danger"></div>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <div class="clearfix">
                                            <span class="pull-left">Unit Testing</span>
                                            <span class="pull-right">15%</span>
                                        </div>

                                        <div class="progress progress-mini">
                                            <div style="width:15%" class="progress-bar progress-bar-warning"></div>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <div class="clearfix">
                                            <span class="pull-left">Bug Fixes</span>
                                            <span class="pull-right">90%</span>
                                        </div>

                                        <div class="progress progress-mini progress-striped active">
                                            <div style="width:90%" class="progress-bar progress-bar-success"></div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="dropdown-footer">
                            <a href="#">
                                See tasks with details
                                <i class="ace-icon fa fa-arrow-right"></i>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="purple dropdown-modal">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <i class="ace-icon fa fa-bell icon-animated-bell"></i>
                        <span class="badge badge-important">8</span>
                    </a>

                    <ul class="dropdown-menu-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-close">
                        <li class="dropdown-header">
                            <i class="ace-icon fa fa-exclamation-triangle"></i>
                            8 Notifications
                        </li>

                        <li class="dropdown-content">
                            <ul class="dropdown-menu dropdown-navbar navbar-pink">
                                <li>
                                    <a href="#">
                                        <div class="clearfix">
													<span class="pull-left">
														<i class="btn btn-xs no-hover btn-pink fa fa-comment"></i>
														New Comments
													</span>
                                            <span class="pull-right badge badge-info">+12</span>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <i class="btn btn-xs btn-primary fa fa-user"></i>
                                        Bob just signed up as an editor ...
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <div class="clearfix">
													<span class="pull-left">
														<i class="btn btn-xs no-hover btn-success fa fa-shopping-cart"></i>
														New Orders
													</span>
                                            <span class="pull-right badge badge-success">+8</span>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <div class="clearfix">
													<span class="pull-left">
														<i class="btn btn-xs no-hover btn-info fa fa-twitter"></i>
														Followers
													</span>
                                            <span class="pull-right badge badge-info">+11</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="dropdown-footer">
                            <a href="#">
                                See all notifications
                                <i class="ace-icon fa fa-arrow-right"></i>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="green dropdown-modal">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <i class="ace-icon fa fa-envelope icon-animated-vertical"></i>
                        <span class="badge badge-success">5</span>
                    </a>

                    <ul class="dropdown-menu-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
                        <li class="dropdown-header">
                            <i class="ace-icon fa fa-envelope-o"></i>
                            5 Messages
                        </li>

                        <li class="dropdown-content">
                            <ul class="dropdown-menu dropdown-navbar">
                                <li>
                                    <a href="#" class="clearfix">
                                        <img src="assets/images/avatars/avatar.png" class="msg-photo" alt="Alex's Avatar" />
                                        <span class="msg-body">
													<span class="msg-title">
														<span class="blue">Alex:</span>
														Ciao sociis natoque penatibus et auctor ...
													</span>

													<span class="msg-time">
														<i class="ace-icon fa fa-clock-o"></i>
														<span>a moment ago</span>
													</span>
												</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="#" class="clearfix">
                                        <img src="assets/images/avatars/avatar3.png" class="msg-photo" alt="Susan's Avatar" />
                                        <span class="msg-body">
													<span class="msg-title">
														<span class="blue">Susan:</span>
														Vestibulum id ligula porta felis euismod ...
													</span>

													<span class="msg-time">
														<i class="ace-icon fa fa-clock-o"></i>
														<span>20 minutes ago</span>
													</span>
												</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="#" class="clearfix">
                                        <img src="assets/images/avatars/avatar4.png" class="msg-photo" alt="Bob's Avatar" />
                                        <span class="msg-body">
													<span class="msg-title">
														<span class="blue">Bob:</span>
														Nullam quis risus eget urna mollis ornare ...
													</span>

													<span class="msg-time">
														<i class="ace-icon fa fa-clock-o"></i>
														<span>3:15 pm</span>
													</span>
												</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="#" class="clearfix">
                                        <img src="assets/images/avatars/avatar2.png" class="msg-photo" alt="Kate's Avatar" />
                                        <span class="msg-body">
													<span class="msg-title">
														<span class="blue">Kate:</span>
														Ciao sociis natoque eget urna mollis ornare ...
													</span>

													<span class="msg-time">
														<i class="ace-icon fa fa-clock-o"></i>
														<span>1:33 pm</span>
													</span>
												</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="#" class="clearfix">
                                        <img src="assets/images/avatars/avatar5.png" class="msg-photo" alt="Fred's Avatar" />
                                        <span class="msg-body">
													<span class="msg-title">
														<span class="blue">Fred:</span>
														Vestibulum id penatibus et auctor  ...
													</span>

													<span class="msg-time">
														<i class="ace-icon fa fa-clock-o"></i>
														<span>10:09 am</span>
													</span>
												</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="dropdown-footer">
                            <a href="inbox.html">
                                See all messages
                                <i class="ace-icon fa fa-arrow-right"></i>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="light-blue dropdown-modal">
                    <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                        <img class="nav-user-photo" src="assets/images/avatars/user.jpg" alt="Jason's Photo" />
                        <span class="user-info">
									<small>Welcome,</small>
									Admin
								</span>

                        <i class="ace-icon fa fa-caret-down"></i>
                    </a>

                    <ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
                        <li>
                            <a href="#">
                                <i class="ace-icon fa fa-cog"></i>
                                Settings
                            </a>
                        </li>

                        <li>
                            <a href="profile.html">
                                <i class="ace-icon fa fa-user"></i>
                                Profile
                            </a>
                        </li>

                        <li class="divider"></li>

                        <li>
                            <a href="#">
                                <i class="ace-icon fa fa-power-off"></i>
                                Logout
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div><!-- /.navbar-container -->
</div>

<div class="main-container ace-save-state" id="main-container">
    <script type="text/javascript">
        try{ace.settings.loadState('main-container')}catch(e){}
    </script>

    <div id="sidebar" class="sidebar                  responsive                    ace-save-state">
        <script type="text/javascript">
            try{ace.settings.loadState('sidebar')}catch(e){}
        </script>

        <div class="sidebar-shortcuts" id="sidebar-shortcuts">
            <div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">



                <button class="btn btn-success"  onclick="myfuncreport()" id="myButton1" >

                    <i class="ace-icon fa fa-signal" ></i>


                </button>


                <button class="btn btn-info"  onclick="myfuncadmin()" id="myButton2">
                    <i class="ace-icon fa fa-pencil"></i>
                </button>

                <button class="btn btn-warning"  onclick="myfuncjobs()" id="myButton3">
                    <i class="ace-icon fa fa-users"></i>
                </button>

                <button class="btn btn-danger"  onclick="myfuncsettings()" id="myButton4">
                    <i class="ace-icon fa fa-cogs"></i>
                </button>




            </div>

            <div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
                <span class="btn btn-success"></span>

                <span class="btn btn-info"></span>

                <span class="btn btn-warning"></span>

                <span class="btn btn-danger"></span>
            </div>
        </div><!-- /.sidebar-shortcuts -->

        <ul class="nav nav-list">
            <li class="">
                <a href="index.html">
                    <i class="menu-icon fa fa-tachometer"></i>
                    <span class="menu-text"> Student Interaction </span>
                </a>

                <b class="arrow"></b>
            </li>

            <li class="">
                <a href="profile/profile.php" >
                    <i class="menu-icon fa fa-user"></i>
                    <span class="menu-text">
							Your Profile
							</span>


                </a>

                <b class="arrow"></b>


            </li>

            <li class="">
                <a href="settings.php" >
                    <i class="menu-icon fa fa-list"></i>
                    <span class="menu-text"> Settings </span>


                </a>

                <b class="arrow"></b>


            </li>

            <li class="">
                <a href="admin_panel/admin_panel.php" >
                    <i class="menu-icon fa fa-pencil-square-o"></i>
                    <span class="menu-text"> Admin Panel </span>


                </a>

                <b class="arrow"></b>


            </li>

            <li class="">
                <a href="Approve/approve.php">
                    <i class="menu-icon fa fa-list-alt"></i>
                    <span class="menu-text"> Approve </span>
                </a>

                <b class="arrow"></b>
            </li>

            </li>

            <li>
                <a href="#" class="dropdown-toggle">
                    <i class="menu-icon fa fa-briefcase"></i>
                    <span class="menu-text"> Jobs </span>

                    <b class="arrow fa fa-angle-down"></b>
                </a>

                <b class="arrow"></b>

                <ul class="submenu">
                    <li class="">
                        <a href="jobs/view_jobs.php">
                            <i class="menu-icon fa fa-caret-right"></i>
                            View all Jobs
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="active">
                        <a href="jobs/post_jobs.php">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Post Job
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="">
                        <a href="jobs/jobs_panel.php">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Jobs Panel
                        </a>

                        <b class="arrow"></b>
                    </li>

                </ul>

            </li>

            <li class="">
                <a href="reports.php">

                    <i class="menu-icon fa fa-bar-chart"></i>

                    <span class="menu-text"> Reports </span>
                </a>

                <b class="arrow"></b>
            </li>

            <li class="">
                <a href="company/companies.php">
                    <i class="menu-icon fa fa-picture-o"></i>
                    <span class="menu-text"> Companies </span>
                </a>

                <b class="arrow"></b>
            </li>


            <li class="">
                <a href="#" class="dropdown-toggle">
                    <i class="menu-icon fa fa-tag"></i>
                    <span class="menu-text"> More Pages </span>

                    <b class="arrow fa fa-angle-down"></b>
                </a>

                <b class="arrow"></b>

                <ul class="submenu">
                    <li class="">
                        <a href="search/advanced_search.php">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Advanced Search
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="">
                        <a href="inbox.php">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Inbox
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="">
                        <a href="Approve.php">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Approve
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="">
                        <a href="#">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Invoice
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="">
                        <a href="#">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Timeline
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="">
                        <a href="#">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Search Results
                        </a>

                        <b class="arrow"></b>
                    </li>




                </ul>
            </li>


        </ul><!-- /.nav-list -->

        <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
            <i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
        </div>
    </div>

    <div class="main-content">
        <div class="main-content-inner">
            <div class="breadcrumbs ace-save-state" id="breadcrumbs">
                <ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="#">Student Interaction</a>
							</li>
							<li class="active">Filter Candidates</li>
						</ul><!-- /.breadcrumb -->
            </div>

            <div class="page-content">



                <div class="row">
                    <div class="col-xs-12">
                        <!-- PAGE CONTENT BEGINS -->
<div class="row">
									<div class="col-xs-12 col-sm-12">
										<div class="tabbable">
											<ul class="nav nav-tabs tab-color-blue background-blue" id="myTab4">
												<li class="active">
													<a data-toggle="tab" href="#home4">Search Criteria</a>
												</li>

												<li>
													<a data-toggle="tab" href="#profile4">Regiter Number</a>
												</li>
											</ul>
				
	<div class="tab-content col-xs-12 col-sm-12">
	<!--/.search-->

		<div id="home4" class="tab-pane in active">
                        				<div class="row">
									<div class="col-xs-3 col-sm-3">
													<h5><label class="col-sm-3 control-label grey bolder">Campus</label></h5>
														<div class="col-xs-3 col-sm-6">

															<select class="form-control" id="form-field-select-2" multiple="multiple">
																<option value="">All</option>
																<option value=""></option>
																<option value=""></option>
															</select>
														</div>
										</div>
									<div class="col-xs-3 col-sm-3">
										<h5><label class="col-sm-5 control-label grey bolder" for="form-field-1">Year of Graduation</label></h5>
											<div class="col-xs-3 col-sm-6 col-md-7">
												<select class="col-xs-7 chosen-select form-control" id="form-field-select-3" data-placeholder="Select a Year...">
																<option value=""></option>
																<option value="">2016</option>
																<option value="">2017</option>
																<option value="">2018</option>
																<option value="">2019</option>
																<option value="">2020</option>
																<option value="">2021</option>
															</select>
											</div>
									</div>

								<div class="col-xs-7 col-sm-3">
									<a href="#" class="btn btn-sm btn-grey">
   										<i class="ace-icon "></i>
   											View Candidate
 											</a>
									</div>

									
							</div>
							<div class="row">
								<div class="col-xs-12">

								<div class="widget-box widget-color-orange" id="widget-box-2">
												<div class="widget-header widget-header-small">
													<h6 class="widget-title">
														UG Candidates
													</h6>
												</div>
									<div class="widget-body">
										<div class="widget-main">
											<div id="fuelux-wizard-container">

												<div class="step-content pos-rel">

												<form class="form-horizontal" id="sample-form">
													<div class="row">
                    												<div class="col-xs-8 col-sm-5">
															<h5><label class="control-label bolder orange"for="form-field-select-2">Select Eligibility Criteria</label></h5>

															<div class="col-sm-9">
															<select class="form-control Yellow" id="form-field-select-2" multiple="multiple">
																<option value="">All</option>
																<option value="7">Above 7 Cgpa</option>
																<option value="6.5">Above 6.5 Cgpa</option>
															</select>
															</div>
														</div>
														<div class="col-xs-8 col-sm-5">
															<h5><label class="control-label bolder orange"for="form-field-select-2">Select Branch</label></h5>

															<div class="col-sm-9">
															<select class="form-control Yellow" id="form-field-select-2" multiple="multiple">
																<option value="">All</option>
																<option value="cse">Computer science and Engineering</option>
																<option value="cse">Electrical and Electronic Engineering</option>
																<option value="cse">Mechanical Engineering</option>
																<option value="cse">Civil Engineering</option>
																<option value="cse">Information Technology</option>
																<option value="cse">Electrical and Communicaton Engineering</option>
															</select>
															</div>
														</div>

													</div>
												<div class="row">
												<div class="col-xs-12 col-sm-3">

														<h5 class="orange bolder smaller">CGPA</h5>
<!--													<input type="range" name="slider-fill-mini" id="slider-fill-mini" value="0" min="0" max="100.0" step="10" data-mini="true" data-highlight="true" data-theme="b" data-track-theme="b">-->


                                                    <div class="col-xs-9 col-md-10">
                                                        <input type="text"  value="55" id="slide-text" class="col-xs-12">
                                                        <div id="slider-eq">
<!--                                                            <span class="ui-slider-green ui-slider-small">17</span>-->
                                                            <span class="ui-slider-red ">55</span>

                                                        </div>
                                                    </div>


                                                    <input type="submit" class="btn btn-primary" data-inline="true" value="Submit">
													</div>
												</div>
												</form>
												</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
							<div class="row">
								<div class="col-xs-12">

								<div class="widget-box widget-color-blue" id="widget-box-2">
												<div class="widget-header widget-header-small">
													<h6 class="widget-title">
														UG Smester wise CGPA
													</h6>
												</div>
									<div class="widget-body">
										<div class="widget-main">
											<div id="fuelux-wizard-container">

												<div class="step-content pos-rel">

												<form class="form-horizontal" id="sample-form">
													<div class="row">
                    												<div class="col-xs-8 col-sm-5">
															<h5><label class="control-label bolder blue"for="form-field-select-2 slider-fill-mini">Select 12th Percentage</label></h5>
																<input type="range" name="slider-fill-mini" id="slider-fill-mini" value="0" min="0" max="10.0" step="0.1" data-mini="true" data-highlight="true" data-theme="b" data-track-theme="b">
														</div>
														<div class="col-xs-8 col-sm-5">
															<h5><label class="control-label bolder blue"for="form-field-select-2 slider-fill-mini">Select 10th Percentage</label></h5>
																<input type="range" name="slider-fill-mini" id="slider-fill-mini" value="0" min="0" max="10.0" step="0.1" data-mini="true" data-highlight="true" data-theme="b" data-track-theme="b">
														</div>

													</div>
													<div class="row">
                    												<div class="col-xs-8 col-sm-5">
														<h5><label class="control-label bolder blue" for="form-field-select-3">Lateral Entry(Optional)</label></h5>
													<input type="range" name="slider-fill-mini" id="slider-fill-mini" value="0" min="0" max="36" step="1" data-mini="true" data-highlight="true" data-theme="b" data-track-theme="b">
      													<input type="submit" data-inline="true" value="Submit">
														</div>
														<div class="col-xs-8 col-sm-5">
														<h5><label class="control-label bolder blue" for="form-field-select-3">History of Arrears</label></h5>
													<input type="range" name="slider-fill-mini" id="slider-fill-mini" value="0" min="0" max="36" step="1" data-mini="true" data-highlight="true" data-theme="b" data-track-theme="b">
      													<input type="submit" data-inline="true" value="Submit">
														</div>

													</div>
													<div class="row">
                    												<div class="col-xs-8 col-sm-5">
														<h5><label class="control-label bolder blue" for="form-field-select-3">Standing Arrears</label></h5>

														<select class="chosen-select form-control" id="form-field-select-3" data-placeholder="Please Select...">
																<option value="">Nil</option>
																<option value="">1</option>
																<option value="">2</option>
																<option value="">3</option>
																<option value="">4</option>
																<option value="">5</option>
																<option value="">6</option>
																<option value="">7</option>
																<option value="">8</option>
																<option value="">9</option>
															</select>
														</div>
														<div class="col-xs-8 col-sm-5">
														<h5><label class="control-label bolder blue" for="form-field-select-3">Gender</label></h5>

														<select class="chosen-select form-control" id="form-field-select-3" data-placeholder="Please Select...">
																<option value="">All</option>
																<option value="m">Male</option>
																<option value="n">Female</option>
															</select>
														</div>

													</div>
													<div class="row">
                    												<div class="col-xs-8 col-sm-5">
														<h5><label class="control-label bolder blue" for="form-field-select-3">Has Job</label></h5>

														<select class="chosen-select form-control" id="form-field-select-3" data-placeholder="Please Select...">
																<option value="y">Yes</option>
																<option value="n">No</option>
															</select>
														</div>
														<div class="col-xs-8 col-sm-5">
														<h5><label class="control-label bolder blue" for="form-field-select-3">Gap in Study</label></h5>

														<select class="chosen-select form-control" id="form-field-select-3" data-placeholder="Please Select...">
																<option value="">No</option>
																<option value="">1 year</option>
																<option value="">2 year</option>
															</select>
														</div>

													</div>
												</form>
												</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
							<div class="row">
								<div class="col-xs-12">

								<div class="widget-box widget-color-green" id="widget-box-2">
												<div class="widget-header widget-header-small">
													<h6 class="widget-title">
														PG Candidates
													</h6>
												</div>
									<div class="widget-body">
										<div class="widget-main">
											<div id="fuelux-wizard-container">

												<div class="step-content pos-rel">

												<form class="form-horizontal" id="sample-form">
													<div class="row">
                    												<div class="col-xs-8 col-sm-5">
															<h5><label class="control-label bolder green"for="form-field-select-2">Select Eligibility Criteria</label></h5>

															<div class="col-sm-9">
															<select class="form-control" id="form-field-select-2" multiple="multiple">
																<option value="">All</option>
																<option value="7">Above 7 Cgpa</option>
																<option value="6.5">Above 6.5 Cgpa</option>
															</select>
															</div>
														</div>
														<div class="col-xs-8 col-sm-5">
															<h5><label class="control-label bolder green"for="form-field-select-2">Select Branch</label></h5>

															<div class="col-sm-9">
															<select class="form-control" id="form-field-select-2" multiple="multiple">
																<option value="">All</option>
																<option value="cse">Computer science and Engineering</option>
																<option value="cse">Electrical and Electronic Engineering</option>
																<option value="cse">Mechanical Engineering</option>
																<option value="cse">Civil Engineering</option>
																<option value="cse">Information Technology</option>
																<option value="cse">Electrical and Communicaton Engineering</option>
															</select>
															</div>
														</div>

													</div>
												<div class="row">
												<div class="col-xs-12 col-sm-3">

														<h5 class="green bolder smaller">CGPA</h5>
													<input type="range" name="slider-fill-mini" id="slider-fill-mini" value="0" min="0" max="10.0" step="0.1" data-mini="true" data-highlight="true" data-theme="b" data-track-theme="b">
      													<input type="submit" data-inline="true" value="Submit">
													</div>
												</div>
												</form>
												</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
							<div class="row">
								<div class="col-xs-12">

								<div class="widget-box widget-color-red" id="widget-box-2">
												<div class="widget-header widget-header-small">
													<h6 class="widget-title">
														PG Smester wise CGPA
													</h6>
												</div>
									<div class="widget-body">
										<div class="widget-main">
											<div id="fuelux-wizard-container">

												<div class="step-content pos-rel">

												<form class="form-horizontal" id="sample-form">
													<div class="row">
                    												<div class="col-xs-8 col-sm-5">

														<h5 class="red bolder smaller">UG Percentage</h5>
															<input type="range" name="slider-fill-mini" id="slider-fill-mini" value="0" min="0" max="10.0" step="0.1" data-mini="true" data-highlight="true" data-theme="b" data-track-theme="b">
      															<input type="submit" data-inline="true" value="Submit">
															</div>
														<div class="col-xs-8 col-sm-5">
															<h5><label class="control-label bolder red"for="form-field-select-2">Higher Studied Status</label></h5>

															<div class="col-sm-9">

														<select class="chosen-select form-control" id="form-field-select-3" data-placeholder="Please Select...">
																<option value="">All Candidate</option>
																<option value="m">1st year</option>
																<option value="n">2nd year</option>
															</select>
															</div>
														</div>

													</div>
												<div class="row">
												<div class="col-xs-12 col-sm-3">

														<h5 class="red bolder smaller">Don't Select Placed Students From</h5>
<fieldset data-role="controlgroup">
    <input type="checkbox" name="checkbox-1a" id="checkbox-1a">
    <label for="checkbox-1a">Core</label>
    <input type="checkbox" name="checkbox-2a" id="checkbox-2a">
    <label for="checkbox-2a">Dream</label>
    <input type="checkbox" name="checkbox-3a" id="checkbox-3a">
    <label for="checkbox-3a">Soft</label>
</fieldset>
													</div>
												</div>
												</form>
												</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
		<div class="row">				
												<div class="col-xs-12 col-sm-10">
													<div class="form-actions center">
															<button type="button" class="btn btn-default btn-round btn-success">
																Search
																<i class="ace-icon fa fa-arrow-right icon-on-right bigger-110"></i>
															</button>
									<button class="btn btn-danger btn-default btn-round">
												<i class="ace-icon fa fa-times red3"></i>
												Cancel
											</button>
					</div>
		</div>
</div>

		</div>

	<!--/.regno-->	
			<div id="profile4" class="tab-pane">
							<div class="row">
								<div class="col-xs-12">

								<div class="widget-box widget-color-blue" id="widget-box-2">
												<div class="widget-header widget-header-small">
													<h6 class="widget-title">
														Search by Register Number
													</h6>
												</div>
									<div class="widget-body">
										<div class="widget-main">
											<div id="fuelux-wizard-container">

												<div class="step-content pos-rel">

												<form class="form-horizontal" id="sample-form">
													<div class="row">
                    												<div class="col-xs-8 col-sm-5">

														<h5 class="red bolder smaller">Register No:</h5>
											<input type="text" id="form-field-1" placeholder="Enter Register No" class="col-xs-12" />
															</div>

													</div>
												</form>
												</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
			</div>
	</div>
</div>

<!-- PAGE CONTENT ENDS -->
                    </div><!-- /.col -->
                </div><!-- /.row -->





                        <!-- PAGE CONTENT ENDS -->
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.page-content -->
        </div>
    </div><!-- /.main-content -->

    <div class="footer">
        <div class="footer-inner">
            <div class="footer-content">
						<span class="bigger-120">
							<span class="blue bolder">RMK</span>
							Group of Institutions
						</span>

                &nbsp; &nbsp;

            </div>
        </div>
    </div>

    <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
        <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
    </a>
</div><!-- /.main-container -->
<!-- basic scripts -->

<!--[if !IE]> -->
<script src="assets/js/jquery-2.1.4.min.js"></script>

<!-- <![endif]-->

<!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
<script type="text/javascript">
    if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
</script>
<script src="assets/js/bootstrap.min.js"></script>

<!-- page specific plugin scripts -->

<!--[if lte IE 8]>
<script src="assets/js/excanvas.min.js"></script>
<![endif]-->
<script src="assets/js/jquery-ui.custom.min.js"></script>
<script src="assets/js/jquery.ui.touch-punch.min.js"></script>
<script src="assets/js/chosen.jquery.min.js"></script>
<script src="assets/js/spinbox.min.js"></script>
<script src="assets/js/bootstrap-datepicker.min.js"></script>
<script src="assets/js/bootstrap-timepicker.min.js"></script>
<script src="assets/js/moment.min.js"></script>
<script src="assets/js/daterangepicker.min.js"></script>
<script src="assets/js/bootstrap-datetimepicker.min.js"></script>
<script src="assets/js/bootstrap-colorpicker.min.js"></script>
<script src="assets/js/jquery.knob.min.js"></script>
<script src="assets/js/autosize.min.js"></script>
<script src="assets/js/jquery.inputlimiter.min.js"></script>
<script src="assets/js/jquery.maskedinput.min.js"></script>
<script src="assets/js/bootstrap-tag.min.js"></script>

<!-- ace scripts -->
<script src="assets/js/ace-elements.min.js"></script>
<script src="assets/js/ace.min.js"></script>

<!-- inline scripts related to this page -->
<script type="text/javascript">
    jQuery(function($) {
        $('#id-disable-check').on('click', function() {
            var inp = $('#form-input-readonly').get(0);
            if(inp.hasAttribute('disabled')) {
                inp.setAttribute('readonly' , 'true');
                inp.removeAttribute('disabled');
                inp.value="This text field is readonly!";
            }
            else {
                inp.setAttribute('disabled' , 'disabled');
                inp.removeAttribute('readonly');
                inp.value="This text field is disabled!";
            }
        });


        if(!ace.vars['touch']) {
            $('.chosen-select').chosen({allow_single_deselect:true});
            //resize the chosen on window resize

            $(window)
                .off('resize.chosen')
                .on('resize.chosen', function() {
                    $('.chosen-select').each(function() {
                        var $this = $(this);
                        $this.next().css({'width': $this.parent().width()});
                    })
                }).trigger('resize.chosen');
            //resize chosen on sidebar collapse/expand
            $(document).on('settings.ace.chosen', function(e, event_name, event_val) {
                if(event_name != 'sidebar_collapsed') return;
                $('.chosen-select').each(function() {
                    var $this = $(this);
                    $this.next().css({'width': $this.parent().width()});
                })
            });


            $('#chosen-multiple-style .btn').on('click', function(e){
                var target = $(this).find('input[type=radio]');
                var which = parseInt(target.val());
                if(which == 2) $('#form-field-select-4').addClass('tag-input-style');
                else $('#form-field-select-4').removeClass('tag-input-style');
            });
        }


        $('[data-rel=tooltip]').tooltip({container:'body'});
        $('[data-rel=popover]').popover({container:'body'});

        autosize($('textarea[class*=autosize]'));

        $('textarea.limited').inputlimiter({
            remText: '%n character%s remaining...',
            limitText: 'max allowed : %n.'
        });

        $.mask.definitions['~']='[+-]';
        $('.input-mask-date').mask('99/99/9999');
        $('.input-mask-phone').mask('(999) 999-9999');
        $('.input-mask-eyescript').mask('~9.99 ~9.99 999');
        $(".input-mask-product").mask("a*-999-a999",{placeholder:" ",completed:function(){alert("You typed the following: "+this.val());}});



        $( "#input-size-slider" ).css('width','200px').slider({
            value:1,
            range: "min",
            min: 1,
            max: 8,
            step: 1,
            slide: function( event, ui ) {
                var sizing = ['', 'input-sm', 'input-lg', 'input-mini', 'input-small', 'input-medium', 'input-large', 'input-xlarge', 'input-xxlarge'];
                var val = parseInt(ui.value);
                $('#form-field-4').attr('class', sizing[val]).attr('placeholder', '.'+sizing[val]);
            }
        });

        $( "#input-span-slider" ).slider({
            value:1,
            range: "min",
            min: 1,
            max: 12,
            step: 1,
            slide: function( event, ui ) {
                var val = parseInt(ui.value);
                $('#form-field-5').attr('class', 'col-xs-'+val).val('.col-xs-'+val);
            }
        });



        //"jQuery UI Slider"
        //range slider tooltip example
        $( "#slider-range" ).css('height','200px').slider({
            orientation: "vertical",
            range: true,
            min: 0,
            max: 100,
            values: [ 17, 67 ],
            slide: function( event, ui ) {
                var val = ui.values[$(ui.handle).index()-1] + "";

                if( !ui.handle.firstChild ) {
                    $("<div class='tooltip right in' style='display:none;left:16px;top:-6px;'><div class='tooltip-arrow'></div><div class='tooltip-inner'></div></div>")
                        .prependTo(ui.handle);
                }
                $(ui.handle.firstChild).show().children().eq(1).text(val);
            }
        }).find('span.ui-slider-handle').on('blur', function(){
            $(this.firstChild).hide();
        });


        $( "#slider-range-max" ).slider({
            range: "max",
            min: 1,
            max: 10,
            value: 2
        });

        $( "#slider-eq > span" ).css({width:'90%', 'float':'left', margin:'15px 0px'}).each(function() {
            // read initial values from markup and remove that
            var value = parseInt( $( this ).text(), 10 );
            $( this ).empty().slider({
                value: value,
                range: "min",
                min:10,
                max:70,
                step:10,

                animate: true,
                slide: function(event,ui){
                    $('#slide-text').val(ui.value);
                }

            });
        });

        //$("#slider-eq > span.ui-slider-purple").slider('disable');//disable third item


        $('#id-input-file-1 , #id-input-file-2').ace_file_input({
            no_file:'No File ...',
            btn_choose:'Choose',
            btn_change:'Change',
            droppable:false,
            onchange:null,
            thumbnail:false //| true | large
            //whitelist:'gif|png|jpg|jpeg'
            //blacklist:'exe|php'
            //onchange:''
            //
        });
        //pre-show a file name, for example a previously selected file
        //$('#id-input-file-1').ace_file_input('show_file_list', ['myfile.txt'])


        $('#id-input-file-3').ace_file_input({
            style: 'well',
            btn_choose: 'Drop files here or click to choose',
            btn_change: null,
            no_icon: 'ace-icon fa fa-cloud-upload',
            droppable: true,
            thumbnail: 'small'//large | fit
            //,icon_remove:null//set null, to hide remove/reset button
            /**,before_change:function(files, dropped) {
						//Check an example below
						//or examples/file-upload.html
						return true;
					}*/
            /**,before_remove : function() {
						return true;
					}*/
            ,
            preview_error : function(filename, error_code) {
                //name of the file that failed
                //error_code values
                //1 = 'FILE_LOAD_FAILED',
                //2 = 'IMAGE_LOAD_FAILED',
                //3 = 'THUMBNAIL_FAILED'
                //alert(error_code);
            }

        }).on('change', function(){
            //console.log($(this).data('ace_input_files'));
            //console.log($(this).data('ace_input_method'));
        });


        //$('#id-input-file-3')
        //.ace_file_input('show_file_list', [
        //{type: 'image', name: 'name of image', path: 'http://path/to/image/for/preview'},
        //{type: 'file', name: 'hello.txt'}
        //]);




        //dynamically change allowed formats by changing allowExt && allowMime function
        $('#id-file-format').removeAttr('checked').on('change', function() {
            var whitelist_ext, whitelist_mime;
            var btn_choose
            var no_icon
            if(this.checked) {
                btn_choose = "Drop images here or click to choose";
                no_icon = "ace-icon fa fa-picture-o";

                whitelist_ext = ["jpeg", "jpg", "png", "gif" , "bmp"];
                whitelist_mime = ["image/jpg", "image/jpeg", "image/png", "image/gif", "image/bmp"];
            }
            else {
                btn_choose = "Drop files here or click to choose";
                no_icon = "ace-icon fa fa-cloud-upload";

                whitelist_ext = null;//all extensions are acceptable
                whitelist_mime = null;//all mimes are acceptable
            }
            var file_input = $('#id-input-file-3');
            file_input
                .ace_file_input('update_settings',
                    {
                        'btn_choose': btn_choose,
                        'no_icon': no_icon,
                        'allowExt': whitelist_ext,
                        'allowMime': whitelist_mime
                    })
            file_input.ace_file_input('reset_input');

            file_input
                .off('file.error.ace')
                .on('file.error.ace', function(e, info) {
                    //console.log(info.file_count);//number of selected files
                    //console.log(info.invalid_count);//number of invalid files
                    //console.log(info.error_list);//a list of errors in the following format

                    //info.error_count['ext']
                    //info.error_count['mime']
                    //info.error_count['size']

                    //info.error_list['ext']  = [list of file names with invalid extension]
                    //info.error_list['mime'] = [list of file names with invalid mimetype]
                    //info.error_list['size'] = [list of file names with invalid size]


                    /**
                     if( !info.dropped ) {
							//perhapse reset file field if files have been selected, and there are invalid files among them
							//when files are dropped, only valid files will be added to our file array
							e.preventDefault();//it will rest input
						}
                     */


                    //if files have been selected (not dropped), you can choose to reset input
                    //because browser keeps all selected files anyway and this cannot be changed
                    //we can only reset file field to become empty again
                    //on any case you still should check files with your server side script
                    //because any arbitrary file can be uploaded by user and it's not safe to rely on browser-side measures
                });


            /**
             file_input
             .off('file.preview.ace')
             .on('file.preview.ace', function(e, info) {
						console.log(info.file.width);
						console.log(info.file.height);
						e.preventDefault();//to prevent preview
					});
             */

        });

        $('#spinner1').ace_spinner({value:0,min:0,max:200,step:10, btn_up_class:'btn-info' , btn_down_class:'btn-info'})
            .closest('.ace-spinner')
            .on('changed.fu.spinbox', function(){
                //console.log($('#spinner1').val())
            });
        $('#spinner2').ace_spinner({value:0,min:0,max:10000,step:100, touch_spinner: true, icon_up:'ace-icon fa fa-caret-up bigger-110', icon_down:'ace-icon fa fa-caret-down bigger-110'});
        $('#spinner3').ace_spinner({value:0,min:-100,max:100,step:10, on_sides: true, icon_up:'ace-icon fa fa-plus bigger-110', icon_down:'ace-icon fa fa-minus bigger-110', btn_up_class:'btn-success' , btn_down_class:'btn-danger'});
        $('#spinner4').ace_spinner({value:0,min:-100,max:100,step:10, on_sides: true, icon_up:'ace-icon fa fa-plus', icon_down:'ace-icon fa fa-minus', btn_up_class:'btn-purple' , btn_down_class:'btn-purple'});

        //$('#spinner1').ace_spinner('disable').ace_spinner('value', 11);
        //or
        //$('#spinner1').closest('.ace-spinner').spinner('disable').spinner('enable').spinner('value', 11);//disable, enable or change value
        //$('#spinner1').closest('.ace-spinner').spinner('value', 0);//reset to 0


        //datepicker plugin
        //link
        $('.date-picker').datepicker({
            autoclose: true,
            todayHighlight: true
        })
        //show datepicker when clicking on the icon
            .next().on(ace.click_event, function(){
            $(this).prev().focus();
        });

        //or change it into a date range picker
        $('.input-daterange').datepicker({autoclose:true});


        //to translate the daterange picker, please copy the "examples/daterange-fr.js" contents here before initialization
        $('input[name=date-range-picker]').daterangepicker({
            'applyClass' : 'btn-sm btn-success',
            'cancelClass' : 'btn-sm btn-default',
            locale: {
                applyLabel: 'Apply',
                cancelLabel: 'Cancel',
            }
        })
            .prev().on(ace.click_event, function(){
            $(this).next().focus();
        });


        $('#timepicker1').timepicker({
            minuteStep: 1,
            showSeconds: true,
            showMeridian: false,
            disableFocus: true,
            icons: {
                up: 'fa fa-chevron-up',
                down: 'fa fa-chevron-down'
            }
        }).on('focus', function() {
            $('#timepicker1').timepicker('showWidget');
        }).next().on(ace.click_event, function(){
            $(this).prev().focus();
        });




        if(!ace.vars['old_ie']) $('#date-timepicker1').datetimepicker({
            //format: 'MM/DD/YYYY h:mm:ss A',//use this option to display seconds
            icons: {
                time: 'fa fa-clock-o',
                date: 'fa fa-calendar',
                up: 'fa fa-chevron-up',
                down: 'fa fa-chevron-down',
                previous: 'fa fa-chevron-left',
                next: 'fa fa-chevron-right',
                today: 'fa fa-arrows ',
                clear: 'fa fa-trash',
                close: 'fa fa-times'
            }
        }).next().on(ace.click_event, function(){
            $(this).prev().focus();
        });


        $('#colorpicker1').colorpicker();
        //$('.colorpicker').last().css('z-index', 2000);//if colorpicker is inside a modal, its z-index should be higher than modal'safe

        $('#simple-colorpicker-1').ace_colorpicker();
        //$('#simple-colorpicker-1').ace_colorpicker('pick', 2);//select 2nd color
        //$('#simple-colorpicker-1').ace_colorpicker('pick', '#fbe983');//select #fbe983 color
        //var picker = $('#simple-colorpicker-1').data('ace_colorpicker')
        //picker.pick('red', true);//insert the color if it doesn't exist


        $(".knob").knob();


        var tag_input = $('#form-field-tags');
        try{
            tag_input.tag(
                {
                    placeholder:tag_input.attr('placeholder'),
                    //enable typeahead by specifying the source array
                    source: ace.vars['US_STATES'],//defined in ace.js >> ace.enable_search_ahead
                    /**
                     //or fetch data from database, fetch those that match "query"
                     source: function(query, process) {
						  $.ajax({url: 'remote_source.php?q='+encodeURIComponent(query)})
						  .done(function(result_items){
							process(result_items);
						  });
						}
                     */
                }
            )

            //programmatically add/remove a tag
            var $tag_obj = $('#form-field-tags').data('tag');
            $tag_obj.add('Programmatically Added');

            var index = $tag_obj.inValues('some tag');
            $tag_obj.remove(index);
        }
        catch(e) {
            //display a textarea for old IE, because it doesn't support this plugin or another one I tried!
            tag_input.after('<textarea id="'+tag_input.attr('id')+'" name="'+tag_input.attr('name')+'" rows="3">'+tag_input.val()+'</textarea>').remove();
            //autosize($('#form-field-tags'));
        }


        /////////
        $('#modal-form input[type=file]').ace_file_input({
            style:'well',
            btn_choose:'Drop files here or click to choose',
            btn_change:null,
            no_icon:'ace-icon fa fa-cloud-upload',
            droppable:true,
            thumbnail:'large'
        });

        //chosen plugin inside a modal will have a zero width because the select element is originally hidden
        //and its width cannot be determined.
        //so we set the width after modal is show
        $('#modal-form').on('shown.bs.modal', function () {
            if(!ace.vars['touch']) {
                $(this).find('.chosen-container').each(function(){
                    $(this).find('a:first-child').css('width' , '210px');
                    $(this).find('.chosen-drop').css('width' , '210px');
                    $(this).find('.chosen-search input').css('width' , '200px');
                });
            }
        });
        /**
         //or you can activate the chosen plugin after modal is shown
         //this way select element becomes visible with dimensions and chosen works as expected
         $('#modal-form').on('shown', function () {
					$(this).find('.modal-chosen').chosen();
				})
         */



        $(document).one('ajaxloadstart.page', function(e) {
            autosize.destroy('textarea[class*=autosize]')

            $('.limiterBox,.autosizejs').remove();
            $('.daterangepicker.dropdown-menu,.colorpicker.dropdown-menu,.bootstrap-datetimepicker-widget.dropdown-menu').remove();
        });

    });
</script>
</body>
</html>
