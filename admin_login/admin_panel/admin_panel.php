﻿
<?php session_start();
ob_start();





if(! isset($_SESSION['user']) && $_SESSION['user']==null){

    header("Location: ../login.html");


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
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../assets/font-awesome/4.5.0/css/font-awesome.min.css" />


    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


    <!--button-navigation-->
    <script type="text/javascript">
        function myfuncreport() {
            location.href = "../reports/reports.php";

        }
        function myfuncadmin() {
            location.href = "admin_panel.php";

        }
        function myfuncjobs() {
            location.href = "../jobs/jobs_panel.php";

        }
        function myfuncsettings() {
            location.href = "../settings.php";

        }function btnclick(){

            location.href = "../admin_panel/admin_panel.php";

        }
        function showStudent(str,table) {







            if (str == "") {
                document.getElementById("modal-form").innerHTML = "";

            } else {
                if (window.XMLHttpRequest) {
                    // code for IE7+, Firefox, Chrome, Opera, Safari
                    xmlhttp = new XMLHttpRequest();
                } else {
                    // code for IE6, IE5
                    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("modal-form").innerHTML = this.responseText;
                    }
                };
                xmlhttp.open("GET","../admin_panel/getstudent.php?id="+str+"&table="+table,true);
                xmlhttp.send();
            }


        }



        function showreports(){

            var e = document.getElementById("form-field-select-3");
            var strUser = e.options[e.selectedIndex].value;

            location.href = "admin_panel.php?year="+strUser;

        }




    </script>



    <!-- page specific plugin styles -->

    <link rel="stylesheet" href="../assets/css/jquery-ui.custom.min.css" />
    <link rel="stylesheet" href="../assets/css/chosen.min.css" />
    <link rel="stylesheet" href="../assets/css/bootstrap-datepicker3.min.css" />
    <link rel="stylesheet" href="../assets/css/bootstrap-timepicker.min.css" />
    <link rel="stylesheet" href="../assets/css/daterangepicker.min.css" />
    <link rel="stylesheet" href="../assets/css/bootstrap-datetimepicker.min.css" />
    <link rel="stylesheet" href="../assets/css/bootstrap-colorpicker.min.css" />




    <!-- text fonts -->
    <link rel="stylesheet" href="../assets/css/fonts.googleapis.com.css" />

    <!-- ace styles -->
    <link rel="stylesheet" href="../assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

    <!--[if lte IE 9]>
    <link rel="stylesheet" href="../assets/css/ace-part2.min.css" class="ace-main-stylesheet"/>
    <![endif]-->
    <link rel="stylesheet" href="../assets/css/ace-skins.min.css" />
    <link rel="stylesheet" href="../assets/css/ace-rtl.min.css" />

    <!--[if lte IE 9]>
    <link rel="stylesheet" href="../assets/css/ace-ie.min.css"/>
    <![endif]-->

    <!-- inline styles related to this page -->
    <link rel="stylesheet" href="../assets/css/jquery-ui.custom.min.css" />
    <link rel="stylesheet" href="../assets/css/chosen.min.css" />
    <link rel="stylesheet" href="../assets/css/bootstrap-datepicker3.min.css" />
    <link rel="stylesheet" href="../assets/css/bootstrap-timepicker.min.css" />
    <link rel="stylesheet" href="../assets/css/daterangepicker.min.css" />
    <link rel="stylesheet" href="../assets/css/bootstrap-datetimepicker.min.css" />
    <link rel="stylesheet" href="../assets/css/bootstrap-colorpicker.min.css" />


    <!-- ace settings handler -->
    <script src="../assets/js/ace-extra.min.js"></script>

    <!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

    <!--[if lte IE 8]>
    <script src="../assets/js/html5shiv.min.js"></script>
    <script src="../assets/js/respond.min.js"></script>
    <![endif]-->

    <style type="text/css">
        .test{
            width: 13px;
            height: 50px;
            padding: 20px;
            margin:0px 240px;

            position: relative;
            top: -47px;
            *overflow: hidden;

        }

        .myfont{

            font-size: 22px;
        }


    </style>





</head>

<body class="no-skin">




<?php


if(isset($_GET['delete'])){

    $userroll=$_GET['delete'];
    $table=$_GET['table'];


    include "../connect.php";

    $query="delete from ".$table." where st_roll='$userroll'";
    $result=mysqli_query($connect,$query);

    if(!$connect){

        die(" ".mysqli_error($connect));
    }

    header("Location: admin_panel.php?year=".$table);


}





