
<?php session_start();
      ob_start();





    if(! isset($_SESSION['user']) && $_SESSION['user']==null){

        header("Location: ../login.html");


    }



?>

<?php

if(isset($_GET['id'])){

    include "connect.php";
    $user=$_GET['id'];
    $pass=$_GET['value'];


    $query="UPDATE login_admin SET password='{$pass}' WHERE username='{$user}'";

    $result=mysqli_query($connect, $query);

    $row=mysqli_fetch_assoc($result);
    $pass=$row['password'];

    header("Location: ../admin_login/settings.php");


}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />
    <title>RMK HIRING SYNERGY</title>

    <meta name="description" content="overview &amp; stats" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

    <!-- bootstrap & fontawesome -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/font-awesome/4.5.0/css/font-awesome.min.css" />


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
        function myfuncadmin() {
            location.href = "admin_panel/admin_panel_woexport.php";

        }
        function myfuncjobs() {
            location.href = "jobs/jobs_panel.php";

        }
        function myfuncsettings() {
            location.href = "settings.php";


        }



    </script>






    <!-- page specific plugin styles -->


    <style type="text/css">
        .test{

           margin-left: 20%;

        }




    </style>





    <!-- text fonts -->
    <link rel="stylesheet" href="assets/css/fonts.googleapis.com.css" />

    <!-- ace styles -->
    <link rel="stylesheet" href="assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

    <!--[if lte IE 9]>
    <link rel="stylesheet" href="assets/css/ace-part2.min.css" class="ace-main-stylesheet"/>
    <![endif]-->
    <link rel="stylesheet" href="assets/css/ace-skins.min.css" />
    <link rel="stylesheet" href="assets/css/ace-rtl.min.css" />

    <!--[if lte IE 9]>
    <link rel="stylesheet" href="assets/css/ace-ie.min.css"/>
    <![endif]-->

    <!-- inline styles related to this page -->

    <!-- ace settings handler -->
    <script src="assets/js/ace-extra.min.js"></script>

    <!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

    <!--[if lte IE 8]>
    <script src="assets/js/html5shiv.min.js"></script>
    <script src="assets/js/respond.min.js"></script>
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
            <a href="index.php" class="navbar-brand">
                <small>
                    <i class=""></i>
                    <img src="../logos/rmklogo.JPG" style="height: 25px;">
                    RMK Group of Institutions
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
                            <a href="inbox.php">
                                See all messages
                                <i class="ace-icon fa fa-arrow-right"></i>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="light-blue dropdown-modal">
                    <a data-toggle="dropdown" href="#" class="dropdown-toggle">

                        <?php
                        include "connect.php";
                        $name=$_SESSION['user'];

                        $query="select * from login_admin where username='{$name}'";




                        $result=mysqli_query($connect,$query);

                        if(!$result){


                            mysqli_error($connect);
                        }

                        while($row=mysqli_fetch_assoc($result)){



                            ?>


                            <img class="nav-user-photo" src="images/<?php echo $row['admin_pic']; ?>" alt="Jason's Photo" />
                        <?php } ?>
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
                            <a href="profile/profile.php">
                                <i class="ace-icon fa fa-user"></i>
                                Profile
                            </a>
                        </li>

                        <li class="divider"></li>

                        <li>
                            <a href="../login_out/logout.php">
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
        <!--side bar begins-->


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
                <a href="index.php">
                    <i class="menu-icon fa fa-tachometer"></i>
                    <span class="menu-text">Dashboard</span>
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

            <li class="active">
                <a href="settings.php" >
                    <i class="menu-icon fa fa-list"></i>
                    <span class="menu-text"> Settings </span>


                </a>

                <b class="arrow"></b>


            </li>

            <li class="">
                <a href="admin_panel/admin_panel_woexport.php" >
                    <i class="menu-icon fa fa-pencil-square-o"></i>
                    <span class="menu-text"> Admin Panel </span>


                </a>

                <b class="arrow"></b>


            </li>

            <li class="">
                <a href="approve.php">
                    <i class="menu-icon fa fa-list-alt"></i>
                    <span class="menu-text"> Approve </span>
                </a>

                <b class="arrow"></b>


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

                    <li class="">
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
                <a href="reports/reports.php">

                    <i class="menu-icon fa fa-bar-chart"></i>

                    <span class="menu-text"> Reports </span>
                </a>

                <b class="arrow"></b>
            </li>




            <li class="">
                <a href="#" class="dropdown-toggle">
                    <i class="menu-icon fa fa-laptop"></i>
                    <span class="menu-text"> Companies </span>

                    <b class="arrow fa fa-angle-down"></b>
                </a>

                <b class="arrow"></b>

                <ul class="submenu">
                    <li class="">
                        <a href="company/create_company.php">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Create Company
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="">
                        <a href="company/companies.php">
                            <i class="menu-icon fa fa-caret-right"></i>
                            View Companies
                        </a>

                        <b class="arrow"></b>
                    </li>
                    <li class="">
                        <a href="company/companies.php">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Company Panel
                        </a>

                        <b class="arrow"></b>
                    </li>


                </ul>
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
                        <a href="email.php">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Email
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
                        <a href="../index.html">Home</a>
                    </li>
                    <li class="active">Settings</li>
                </ul><!-- /.breadcrumb -->

                <div class="nav-search" id="nav-search">
                    <form class="form-search">
								<span class="input-icon">
									<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
									<i class="ace-icon fa fa-search nav-search-icon"></i>
								</span>
                    </form>
                </div><!-- /.nav-search -->
            </div>

            <div class="page-content">
                <!-- /.ace-settings-container -->

                <div class="page-header">
                    <h1>
                       Settings

                    </h1>
                </div><!-- /.page-header -->

                <div class="row">
                    <div class="col-xs-12">
                        <!-- PAGE CONTENT BEGINS -->





                <div class="col-xs-12 col-sm-12 col-sm-offset-2">


                    <div class="space-10"></div>


                    <div class="visible" id="main-widget-container">
                        <div class="row center">



                            <div class="col-xs-10 col-sm-8 widget-container-col blue centertest " id="widget-container-col-1">
                                <div class="widget-box widget-color-blue" id="widget-box-1">
                                    <div class="widget-header">
                                        <h5 class="widget-title " style="text-align: center;">Password Reset Wizard</h5>

                                        <div class="widget-toolbar">
                                            <div class="widget-menu">
                                                <i class="ace-icon fa fa-lock bigger-170"></i>


                                            </div>

                                        </div>

                                    </div>

                                    <div class="widget-body">
                                        <div class="widget-main">
                                            <div class="space-20"></div>


                                            </div>

                                                <div>
                                                    <label for="form_proceed" class="col-lg-6" style="font-size: large; font-weight: bold;">
                                                        Enter Your Current Password
                                                        <small class="text-error">(******)</small>
                                                    </label>

                                                    <div class="input-group col-sm-5 col-lg-offset-3">
                                                        <span class="input-group-addon">
																	<i class="ace-icon fa fa-lock blue"></i>
																</span>
                                                        <input class="form-control input-mask-product" type="password" id="form_proceed" />

                                                    </div>
                                                    <div class="space-22"></div>
                                                </div>
                                                     <div class="col-lg-offset-5">

                                                         <a  href="#modal-wizard" data-toggle="modal" id="proceed" class="pink btn btn-default btn-primary"> Proceed </a>



                                                     </div>


                                            </div>



                                        <p class="alert alert-info invisible">
                                            Nunc aliquam enim ut arcu aliquet adipiscing. Fusce dignissim volutpat justo non consectetur. Nulla fringilla eleifend consectetur.
                                        </p>







                                        </div>
                                    </div>
                                </div>



                        </div>
                    <?php

                    include "connect.php";
                    $username=$_SESSION['user'];

                    $query="SELECT * FROM login_admin WHERE username='{$username}'";

                    $result=mysqli_query($connect, $query);

                   $row=mysqli_fetch_assoc($result);
                     $pass=$row['password'];





                    ?>

                    <div id="modal-wizard" class="modal">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div id="modal-wizard-container">
                                    <div class="modal-header">
                                        <ul class="steps">
                                            <li data-step="1" class="active">
                                                <span class="step">1</span>
                                                <span class="title">New Password</span>
                                            </li>

                                            <li data-step="2">
                                                <span class="step">2</span>
                                                <span class="title">Confirm Password</span>
                                            </li>

                                            <li data-step="3">
                                                <span class="step">3</span>
                                                <span class="title">Success</span>
                                            </li>


                                        </ul>
                                    </div>

                                    <div class="modal-body step-content">
                                        <div class="step-pane active" data-step="1">
                                            <div class="center">
                                                <h4 class="blue">Step 1</h4>
                                                <label for="form-field-mask-3" class="col-lg-6" style="font-size: large; font-weight: bold;">
                                                    Enter Your New Password
                                                    <small class="text-error">(******)</small>
                                                </label>

                                                <div class="input-group col-sm-5 col-lg-offset-3">
                                                        <span class="input-group-addon">
																	<i class="ace-icon fa fa-lock blue"></i>
																</span>
                                                    <input class="form-control input-mask-product" type="password" name="check1" id="form1" />

                                                </div>
                                                <div class="space-8"></div>

                                            </div>

                                            <button class="btn btn-danger btn-sm  " data-dismiss="modal">
                                                <i class="ace-icon fa fa-times"></i>
                                                Cancel
                                            </button>


                                            <button class="btn btn-sm btn-warning" id="prevValue1">
                                                    <i class="ace-icon fa fa-arrow-left"></i>
                                                    Prev
                                                </button>


                                                <button class="btn btn-sm  btn-primary  " data-last="Finish" id="nextValue1"  >
                                                    Next
                                                    <i class="ace-icon fa fa-arrow-right icon-on-right"></i>
                                                </button>


                                        </div>

                                        <div class="step-pane" data-step="2">
                                            <div class="center">
                                                <h4 class="blue">Step 2</h4>
                                                <label for="form-field-mask-3" class="col-lg-6" style="font-size: large; font-weight: bold;">
                                                    Confirm Your New Password
                                                    <small class="text-error">(******)</small>
                                                </label>

                                                <div class="input-group col-sm-5 col-lg-offset-3">
                                                        <span class="input-group-addon">
																	<i class="ace-icon fa fa-lock blue"></i>
																</span>
                                                    <input class="form-control input-mask-product" type="password" name="check2" id="form2" />

                                                </div>
                                            </div>
                                            <div class="space-8"></div>

                                            <button class="btn btn-danger btn-sm  " data-dismiss="modal">
                                                <i class="ace-icon fa fa-times"></i>
                                                Cancel
                                            </button>


                                            <button class="btn btn-sm btn-warning" id="prevValue2">
                                                <i class="ace-icon fa fa-arrow-left"></i>
                                                Prev
                                            </button>


                                            <button class="btn btn-sm  btn-primary  " data-last="Finish" id="nextValue2"  >
                                                Next
                                                <i class="ace-icon fa fa-arrow-right icon-on-right"></i>
                                            </button>



                                        </div>

                                        <div class="step-pane" data-step="3">
                                            <div class="center">
                                                <h4 class="blue">Step 3</h4>
                                                <label for="form-field-mask-3" class="col-lg-offset-0" style="font-size: large; font-weight: bold;">
                                                     Click Finish to save your password

                                                </label>
                                            </div>
                                            <div class="space-12"></div>
                                            <button class="btn btn-sm  btn-primary pull-right" data-last="Finish" id="finish"  >
                                               Finish
                                                <i class="ace-icon fa fa-arrow-right icon-on-right"></i>
                                            </button>
                                            <br>
                                        </div>

                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>



                </div>





