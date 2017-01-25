<?php session_start();

ob_start();

if (!isset($_SESSION['user']) && $_SESSION['user'] == null) {

    header("Location: ../login.html");

}
if (isset($_GET['apply'])) {


    $student_table = $_SESSION['table_name'];
    $st_roll = $_SESSION['user'];
    $id = $_GET['apply'];
    include "../connect.php";
    $query_update = "UPDATE $student_table SET _" . $id . "='accepted' Where st_roll={$st_roll} ";
    $result_update = mysqli_query($connect, $query_update);
    if (!$result_update) {

        die("" . mysqli_error($connect));
    }


    header("Location: view_jobs.php");


}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta charset="utf-8"/>
    <title>RMK Hiring Synergy</title>

    <meta name="description" content="overview &amp; stats"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"/>

    <!-- bootstrap & fontawesome -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="../assets/font-awesome/4.5.0/css/font-awesome.min.css"/>


    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
          integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
            crossorigin="anonymous"></script>


    <!--button-navigation-->
    <script type="text/javascript">
        function myfuncprofile() {
            location.href = "../profile/profile.php";

        }
        function myfuncjobs() {
            location.href = "view_jobs.php";

        }
        function myfuncsettings() {
            location.href = "../settings.php";

        }

        function apply(id) {


            location.href = "view_jobs.php?apply=" + id;


        }


    </script>


    <!-- page specific plugin styles -->


    <!-- text fonts -->
    <link rel="stylesheet" href="../assets/css/fonts.googleapis.com.css"/>

    <!-- ace styles -->
    <link rel="stylesheet" href="../assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style"/>

    <!--[if lte IE 9]>
    <link rel="stylesheet" href="../assets/css/ace-part2.min.css" class="ace-main-stylesheet"/>
    <![endif]-->
    <link rel="stylesheet" href="../assets/css/ace-skins.min.css"/>
    <link rel="stylesheet" href="../assets/css/ace-rtl.min.css"/>

    <!--[if lte IE 9]>
    <link rel="stylesheet" href="../assets/css/ace-ie.min.css"/>
    <![endif]-->

    <!-- inline styles related to this page -->

    <!-- ace settings handler -->
    <script src="../assets/js/ace-extra.min.js"></script>

    <!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

    <!--[if lte IE 8]>
    <script src="../assets/js/html5shiv.min.js"></script>
    <script src="../assets/js/respond.min.js"></script>
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
            <a href="view_jobs.php" class="navbar-brand">
                <small>
                    <i class=""></i>
                    <?php

                    $database = $_SESSION['database_name'];
                    if (preg_match('/rmd_database/', $database)) {
                        ?>
                        <img src="../images/rmd.jpg" style="height: 25px;">
                        <label style="font-size: large;">RMD Engineering College </label>

                        <?php
                    }

                    if (preg_match('/rmk_database/', $database)) {
                        ?>
                        <img src="../images/rmk.jpg" style="height: 25px;">
                        <label style="font-size: large;">RMK Engineering College </label>

                        <?php
                    }

                    if (preg_match('/rmkcet_database/', $database)) {
                        ?>
                        <img src="../images/rmkcet.jpg" style="height: 25px;">
                        <label style="font-size: large;">RMK College of Engineering and Technology </label>

                        <?php
                    }


                    ?>
                </small>
            </a>
        </div>

        <div class="navbar-buttons navbar-header pull-right" role="navigation">
            <ul class="nav ace-nav">

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
                                        <img src="../assets/images/avatars/avatar.png" class="msg-photo"
                                             alt="Alex's Avatar"/>
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
                                        <img src="../assets/images/avatars/avatar3.png" class="msg-photo"
                                             alt="Susan's Avatar"/>
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
                                        <img src="../assets/images/avatars/avatar4.png" class="msg-photo"
                                             alt="Bob's Avatar"/>
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
                                        <img src="../assets/images/avatars/avatar2.png" class="msg-photo"
                                             alt="Kate's Avatar"/>
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
                                        <img src="../assets/images/avatars/avatar5.png" class="msg-photo"
                                             alt="Fred's Avatar"/>
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
                            <a href="../inbox.php">
                                See all messages
                                <i class="ace-icon fa fa-arrow-right"></i>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="light-blue dropdown-modal">
                    <a data-toggle="dropdown" href="#" class="dropdown-toggle">

                        <?php
                        include "../connect.php";
                        //$connect=mysqli_connect("localhost","root","","rmd_database");
                        $name = $_SESSION['user'];

                        $student_table = $_SESSION['table_name'];
                        $query = "select * from $student_table where st_roll='{$name}'";


                        $result = mysqli_query($connect, $query);

                        if (!$result) {


                            mysqli_error($connect);
                        }

                        while ($row = mysqli_fetch_assoc($result)) {


                            ?>


                            <img class="nav-user-photo" src="../images/<?php echo $row['st_pic']; ?>"
                                 alt="Jason's Photo"/>
                        <?php } ?>
                        <span class="user-info">
									<small>Welcome,</small>
									Student
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
                            <a href="../profile/profile.php">
                                <i class="ace-icon fa fa-user"></i>
                                Profile
                            </a>
                        </li>

                        <li class="divider"></li>

                        <li>
                            <a href="../../login_out/logout.php">
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
        try {
            ace.settings.loadState('main-container')
        } catch (e) {
        }
    </script>

    <div id="sidebar" class="sidebar                  responsive                    ace-save-state">
        <script type="text/javascript">
            try {
                ace.settings.loadState('sidebar')
            } catch (e) {
            }
        </script>

        <div class="sidebar-shortcuts" id="sidebar-shortcuts">
            <div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">


                <button class="btn btn-info" onclick="myfuncprofile()" id="myButton2">
                    <i class="ace-icon fa fa-pencil"></i>
                </button>

                <button class="btn btn-warning" onclick="myfuncjobs()" id="myButton3">
                    <i class="ace-icon fa fa-users"></i>
                </button>

                <button class="btn btn-danger" onclick="myfuncsettings()" id="myButton4">
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
                <a href="../index.php">
                    <i class="menu-icon fa fa-tachometer"></i>
                    <span class="menu-text">Dashboard</span>
                </a>

                <b class="arrow"></b>
            </li>

            <li class="">
                <a href="../profile/profile.php">
                    <i class="menu-icon fa fa-user"></i>
                    <span class="menu-text">
							Your Profile
							</span>


                </a>

                <b class="arrow"></b>


            </li>

            <li class="">
                <a href="../settings.php">
                    <i class="menu-icon fa fa-list"></i>
                    <span class="menu-text"> Settings </span>


                </a>

                <b class="arrow"></b>


            </li>
            <li class="active">
                <a href="../jobs/view_jobs.php">
                    <i class="menu-icon fa fa-briefcase"></i>
                    <span class="menu-text"> Jobs</span>


                </a>

                <b class="arrow"></b>


            </li>

            <li class="">
                <a href="../company/companies.php">

                    <i class="menu-icon fa fa-laptop"></i>

                    <span class="menu-text">Companies</span>
                </a>

                <b class="arrow"></b>
            </li>



        </ul><!-- /.nav-list -->

        <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
            <i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state"
               data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
        </div>
    </div>

    <div class="main-content">
        <div class="main-content-inner">
            <div class="breadcrumbs ace-save-state" id="breadcrumbs">
                <ul class="breadcrumb">
                    <li>
                        <i class="ace-icon fa fa-home home-icon"></i>
                        <a href="#">Home</a>
                    </li>
                    <li class="active">Jobs</li>
                </ul><!-- /.breadcrumb -->
                <!-- /.nav-search -->
            </div>

            <div class="page-content">
                <!-- /.ace-settings-container -->

                <div class="page-header">
                    <h1>
                        Jobs
                    </h1>
                </div><!-- /.page-header -->

                <div class="row">
                    <div class="col-xs-12">
                        <!-- PAGE CONTENT BEGINS -->

                        <?php
                        include "../connect.php";


                        $roll = $_SESSION['user'];
                        $branch = $_SESSION['student_branch'];

                        $student_table = $_SESSION['table_name'];
                        $get_student_query = "SELECT * FROM $student_table WHERE st_roll={$roll}";
                        $get_student_result = mysqli_query($connect, $get_student_query);
                        $get_student_row = mysqli_fetch_assoc($get_student_result);

                        $get_branch = $get_student_row['st_ugspecialization'];
                        $get_cgpa = $get_student_row['st_cgpa'];
                        $get_10percentage = $get_student_row['st_10thpercentage'];
                        $get_12percentage = $get_student_row['st_12thpercentage'];
                        $get_standingarrears = $get_student_row['st_standingarrears'];
                        $get_historyofarrears = $get_student_row['st_historyofarrears'];


                        $year_of_graduation = $_SESSION['year_of_graduation'];
                        //


                        $query = "SELECT * FROM jobs WHERE job_branch LIKE '%" . $branch . "%' and year_of_graduation='$year_of_graduation' ORDER BY sort  DESC";
                        $result = mysqli_query($connect, $query);
                        $i = 0;

                        if (!$result) {
                            die("" . mysqli_error($connect));
                        }

                        while ($row = mysqli_fetch_assoc($result)) {

                            $widget_color = array(' widget-color-blue', 'widget-color-green', 'widget-color-orange', 'widget-color-red', 'widget-color-pink', 'widget-color-green', 'widget-color-purple', 'widget-color-blue2', 'widget-color-red3', 'widget-color-blue3');

                            $i = $i % sizeof($widget_color);

                            if ($get_cgpa >= $row['job_cgpa'])


                                ?>


                                <div class="row">
                                <div class="col-xs-12 widget-container-col"  id="widget-container-col-2">
                                <div  class="<?php echo $widget_color[$i] ?>"   id="widget-box-1">
                            <div class="widget-header"><h5 class="widget-title bigger" style="color: white">Job</h5>

                                <div class="widget-toolbar no-border">

                                    <a href="#" data-action="fullscreen" class="orange2">
                                        <i class="ace-icon fa fa-expand"></i>
                                    </a>

                                    <a href="#" data-action="reload">
                                        <i class="ace-icon fa fa-refresh"></i>
                                    </a>

                                    <a href="#" data-action="collapse">
                                        <i class="ace-icon fa fa-chevron-up"></i>
                                    </a>

                                    <div class="widget-menu">
                                        <a href="#" data-action="settings" data-toggle="dropdown">
                                            <i class="ace-icon fa fa-bars"></i>
                                        </a>

                                        <ul class="dropdown-menu dropdown-menu-right dropdown-light-blue dropdown-caret dropdown-closer">
                                            <li>
                                                <a data-toggle="tab" href="#dropdown1">Closed</a>
                                            </li>

                                            <li>
                                                <a data-toggle="tab" href="#dropdown2">Available</a>
                                            </li>
                                        </ul>

                                    </div>
                                </div>
                            </div>

                            <div class="widget-body">
                                <div class="widget-main">


                                    <div class="row">
                                        <div class="table-responsive ">

                                            <table class="table table-striped table-hover " id="simple-table">
                                                <thead class="thin-border-bottom">
                                                <tr>
                                                    <th>
                                                        <font size="3">

                                                            <i class="ace-icon fa fa-user"></i>
                                                            Job Detail
                                                        </font>
                                                    </th>
                                                    <th class=" left">
                                                        <font size="3">
                                                            MoreDetails

                                                        </font>

                                                    </th>

                                                    <th>
                                                        <font size="3">
                                                            Campus Date

                                                        </font>

                                                    </th>
                                                    <th>
                                                        <font size="3">

                                                            Salary
                                                        </font>
                                                    </th>

                                                    <th>
                                                        <font size="3">


                                                            Apply Date
                                                        </font>
                                                    </th>
                                                    <th class=" "><font size="3">Status</font></th>
                                                    <th></th>
                                                </tr>
                                                </thead>

                                                <tbody>
                                                <tr>


                                                    <td height="80" width="370" class="">

                                                        <b>
                                                            <a href="zoho.php" class="job "
                                                               style="text-decoration:none; font-size: 23px"
                                                               data-action="reload">

                                                                <?php echo $row['company'] ?>


                                                            </a>
                                                            <br><br>


                                                        </b>
                                                        <div class="row col-md-12"
                                                             style="font-size: 17px; font-weight: bold;">

                                                            <label class="label label-warning center middle"
                                                                   style="size: 40px;"><b> Job: </b></label>

                                                            <div>
                                                                <?php echo $row['job_title'] ?>(Product)

                                                            </div>


                                                        </div>


                                                    </td>


                                                    <td>
                                                        <div class="action-buttons col-lg-offset-3">
                                                            <a href="#" class="green bigger-140 show-details-btn"
                                                               title="Show Details">
                                                                <i class="ace-icon fa fa-angle-double-down"></i>
                                                                <span class="sr-only">Details</span>
                                                            </a>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <font size="3">
                                                            <b>  <?php echo $row['campus_date'] ?></b>

                                                        </font>
                                                        <br>
                                                        <br>
                                                        <div class="row col-md-12" style="font-size: large; font-weight: bold;">

                                                            <label class="label label-info center middle"
                                                                   style="size: 40px;"><b>Venue:</b></label>

                                                            <div>
                                                                <?php echo $row['venue'] ?>


                                                            </div>


                                                        </div>


                                                    </td>


                                                    <td>

                                                        <font size="3">
                                                            <b>  <?php echo $row['salary'] ?></b>

                                                        </font>

                                                    </td>
                                                    <td>
                                                        <font size="3">
                                                            <b>  <?php echo $row['apply_before'] ?></b>

                                                        </font>

                                                    </td>
                                                    <?php

                                                    $dt = new DateTime("now", new DateTimeZone('Asia/Kolkata'));
                                                    $date1 = $dt->format('d-m-Y H:i A');
                                                    $date2 = $row['apply_before'];


                                                    $temp_current = explode(" ", $date1);
                                                    $temp_before = explode(" ", $date2);

                                                    $calc_date = strtotime($temp_before[0]) - strtotime($temp_current[0]) . "<br>";


                                                    if ($temp_before[2] == "PM") {

                                                        $tmp = $temp_before[1];
                                                        $tmp_value = explode(":", $tmp);

                                                        $temp_before[1] = $tmp_value[0] + 12 . ":" . $tmp_value[1];

                                                    }


                                                    $calc_time = strtotime($temp_before[1]) - strtotime($temp_current[1]) . "<br>";


                                                    include "../connect.php";
                                                    $check_query = "SELECT  _" . $row['job_id'] . "  FROM $student_table where st_roll={$roll}";
                                                    $check_result = mysqli_query($connect, $check_query);
                                                    $check_row = mysqli_fetch_assoc($check_result);




                                                    //eligible
                                                    if ($check_row["_" . $row['job_id']] == 'eligible') {

                                                        if ($calc_date > 0) {


                                                            ?>


                                                            <td class=" ">
                                                                <span class="label label-success"
                                                                      style="height: 30px; width: 80px; font-size: 18px;">Open</span>
                                                            </td>
                                                            <td>

                                                                <div>
                                                                    <button class="btn btn-primary btn-sm "
                                                                            onclick="apply('<?php echo $row['job_id'] ?>')">
                                                                        Apply
                                                                    </button>
                                                                </div>

                                                            </td>
                                                            <?php


                                                        } else if ($calc_date == 0 && $calc_time >= 0 ) {
                                                            ?>

                                                            <td class=" ">
                                                                <span class="label label-success"
                                                                      style="height: 30px; width: 80px; font-size: 18px;">Open</span>
                                                            </td>
                                                            <td>

                                                                <div>
                                                                    <button class="btn btn-primary btn-sm  "
                                                                            onclick="apply('<?php echo $row['job_id'] ?>')">
                                                                        Apply
                                                                    </button>
                                                                </div>

                                                            </td>


                                                            <?php


                                                        } else {

                                                            ?>

                                                            <td class=" ">
                                                                <span class="label label-danger"
                                                                      style="height: 30px; width: 80px; font-size: 18px;">Closed</span>
                                                            </td>
                                                            <td>

                                                                <div>
                                                                    <button class="btn btn-primary btn-sm  disabled">
                                                                        Apply
                                                                    </button>
                                                                </div>

                                                            </td>


                                                            <?php
                                                        }
                                                    }




                                                    //accepted and placed

                                                    else if ($check_row["_" . $row['job_id']] == 'accepted' || $check_row["_" . $row['job_id']] == 'placed'){

                                                        if ($calc_date > 0 ) {


                                                            ?>


                                                            <td class=" ">
                                                                <span class="label label-success"
                                                                      style="height: 30px; width: 80px; font-size: 18px;">Open</span>
                                                            </td>
                                                            <td>

                                                                <div>
                                                                    <button class="btn btn-primary btn-sm disabled">
                                                                        Applied
                                                                    </button>
                                                                </div>

                                                            </td>
                                                            <?php


                                                        } else if ($calc_date == 0 && $calc_time >= 0 ) {
                                                            ?>

                                                            <td class=" ">
                                                                <span class="label label-success"
                                                                      style="height: 30px; width: 80px; font-size: 18px;">Open</span>
                                                            </td>
                                                            <td>

                                                                <div>
                                                                    <button class="btn btn-primary btn-sm disabled ">
                                                                        Applied
                                                                    </button>
                                                                </div>

                                                            </td>


                                                            <?php


                                                        } else {

                                                            ?>

                                                            <td class=" ">
                                                                <span class="label label-danger"
                                                                      style="height: 30px; width: 80px; font-size: 18px;">Closed</span>
                                                            </td>
                                                            <td>

                                                                <div>
                                                                    <button class="btn btn-primary btn-sm  disabled">
                                                                        Applied
                                                                    </button>
                                                                </div>

                                                            </td>


                                                            <?php
                                                        }
                                                    }





                                                    //uneligible
                                                    else if ($check_row["_" . $row['job_id']] == 'uneligible'){



                                                        if ($calc_date > 0 ) {


                                                            ?>


                                                            <td class=" ">
                                                                <span class="label label-success"
                                                                      style="height: 30px; width: 80px; font-size: 18px;">Open</span>
                                                            </td>
                                                            <td>

                                                                <div>
                                                                    <button class="btn btn-primary btn-sm disabled">
                                                                        Apply
                                                                    </button>
                                                                </div>

                                                            </td>
                                                            <?php


                                                        } else if ($calc_date == 0 && $calc_time >= 0) {
                                                            ?>

                                                            <td class=" ">
                                                                <span class="label label-success"
                                                                      style="height: 30px; width: 80px; font-size: 18px;">Open</span>
                                                            </td>
                                                            <td>

                                                                <div>
                                                                    <button class="btn btn-primary btn-sm disabled ">
                                                                        Apply
                                                                    </button>
                                                                </div>

                                                            </td>


                                                            <?php


                                                        } else {

                                                            ?>

                                                            <td class=" ">
                                                                <span class="label label-danger"
                                                                      style="height: 30px; width: 80px; font-size: 18px;">Closed</span>
                                                            </td>
                                                            <td>

                                                                <div>
                                                                    <button class="btn btn-primary btn-sm  disabled">
                                                                        Apply
                                                                    </button>
                                                                </div>

                                                            </td>


                                                            <?php
                                                        }



                                                    }


                                                    ?>


                                                </tr>

                                                <tr class="detail-row">
                                                    <?php
                                                    $company_id = $row['company_id'];

                                                    $query_company = "SELECT * FROM company_list where company_id='$company_id'";
                                                    $result_company = mysqli_query($connect, $query_company);
                                                    $row_company = mysqli_fetch_assoc($result_company);


                                                    ?>
                                                    <td colspan="8">
                                                        <div class="table-detail">
                                                            <div class="row">
                                                                <div class="col-xs-6 col-sm-2">
                                                                    <div class="text-center ">
                                                                        <img height="150"
                                                                             class="thumbnail inline no-margin-bottom "
                                                                             alt="Domain Owner's Avatar"
                                                                             src="../../logos/<?php echo $row_company['company_logo']; ?>"/>

                                                                    </div>
                                                                </div>


                                                                <div class="col-xs-12 col-sm-10">
                                                                    <div class="space visible-xs"></div>

                                                                    <div class="profile-user-info  profile-user-info-striped">
                                                                        <div class="profile-info-row  ">
                                                                            <div class="profile-info-name "
                                                                                 style="min-width: 140px;"> Company Name
                                                                            </div>

                                                                            <div class="profile-info-value">
                                                                                <span><?php echo $row_company['company_name']; ?></span>
                                                                            </div>
                                                                        </div>

                                                                        <div class="profile-info-row">
                                                                            <div class="profile-info-name"> Website
                                                                            </div>

                                                                            <div class="profile-info-value">
                                                                                <span><?php echo $row_company['company_website']; ?></span>
                                                                            </div>
                                                                        </div>

                                                                        <div class="profile-info-row">
                                                                            <div class="profile-info-name"> Mail</div>

                                                                            <div class="profile-info-value">
                                                                                <span><?php echo $row_company['company_website']; ?></span>
                                                                            </div>
                                                                        </div>

                                                                        <div class="profile-info-row">
                                                                            <div class="profile-info-name">
                                                                                Eligibility
                                                                            </div>

                                                                            <div class="profile-info-value">
                                                                                <span>above <?php echo $row['job_cgpa']; ?>
                                                                                    cgpa</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="profile-info-row ">
                                                                            <div class="profile-info-name ">Company's
                                                                                Presentation
                                                                            </div>

                                                                            <div class="profile-info-value col-xs-6">
                                                                                <a href="download.php?file=<?php echo $row['company_id'] ?>"
                                                                                   name="presentation"
                                                                                   class="btn btn-yellow bold">Download
                                                                                    Presentation</a>
                                                                            </div>
                                                                        </div>
                                                                        <div id="download">


                                                                        </div>


                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>


                                                    </td>
                                                </tr>


                                                </tbody>
                                            </table>


                                        </div>
                                    </div>
                                </div>
                            </div>

                            </div>
                            </div>
                            </div>

                            <?php

                            $i++;


                        }


                        ?>


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
<script src="../assets/js/jquery-2.1.4.min.js"></script>