if(isset($_POST['update_submit'])) {


    $get_roll= $_POST['stu_roll'];
    $get_name= $_POST['st_name'];
    $get_email= $_POST['st_email'];
    $get_phone= $_POST['st_phone'];
    $get_cgpa= $_POST['st_cgpa'];
    $get_pass= $_POST['st_pass'];

    $get_table=$_POST['table'];

    echo  "table name: ".$get_table;


    include "../connect.php";

    $query = "UPDATE ".$get_table." SET st_roll='$get_roll', st_name='{$get_name}',st_email='{$get_email}',st_phone='$get_phone',st_cgpa='$get_cgpa',st_pass='{$get_pass}' where st_roll='$get_roll'";

    $result = mysqli_query($connect, $query);

    if (!$connect) {

        die(" " . mysqli_error($connect));


    }
    if (!$result) {

        die(" " . mysqli_error($connect));


    }

    header("Location: admin_panel.php?year=".$get_table);



}




?>









<div id="navbar" class="navbar navbar-default          ace-save-state">
    <div class="navbar-container ace-save-state" id="navbar-container">
        <button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
            <span class="sr-only">Toggle sidebar</span>

            <span class="icon-bar"></span>

            <span class="icon-bar"></span>

            <span class="icon-bar"></span>
        </button>

        <div class="navbar-header pull-left">
            <a href="admin_panel.php" class="navbar-brand">
                <small>
                    <i class=""></i>
                    <?php

                    $database=$_SESSION['database_name'];
                    if(preg_match('/rmd_database/', $database)){
                        ?>
                        <img src="../images/rmd.jpg" style="height: 25px;">
                        <label style="font-size: large;">RMD Engineering College  </label>

                        <?php
                    }

                    if(preg_match('/rmk_database/', $database)){
                        ?>
                        <img src="../images/rmk.jpg" style="height: 25px;">
                        <label style="font-size: large;">RMK Engineering College </label>

                        <?php
                    }

                    if(preg_match('/rmkcet_database/', $database)){
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



                        <?php


                        include "../connect.php";
                        $query_table = "SELECT * FROM table_map";
                        $result_table = mysqli_query($connect, $query_table);

                        $no_notification=0;
                        while ($row = mysqli_fetch_assoc($result_table)) {
                            $tname = $row['table_name'];
                            $query_year = "SELECT * from $tname WHERE NOT  st_changephone='' OR NOT st_changemail=''";
                            $result_year = mysqli_query($connect, $query_year);

                            $no_notification  = $no_notification + mysqli_num_rows($result_year);


                        }



                        ?>











                        <i class="ace-icon fa fa-bell icon-animated-bell"></i>
                        <span class="badge badge-important"><?php echo $no_notification ?></span>
                    </a>

                    <ul class="dropdown-menu-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-close">
                        <li class="dropdown-header">
                            <i class="ace-icon fa fa-exclamation-triangle"></i>
                            <?php echo $no_notification ?> Notifications
                        </li>


                        <li class="dropdown-content">


                            <ul class="dropdown-menu dropdown-navbar navbar-pink">

                                <?php



                                include "../connect.php";
                                $query_table = "SELECT * FROM table_map";
                                $result_table = mysqli_query($connect, $query_table);

                                while ($row = mysqli_fetch_assoc($result_table)) {
                                    $tname = $row['table_name'];
                                    $query_year = "SELECT * from $tname";
                                    $result_year = mysqli_query($connect, $query_year);

                                    $no_notification=mysqli_num_rows($result_year);


                                    while ($row1 = mysqli_fetch_assoc($result_year)) {


                                        if ($row1['st_changemail'] != NULL || $row1['st_changephone']!= NULL) {


                                            ?>

                                            <li>
                                                <a href="../approve.php?roll=<?php  echo $row1['st_roll']; ?>">
                                                    <div class="clearfix">

		             <span class="pull-left">
			               <i class="btn btn-xs no-hover btn-pink fa fa-comment"></i>
                         <?php  $content= $row1['st_roll'] ;
                         $content.= "," ;
                         $content.= $row1['st_name'];

                         $content.= " has  requested for the change of";

                         if ($row1['st_changemail'] != NULL) {
                             $content.= " Email id : ";
                             $content.=$row1['st_email'];

                             $content.="to : ";
                             $content.=$row1['st_changemail'];



                         }

                         if($row1['st_changephone'] != NULL && $row1['st_changemail'] != NULL ){


                             $content.= " and  ";

                         }






                         if($row1['st_changephone'] != NULL) {



                             $content.= " Phone No : ";
                             $content.= $row1['st_phone'];

                             $content.= "to : ";
                             $content.= $row1['st_changephone'] ;
                         }




                         echo substr($content, 0,25)."......";


                         ?>


                         </p>
				</span>


                                                    </div>
                                                </a>
                                            </li>




                                            <?php
                                        }


                                    }


                                }


                                ?>




                            </ul>
                        </li>
                        <li class="dropdown-footer">
                            <a href="../approve.php">
                                See all notifications
                                <i class="ace-icon fa fa-arrow-right"></i>
                            </a>
                        </li>
                    </ul>
                </li>


                <li class="light-blue dropdown-modal">
                    <a data-toggle="dropdown" href="#" class="dropdown-toggle">

                        <?php
                        include "../connect.php";
                        $name=$_SESSION['user'];

                        $query="select * from login_admin where username='{$name}'";




                        $result=mysqli_query($connect,$query);

                        if(!$result){


                            mysqli_error($connect);
                        }

                        while($row=mysqli_fetch_assoc($result)){



                            ?>


                            <img class="nav-user-photo" src="../images/<?php echo $row['admin_pic']; ?>" alt="Jason's Photo" />
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
                <a href="../index.php">
                    <i class="menu-icon fa fa-tachometer"></i>
                    <span class="menu-text">Dashboard</span>
                </a>

                <b class="arrow"></b>
            </li>

            <li class="">
                <a href="../profile/profile.php" >
                    <i class="menu-icon fa fa-user"></i>
                    <span class="menu-text">
							Your Profile
							</span>


                </a>

                <b class="arrow"></b>


            </li>

            <li class="">
                <a href="../settings.php" >
                    <i class="menu-icon fa fa-list"></i>
                    <span class="menu-text"> Settings </span>


                </a>

                <b class="arrow"></b>


            </li>

            <li class="active">
                <a href="admin_panel.php" >
                    <i class="menu-icon fa fa-pencil-square-o"></i>
                    <span class="menu-text"> Admin Panel </span>


                </a>

                <b class="arrow"></b>


            </li>

            <li class="">
                <a href="../approve.php">
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
                        <a href="../jobs/view_jobs.php">
                            <i class="menu-icon fa fa-caret-right"></i>
                            View all Jobs
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="">
                        <a href="../jobs/post_jobs.php">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Post Job
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="">
                        <a href="../jobs/jobs_panel.php">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Jobs Panel
                        </a>

                        <b class="arrow"></b>
                    </li>

                </ul>

            </li>


            <li class="">
                <a href="../reports/reports.php">

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
                        <a href="../company/create_company.php">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Create Company
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="">
                        <a href="../company/view_companies.php">
                            <i class="menu-icon fa fa-caret-right"></i>
                            View Companies
                        </a>

                        <b class="arrow"></b>
                    </li>
                    <li class="">
                        <a href="../company/companies.php">
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
                        <a href="../search/advanced_search.php">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Advanced Search
                        </a>

                        <b class="arrow"></b>
                    </li>
                    <li class="">
                        <a href="../email/email.php">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Email
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="">
                        <a href="../inbox.php">
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
                        <a href="#">Home</a>
                    </li>
                    <li class="active">Admin Panel</li>
                </ul><!-- /.breadcrumb -->
                <!-- /.nav-search -->
            </div>

            <div class="page-content">
                <!-- /.ace-settings-container -->





                <div class="row">
                    <div class="col-xs-12">
                        <!-- PAGE CONTENT BEGINS -->







                        <div class="row">
                            <div class="col-xs-12">
                                <h3 class="header smaller lighter blue">Admin Panel</h3>


                                <div class="col-xs-4 col-xs-push-2">




                                    <label for="form-field-select-3">Select Year: </label>
                                    <select class="chosen-select form-control" id="form-field-select-3"  onchange="showreports()" data-placeholder="Select Year of Graduation">



                                        <?php
                                        $year_of_graduation=null;
                                        if(isset($_GET['year'])){

                                            $table = $_GET['year'];

                                            $query_get_year="SELECT * FROM table_map WHERE table_name='$table'";
                                            $result_get_year=mysqli_query($connect, $query_get_year);
                                            $row_get_year=mysqli_fetch_assoc($result_get_year);
                                            $year_of_graduation=$row_get_year['table_value'];

                                            ?>

                                            <option value="<?php echo $table ?>"><?php echo $year_of_graduation ?>  </option>
                                            <?php

                                        }
                                        else{
                                            ?>

                                            <option value=""> </option>
                                            <?php

                                        }

                                        include "../connect.php";
                                        $query_option="SELECT * FROM table_map";
                                        $result_option=mysqli_query($connect, $query_option);
                                        while($row_option=mysqli_fetch_assoc($result_option)){

                                            if($row_option['table_value']!=$year_of_graduation) {


                                                ?>

                                                <option value="<?php echo $row_option['table_name'] ?>"><?php echo $row_option['table_value'] ?>  </option>


                                                <?php
                                            }
                                        }

                                        ?>



                                    </select>

                                    <div class="space-16"></div>
                                </div>


                                <div class="space-16"></div>
                                <div class="space-16"></div>
                                <div class="space-16"></div>


                                <?php
                                if(isset($_GET['year'])){


                                    $table=$_GET['year'];



                                ?>
                                <div class="clearfix">
                                    <div class="pull-right tableTools-container"></div>
                                </div>

                                <div class="table-header">
                                    Results for "Students List"
                                </div>

                                <!-- div.table-responsive -->

                                <!-- div.dataTables_borderWrap -->
                                <div>
                                    <table id="dynamic-table" class="table table-striped table-bordered table-hover">
                                        <thead>
                                        <tr>
<!--                                            <th class="center">-->
<!--                                                <label class="pos-rel">-->
<!--                                                    <input type="checkbox" class="ace" />-->
<!--                                                    <span class="lbl"></span>-->
<!--                                                </label>-->
<!--                                            </th>-->


                                            <th>Roll No</th>
                                            <th>First Name</th>
                                            <th>Middle Name</th>
                                            <th>Last Name (Mandatory)</th>
                                            <th>Full Name</th>
                                            <th>Gender (Male/Female)</th>
                                            <th>Father Name</th>
                                            <th>Father Occupation</th>
                                            <th>Mother Name</th>
                                            <th>Mother Occupation</th>
                                            <th>
                                                <i class="ace-icon fa fa-clock-o bigger-110  "></i>Email ID
                                            </th>
                                            <th>Mobile Number (10 digits)</th>
                                            <th>Date of Birth (DD-MM-YYYY)</th>
                                            <th>Nationality</th>
                                            <th>Caste</th>
                                            <th>College Name</th>
                                            <th>University</th>
                                            <th>10th %</th>
                                            <th>Board of Study</th>
                                            <th>Medium (Tamil/English/Telugu/Others)</th>
                                            <th>10th - Year of Passing</th>
                                            <th>12th %</th>
                                            <th>Board of Study</th>
                                            <th>Medium (Tamil/English/Telugu/Others)</th>
                                            <th>12th - Year of Passing</th>
                                            <th>Diploma  %</th>
                                            <th>Diploma - Year of Passing</th>
                                            <th>Currently Pursuing (UG/PG)</th>
                                            <th>UG Degree</th>
                                            <th>UG Specialization</th>
                                            <th>1st Sem</th>
                                            <th>2nd Sem</th>
                                            <th>3rd Sem</th>
                                            <th>4th Sem</th>
                                            <th>5th Sem</th>
                                            <th>6th Sem</th>
                                            <th>7th Sem</th>
                                            <th>8th Sem</th>
                                            <th>UG Degree % or CGPA (uptolast semester for which results announced)</th>
                                            <th>UG - Year of Passing</th>
                                            <th>PG Degree</th>
                                            <th>PG Specialization</th>
                                            <th>1st Sem</th>
                                            <th>2nd Sem</th>
                                            <th>3rd Sem</th>
                                            <th>4th Sem</th>
                                            <th>PG Degree % or CGPA (upto last semester for which results announced)</th>
                                            <th>PG - Year of Passing</th>
                                            <th>Day Scholar/ Hosteler</th>
                                            <th>No History of Arreas</th>
                                            <th>Current Degree. No of Standing Arrears</th>
                                            <th>Home Town</th>
                                            <th>Permanent Address (Line 1)</th>
                                            <th>Permanent Address (Line 2)</th>
                                            <th>Permanent City</th>
                                            <th>State</th>
                                            <th>Postal code</th>
                                            <th>Contact Number ( Landline)</th>
                                            <th>If any Skill Certifications Obtained Name the Skill</th>
                                            <th>Duration of the course</th>
                                            <th>Certification Vendor/Authority/Agency Name</th>
                                            <th>CoE Certification</th>
                                            <th>Gap in studies</th>
                                            <th>Gap in studies Reason</th>
                                            <th>English Percentage</th>
                                            <th>Quantitative  Percentage</th>
                                            <th>Logical Percentage</th>
                                            <th>Overall Average</th>
                                            <th>Percentage</th>
                                            <th>Candidate ID</th>
                                            <th>Signature</th>
                                            <th>Placement Status</th>


                                            <th></th>
                                        </tr>
                                        </thead>

                                        <tbody>

                                        <?php

                                        include "../connect.php";

                                        $query="select * from ".$table." ";
                                        $result=mysqli_query($connect,$query);


                                        while($row=mysqli_fetch_assoc($result)){
                                            $roll=$row['st_roll'];
                                            $first_name=$row['st_firstname'];
                                            $middle_name=$row['st_middlename'];
                                            $last_name=$row['st_lastname'];
                                            $name=$row['st_name'];
                                            $gender=$row['st_gender'];
                                            $father_name=$row['st_fathername'];
                                            $father_occupation=$row['st_fatheroccupation'];
                                            $mother_name=$row['st_mothername'];
                                            $mother_occupation=$row['st_motheroccupation'];
                                            $email=$row['st_email'];
                                            $phone=$row['st_phone'];
                                            $dob=$row['st_dob'];
                                            $nationality=$row['st_nationality'];
                                            $caste=$row['st_caste'];
                                            $college_name=$row['st_collegename'];
                                            $university=$row['st_university'];
                                            $_10percentage=$row['st_10thpercentage'];
                                            $_10boardofstudy=$row['st_10thboardofstudy'];
                                            $_10medium=$row['st_10thmedium'];
                                            $_10yearofpassing=$row['st_10thyearofpassing'];
                                            $_12percentage=$row['st_12thpercentage'];
                                            $_12boardofstudy=$row['st_12thboardofstudy'];
                                            $_12medium=$row['st_12thmedium'];
                                            $_12yearofpassing=$row['st_12thyearofpassing'];
                                            $dippercentage=$row['st_dippercentage'];
                                            $dipyearofpassing=$row['st_dipyearofpassing'];
                                            $current=$row['st_currentlypursuing'];
                                            $ugdeg=$row['st_ugdegree'];
                                            $ugspecial=$row['st_ugspecialization'];
                                            $ug1sem=$row['st_1stsem'];
                                            $ug2sem=$row['st_2ndsem'];
                                            $ug3sem=$row['st_3rdsem'];
                                            $ug4sem=$row['st_4thsem'];
                                            $ug5sem=$row['st_5thsem'];
                                            $ug6sem=$row['st_6thsem'];
                                            $ug7sem=$row['st_7thsem'];
                                            $ug8sem=$row['st_8thsem'];
                                            $cgpa=$row['st_cgpa'];
                                            $ugyearofpassing=$row['st_ugyearofpassing'];
                                            $pgdeg=$row['st_pgdegree'];
                                            $pgspecial=$row['st_pgspecialization'];
                                            $pg1sem=$row['st_pg1stsem'];
                                            $pg2sem=$row['st_pg2ndsem'];
                                            $pg3sem=$row['st_pg3rdsem'];
                                            $pg4sem=$row['st_pg4thsem'];
                                            $pgcgpa=$row['st_pgcgpa'];
                                            $pgyearofpassing=$row['st_pgyearofpassing'];
                                            $dayhostel=$row['st_dayorhostel'];
                                            $historyofarrears=$row['st_historyofarrears'];
                                            $standingarrears=$row['st_standingarrears'];
                                            $hometown=$row['st_hometown'];
                                            $address1=$row['st_address1'];
                                            $address2=$row['st_address2'];
                                            $city=$row['st_city'];
                                            $state=$row['st_state'];
                                            $postal_code=$row['st_posatlcode'];
                                            $landline=$row['st_landline'];
                                            $skill=$row['st_skillcertification'];
                                            $duration=$row['st_duration'];
                                            $vendor=$row['st_vendor'];
                                            $coecertification=$row['st_coecertification'];
                                            $gap=$row['st_gapinstudies'];
                                            $reason=$row['st_reason'];
                                            $english=$row['st_english'];
                                            $quantitative=$row['st_quantitative'];
                                            $logical=$row['st_logical'];
                                            $overall=$row['st_overall'];
                                            $percentage=$row['st_percentage'];
                                            $candidate=$row['st_candidateid'];
                                            $signature=$row['st_signature'];
                                            $placement_status=$row['st_placementstatus'];



                                            ?>


                                            <tr>
<!--                                                <td class="center">-->
<!--                                                    <label class="pos-rel">-->
<!--                                                        <input type="checkbox" class="ace" />-->
<!--                                                        <span class="lbl"></span>-->
<!--                                                    </label>-->
<!--                                                </td>-->

                                                <td>

                                                    <?php echo $roll ?>

                                                </td>
                                                <td>
                                                    <?php echo $first_name ?>
                                                </td>
                                                <td class=" "><?php echo $middle_name ?></td>

                                                <td><?php echo $last_name  ?></td>
                                                <td><?php echo $name  ?></td>
                                                <td><?php echo  $gender ?></td>
                                                <td><?php echo $father_name ?></td>
                                                <td><?php echo $father_occupation ?></td>
                                                <td><?php echo $mother_name ?></td>
                                                <td><?php echo $mother_occupation ?></td>
                                                <td><?php echo $email ?></td>
                                                <td><?php echo $phone ?></td>
                                                <td><?php echo $dob ?></td>
                                                <td><?php echo $nationality ?></td>
                                                <td><?php echo $caste ?></td>
                                                <td><?php echo $college_name ?></td>
                                                <td><?php echo $university ?></td>
                                                <td><?php echo $_10percentage ?></td>
                                                <td><?php echo $_10boardofstudy ?></td>
                                                <td><?php echo $_10medium ?></td>
                                                <td><?php echo $_10yearofpassing ?></td>
                                                <td><?php echo $_12percentage ?></td>
                                                <td><?php echo $_12boardofstudy ?></td>
                                                <td><?php echo $_12medium ?></td>
                                                <td><?php echo $_12yearofpassing ?></td>
                                                <td><?php echo $dippercentage ?></td>
                                                <td><?php echo $dipyearofpassing ?></td>
                                                <td><?php echo $current ?></td>
                                                <td><?php echo $ugdeg ?></td>
                                                <td><?php echo $ugspecial ?></td>
                                                <td><?php echo $ug1sem ?></td>
                                                <td><?php echo $ug2sem ?></td>
                                                <td><?php echo $ug3sem ?></td>
                                                <td><?php echo $ug4sem ?></td>
                                                <td><?php echo $ug5sem ?></td>
                                                <td><?php echo $ug6sem ?></td>
                                                <td><?php echo $ug7sem ?></td>
                                                <td><?php echo $ug8sem ?></td>
                                                <?php

                                                if($cgpa>8){


                                                    ?>
                                                    <td class=" ">
                                                        <span class="label label-sm label-success"><?php echo $cgpa ?></span>
                                                    </td>
                                                    <?php

                                                }

                                                else{

                                                    ?>
                                                    <td class=" ">
                                                        <span class="label label-sm label-important"><?php echo $cgpa ?></span>
                                                    </td>
                                                    <?php

                                                }

                                                ?>

                                                <td><?php echo $ugyearofpassing ?></td>
                                                <td><?php echo $pgdeg ?></td>
                                                <td><?php echo $pgspecial ?></td>
                                                <td><?php echo $pg1sem ?></td>
                                                <td><?php echo $pg2sem ?></td>
                                                <td><?php echo $pg3sem ?></td>
                                                <td><?php echo $pg4sem ?></td>
                                                <td><?php echo $pgcgpa ?></td>
                                                <td><?php echo $pgyearofpassing ?></td>
                                                <td><?php echo $dayhostel ?></td>
                                                <td><?php echo $historyofarrears ?></td>
                                                <td><?php echo $standingarrears ?></td>
                                                <td><?php echo $hometown ?></td>
                                                <td><?php echo $address1 ?></td>
                                                <td><?php echo $address2 ?></td>
                                                <td><?php echo $city ?></td>
                                                <td><?php echo $state ?></td>
                                                <td><?php echo $postal_code ?></td>
                                                <td><?php echo $landline ?></td>
                                                <td><?php echo $skill ?></td>
                                                <td><?php echo $duration ?></td>
                                                <td><?php echo $vendor ?></td>
                                                <td><?php echo $coecertification ?></td>
                                                <td><?php echo $gap ?></td>
                                                <td><?php echo $reason ?></td>
                                                <td><?php echo $english ?></td>
                                                <td><?php echo $quantitative ?></td>
                                                <td><?php echo $logical ?></td>
                                                <td><?php echo $overall ?></td>
                                                <td><?php echo $percentage ?></td>
                                                <td><?php echo $candidate ?></td>
                                                <td><?php echo $signature ?></td>
                                                <td><?php echo $placement_status ?></td>



                                                <td>
                                                    <div class="hidden-sm hidden-xs action-buttons">




                                                        <a class="green" href="#modal-form" role="button"  data-toggle="modal" onclick="showStudent('<?php echo $roll ?>','<?php echo $table ?>')">
                                                            <i class="ace-icon fa fa-pencil bigger-130"></i>
                                                        </a>
                                                        <a class="red" href="../admin_panel/admin_panel.php?delete=<?php echo $roll ?>&table=<?php echo $table ?>">
                                                            <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                                        </a>
                                                    </div>

                                                    <div class="hidden-md hidden-lg">
                                                        <div class="inline pos-rel">
                                                            <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                                <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                                            </button>

                                                            <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">


                                                                <li>
                                                                    <a href="#modal-form" class="tooltip-success" data-toggle="modal"
                                                                       data-rel="tooltip" title="Edit"  onclick="showStudent('<?php echo $roll ?>','<?php echo $table ?>')">

																				<span class="green">
																					<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																				</span>
                                                                    </a>
                                                                </li>

                                                                <li>
                                                                    <a href="../admin_panel/admin_panel.php?delete=<?php echo $roll ?>" class="tooltip-error" data-rel="tooltip" title="Delete">
																				<span class="red">
																					<i class="ace-icon fa fa-trash-o bigger-120"></i>
																				</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>











                                            <?php



                                        }



                                        ?>

                                        </tbody>


                                    </table>

                                    <div id="modal-form" class="modal" tabindex="-1">

                                    </div>



                                </div>
                            <?php } ?>

                            </div>
                        </div>





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
<script src="../assets/js/jquery-ui.custom.min.js"></script>
<script src="../assets/js/jquery.ui.touch-punch.min.js"></script>
<script src="../assets/js/jquery.easypiechart.min.js"></script>
<script src="../assets/js/jquery.sparkline.index.min.js"></script>
<script src="../assets/js/jquery.flot.min.js"></script>
<script src="../assets/js/jquery.flot.pie.min.js"></script>
<script src="../assets/js/jquery.flot.resize.min.js"></script>

<!--[if IE]>
<script src="../assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
<script type="text/javascript">
    if('ontouchstart' in document.documentElement) document.write("<script src='../assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
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

<script src="../assets/js/jquery-ui.custom.min.js"></script>
<script src="../assets/js/jquery.ui.touch-punch.min.js"></script>
<script src="../assets/js/chosen.jquery.min.js"></script>
<script src="../assets/js/spinbox.min.js"></script>
<script src="../assets/js/bootstrap-datepicker.min.js"></script>
<script src="../assets/js/bootstrap-timepicker.min.js"></script>
<script src="../assets/js/moment.min.js"></script>
<script src="../assets/js/daterangepicker.min.js"></script>
<script src="../assets/js/bootstrap-datetimepicker.min.js"></script>
<script src="../assets/js/bootstrap-colorpicker.min.js"></script>
<script src="../assets/js/jquery.knob.min.js"></script>
<script src="../assets/js/autosize.min.js"></script>
<script src="../assets/js/jquery.inputlimiter.min.js"></script>
<script src="../assets/js/jquery.maskedinput.min.js"></script>
<script src="../assets/js/bootstrap-tag.min.js"></script>




<script src="../../vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
<script src="../../vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="../../vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="../../vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
<script src="../../vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
<script src="../../vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
<script src="../../vendors/jszip/dist/jszip.min.js"></script>
<script src="../../vendors/pdfmake/build/pdfmake.min.js"></script>
<script src="../../vendors/pdfmake/build/vfs_fonts.js"></script>

















<!-- ace scripts -->
<script src="../assets/js/ace-elements.min.js"></script>
<script src="../assets/js/ace.min.js"></script>

<!-- inline scripts related to this page -->


<script type="text/javascript">







    jQuery(function($) {


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
                if(which == 2) $('#form-field-select-4').addClass('tag-input-style').backgroundColor('red');
                else $('#form-field-select-4').removeClass('tag-input-style');
            });
        }





        //initiate dataTables plugin
        var myTable =
            $('#dynamic-table')
            //.wrap("<div class='dataTables_borderWrap' />")   //if you are applying horizontal scrolling (sScrollX)
                .DataTable( {
                    bAutoWidth: false,
                    "aoColumns": [



                        null, null, null, null, null, null, null, null, null, null,
                        null, null, null, null, null, null, null, null, null ,null,
                        null, null,null, null, null, null, null, null, null, null,
                        null, null,null, null, null, null, null, null, null, null,
                        null, null,null, null, null, null, null, null, null, null,
                        null, null,null, null, null, null, null, null, null, null,
                        null, null,null, null, null, null, null, null, null, null,
                        null,null,


                        { "bSortable": false }
                    ],
                    "aaSorting": [],



                    //"bProcessing": true,
                    //"bServerSide": true,
                    //"sAjaxSource": "http://127.0.0.1/table.php"	,

                    //,
                    //"sScrollY": "200px",
                    //"bPaginate": false,

                    "sScrollX": "100%"
                    //"sScrollXInner": "120%",
                    //"bScrollCollapse": true,
                    //Note: if you are applying horizontal scrolling (sScrollX) on a ".table-bordered"
                    //you may want to wrap the table inside a "div.dataTables_borderWrap" element

                    //"iDisplayLength": 50

//
//                    select: {
//                        style: 'multi'
//                    }
                } );



        $.fn.dataTable.Buttons.defaults.dom.container.className = 'dt-buttons btn-overlap btn-group btn-overlap';

        new $.fn.dataTable.Buttons( myTable, {
            buttons: [
                {
                    "extend": "colvis",
                    "text": "<i class='fa fa-search bigger-110 blue'></i> <span class='hidden'>Show/hide columns</span>",
                    "className": "btn btn-white btn-primary btn-bold",
                    columns: ':not(:first):not(:last)'
                },
                {
                    "extend": "copy",
                    "text": "<i class='fa fa-copy bigger-110 pink'></i> <span class='hidden'>Copy to clipboard</span>",
                    "className": "btn btn-white btn-primary btn-bold"
                },
                {
                    "extend": "csv",
                    "text": "<i class='fa fa-database bigger-110 orange'></i> <span class='hidden'>Export to CSV</span>",
                    "className": "btn btn-white btn-primary btn-bold"


                },
//                {
//                    extend: 'excelHtml5',
//                    "text": "<i class='fa fa-file-excel-o bigger-110 green'></i> <span class='hidden'>Export to Excel</span>",
//                   "className": "btn btn-white btn-primary btn-bold"
//
//                },
                {
                    "extend": "excel",
                    "text": "<i class='fa fa-file-excel-o bigger-110 green'></i> <span class='hidden'>Export to Excel</span>",
                    "className": "btn btn-white btn-primary btn-bold"
                },
                {
                    "extend": "pdf",
                    "text": "<i class='fa fa-file-pdf-o bigger-110 red'></i> <span class='hidden'>Export to PDF</span>",
                    "className": "btn btn-white btn-primary btn-bold"
                },
                {
                    "extend": "print",
                    "text": "<i class='fa fa-print bigger-110 grey'></i> <span class='hidden'>Print</span>",
                    "className": "btn btn-white btn-primary btn-bold",
                    autoPrint: false,
                    message: 'This print was produced using the Print button for DataTables'
                }
            ]
        } );
        myTable.buttons().container().appendTo( $('.tableTools-container') );


        $('#chk1').click(function(){
            $("button").toggle(200, function(){
                location.href="admin_panel.php"
            });
        });

        //style the message box
        var defaultCopyAction = myTable.button(1).action();
        myTable.button(1).action(function (e, dt, button, config) {
            defaultCopyAction(e, dt, button, config);
            $('.dt-button-info').addClass('gritter-item-wrapper gritter-info gritter-center white');
        });


        var defaultColvisAction = myTable.button(0).action();
        myTable.button(0).action(function (e, dt, button, config) {

            defaultColvisAction(e, dt, button, config);


            if($('.dt-button-collection > .dropdown-menu').length == 0) {
                $('.dt-button-collection')
                    .wrapInner('<ul class="dropdown-menu dropdown-light dropdown-caret dropdown-caret" />')
                    .find('a').attr('href', '#').wrap("<li />")
            }
            $('.dt-button-collection').appendTo('.tableTools-container .dt-buttons')
        });

        ////

        setTimeout(function() {
            $($('.tableTools-container')).find('a.dt-button').each(function() {
                var div = $(this).find(' > div').first();
                if(div.length == 1) div.tooltip({container: 'body', title: div.parent().text()});
                else $(this).tooltip({container: 'body', title: $(this).text()});
            });
        }, 500);






        myTable.on( 'select', function ( e, dt, type, index ) {
            if ( type === 'row' ) {
                $( myTable.row( index ).node() ).find('input:checkbox').prop('checked', true);
            }
        } );
        myTable.on( 'deselect', function ( e, dt, type, index ) {
            if ( type === 'row' ) {
                $( myTable.row( index ).node() ).find('input:checkbox').prop('checked', false);
            }
        } );




        /////////////////////////////////
        //table checkboxes
        $('th input[type=checkbox], td input[type=checkbox]').prop('checked', false);



        //select/deselect all rows according to table header checkbox
        $('#dynamic-table > thead > tr > th input[type=checkbox], #dynamic-table_wrapper input[type=checkbox]').eq(0).on('click', function(){
            var th_checked = this.checked;//checkbox inside "TH" table header

            $('#dynamic-table').find('tbody > tr').each(function(){
                var row = this;
                if(th_checked) myTable.row(row).select();
                else  myTable.row(row).deselect();
            });
        });


        //select/deselect a row when the checkbox is checked/unchecked
        $('#dynamic-table').on('click', 'tr input[type=checkbox]' , function(){
            var $row = $(this).closest('tr');
            if(this.checked) $row.addClass("selected highlight");
            else $row.removeClass("selected highlight");
        });



        $(document).on('click', '#dynamic-table .dropdown-toggle', function(e) {
            e.stopImmediatePropagation();
            e.stopPropagation();
            e.preventDefault();
        });



        //And for the first simple table, which doesn't have TableTools or dataTables
        //select/deselect all rows according to table header checkbox
        var active_class = 'active';
        $('#simple-table > thead > tr > th input[type=checkbox]').eq(0).on('click', function(){
            var th_checked = this.checked;//checkbox inside "TH" table header

            $(this).closest('table').find('tbody > tr').each(function(){
                var row = this;
                if(th_checked) $(row).addClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', true);
                else $(row).removeClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', false);
            });
        });

        //select/deselect a row when the checkbox is checked/unchecked
        $('#simple-table').on('click', 'td input[type=checkbox]' , function(){
            var $row = $(this).closest('tr');
            if($row.is('.detail-row ')) return;
            if(this.checked) $row.addClass(active_class);
            else $row.removeClass(active_class);
        });



        /********************************/
        //add tooltip for small view action buttons in dropdown menu
        $('[data-rel="tooltip"]').tooltip({placement: tooltip_placement});

        //tooltip placement on right or left
        function tooltip_placement(context, source) {
            var $source = $(source);
            var $parent = $source.closest('table')
            var off1 = $parent.offset();
            var w1 = $parent.width();

            var off2 = $source.offset();
            //var w2 = $source.width();

            if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
            return 'left';
        }




        /***************/
        $('.show-details-btn').on('click', function(e) {
            e.preventDefault();
            $(this).closest('tr').next().toggleClass('open');
            $(this).find(ace.vars['.icon']).toggleClass('fa-angle-double-down').toggleClass('fa-angle-double-up');
        });
        /***************/



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


    })
</script>

</body>
</html>