</div>
                            <!-- PAGE CONTENT ENDS -->

            <!-- /.page-content -->
        </div>
    </div><!-- /.main-content -->

    <div class="footer ">
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
<script src="assets/js/wizard.min.js"></script>
<script src="assets/js/jquery.validate.min.js"></script>
<script src="assets/js/jquery-additional-methods.min.js"></script>
<script src="assets/js/bootbox.js"></script>
<script src="assets/js/jquery.maskedinput.min.js"></script>
<script src="assets/js/select2.min.js"></script>


<!--[if lte IE 8]>
<script src="assets/js/excanvas.min.js"></script>
<![endif]-->
<script src="assets/js/jquery-ui.custom.min.js"></script>
<script src="assets/js/jquery.ui.touch-punch.min.js"></script>
<script src="assets/js/jquery.easypiechart.min.js"></script>
<script src="assets/js/jquery.sparkline.index.min.js"></script>
<script src="assets/js/jquery.flot.min.js"></script>
<script src="assets/js/jquery.flot.pie.min.js"></script>
<script src="assets/js/jquery.flot.resize.min.js"></script>

<!-- ace scripts -->
<script src="assets/js/ace-elements.min.js"></script>
<script src="assets/js/ace.min.js"></script>

<!-- inline scripts related to this page -->