<!-- <![endif]-->

<!--[if IE]>
<script src="../assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
<script type="text/javascript">
    if ('ontouchstart' in document.documentElement) document.write("<script src='../assets/js/jquery.mobile.custom.min.js'>" + "<" + "/script>");
</script>
<script src="../assets/js/bootstrap.min.js"></script>
<!-- page specific plugin scripts -->
<script src="../assets/js/jquery.dataTables.min.js"></script>
<script src="../assets/js/jquery.dataTables.bootstrap.min.js"></script>
<script src="../assets/js/dataTables.buttons.min.js"></script>
<script src="../assets/js/buttons.flash.min.js"></script>
<script src="../assets/js/buttons.html5.min.js"></script>
<script src="../assets/js/buttons.print.min.js"></script>
<script src="../assets/js/buttons.colVis.min.js"></script>
<script src="../assets/js/dataTables.select.min.js"></script>

<!-- ace scripts -->
<script src="../assets/js/ace-elements.min.js"></script>
<script src="../assets/js/ace.min.js"></script>

<!-- inline scripts related to this page -->
<script type="text/javascript">
    jQuery(function ($) {
        //initiate dataTables plugin


        /***************/
        $('.show-details-btn').on('click', function (e) {
            e.preventDefault();
            $(this).closest('tr').next().toggleClass('open');
            $(this).find(ace.vars['.icon']).toggleClass('fa-angle-double-down').toggleClass('fa-angle-double-up');
        });
        /***************/


        /**
         //add horizontal scrollbars to a simple table
         $('#simple-table').css({'width':'2000px', 'max-width': 'none'}).wrap('<div style="width: 1000px;" />').parent().ace_scroll(
         {
           horizontal: true,
           styleClass: 'scroll-top scroll-dark scroll-visible',//show the scrollbars on top(default is bottom)
           size: 2000,
           mouseWheelLock: true
         }
         ).css('padding-top', '12px');
         */


    });
</script>
</body>
</html>