<script type="application/javascript">



        jQuery(function($) {

            $('[data-rel=tooltip]').tooltip();

            $('.select2').css('width','200px').select2({allowClear:true})
                .on('change', function(){
                    $(this).closest('form').validate().element($(this));
                });
            $('#nextValue1').click(function(event){


                var value1 = $('#form1').val();
                if(value1!=""){

                    $('#modal-wizard-container')
                        .ace_wizard({
                             step: 2 //optional argument. wizard will jump to step "2" at first
                            //buttons: '.wizard-actions:eq(0)'
                        })

                }
                else{

                    bootbox.dialog({
                        message: "The Field Should not be Empty. Please Enter your New password",
                        buttons: {
                            "success" : {
                                "label" : "OK",
                                "className" : "btn-sm btn-primary"
                            }
                        }

                    } );

                    event.preventDefault();
                    event.stopPropagation();
                }

                }

            );
            $('#prevValue1').click(function(event){


//                    var value2 = $('#form2').val();
//                    if(value2!=null){
//
//                        $('#modal-wizard-container')
//                            .ace_wizard({
//                                step: 3 //optional argument. wizard will jump to step "2" at first
//                                //buttons: '.wizard-actions:eq(0)'
//                            })
//
//                    }
                event.preventDefault();

                }

            );

            $('#prevValue2').click(function(event){


                        $('#modal-wizard-container')
                            .ace_wizard({
                                step: 1 //optional argument. wizard will jump to step "2" at first
                                //buttons: '.wizard-actions:eq(0)'
                            })


                }

            );
            $('#nextValue2').click(function(event){


                    var value2 = $('#form2').val();
                    var value1 = $('#form1').val();
                    if(value2==""){

                        bootbox.dialog({
                            message: " Please Enter Your Password Confirmation field  ",
                            buttons: {
                                "success" : {
                                    "label" : "OK",
                                    "className" : "btn-sm btn-primary"
                                }
                            }

                        } );

                        event.preventDefault();
                        event.stopPropagation();

                    }
                    else{

                        if(value1==value2){
                            $('#modal-wizard-container')
                                .ace_wizard({
                                    step: 3 //optional argument. wizard will jump to step "2" at first
                                    //buttons: '.wizard-actions:eq(0)'
                                })



                        }
                        else{

                            bootbox.dialog({
                                message: "Please Check the Password you have Entered(Password Mismatch)",
                                buttons: {
                                    "success" : {
                                        "label" : "OK",
                                        "className" : "btn-sm btn-primary"
                                    }
                                }

                            } );
                            event.preventDefault();
                            event.stopPropagation();

                        }


                    }
//                    else{
//
//                        event.preventDefault();
//                        event.stopPropagation();
//                    }

                }


            );
            $('#finish').click(function(event){



                    var value2 = $('#form2').val();

                   window.location.href="settings.php?id=<?php echo $username ?>&value="+value2+"";
//
//                        $('#modal-wizard-container')
//                            .ace_wizard({
//                                step: 3 //optional argument. wizard will jump to step "2" at first
//                                //buttons: '.wizard-actions:eq(0)'
//                            })


                }


            );
            $('#proceed').click(function(event){




                    var value3 = $('#form_proceed').val();
                    if(value3== "<?php  echo $pass ?>"){



                    }
                    else if(value3==""){

                        bootbox.dialog({
                        message: "The Field Should not be Empty. Please Enter your current password",
                        buttons: {
                            "success" : {
                                "label" : "OK",
                                "className" : "btn-sm btn-primary"
                            }
                        }

                    } );
                    event.preventDefault();
                    event.stopPropagation();


                    }
                    else{
                        bootbox.dialog({
                            message: "Wrong Password. Please check your password",
                            buttons: {
                                "success" : {
                                    "label" : "OK",
                                    "className" : "btn-sm btn-primary"
                                }
                            }

                        } );
                        event.preventDefault();
                        event.stopPropagation();

                    }



//
//                        $('#modal-wizard-container')
//                            .ace_wizard({
//                                step: 3 //optional argument. wizard will jump to step "2" at first
//                                //buttons: '.wizard-actions:eq(0)'
//                            })


                }


            );
























            var $validation = false;
            $('#modal-wizard-container')
                .ace_wizard({
                   // step: 2 //optional argument. wizard will jump to step "2" at first
                    //buttons: '.wizard-actions:eq(0)'
                })
                .on('actionclicked.fu.wizard' , function(e, info) {

                    var bla = $('#nextValue').val();




                })
                .on('changed.fu.wizard', function(event) {




                })
                .on('finished.fu.wizard', function(e) {
                    bootbox.dialog({
                        message: "Thank you! Your information was successfully saved!",
                        buttons: {
                            "success" : {
                                "label" : "OK",
                                "className" : "btn-sm btn-primary"
                            }
                        }

                    } );
                    window.location.href = "settings.php";


                }).on('stepclick.fu.wizard', function(e){
                e.preventDefault();//this will prevent clicking and selecting steps
            });


            //jump to a step
            /**
             var wizard = $('#fuelux-wizard-container').data('fu.wizard')
             wizard.currentStep = 3;
             wizard.setState();
             */

            //determine selected step
            //wizard.selectedItem().step



            //hide or show the other form which requires validation
            //this is for demo only, you usullay want just one form in your application
            $('#skip-validation').removeAttr('checked').on('click', function(){
                $validation = this.checked;
                if(this.checked) {
                    $('#sample-form').hide();
                    $('#validation-form').removeClass('hide');
                }
                else {
                    $('#validation-form').addClass('hide');
                    $('#sample-form').show();
                }
            })










           /* $('#modal-wizard-container').ace_wizard();
            $('#modal-wizard .wizard-actions .btn[data-dismiss=modal]').removeAttr('disabled');*/


            /**
             $('#date').datepicker({autoclose:true}).on('changeDate', function(ev) {
					$(this).closest('form').validate().element($(this));
				});

             $('#mychosen').chosen().on('change', function(ev) {
					$(this).closest('form').validate().element($(this));
				});
             */


            $(document).one('ajaxloadstart.page', function(e) {
                //in ajax mode, remove remaining elements before leaving page
                $('[class*=select2]').remove();
            });
        })
</script>



</body>
</html>
