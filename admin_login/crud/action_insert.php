
<?php
session_start();
ob_start();




?>





















<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />
    <title>RMK HIRING SYNERGY </title>
    <link rel="icon" href="../../logos/rmklogo.JPG"  />

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
            location.href = "reports.php";

        }
        function myfuncadmin() {
            location.href = "admin_panel/admin_pane_woexport.php";

        }
        function myfuncjobs() {
            location.href = "jobs/jobs_panel.php";

        }
        function myfuncsettings() {
            location.href = "settings.php";

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


    <link rel="stylesheet" href="../assets/css/chosen.min.css" />

    <!-- text fonts -->
    <link rel="stylesheet" href="../assets/css/fonts.googleapis.com.css" />

    <!-- ace styles -->
    <link rel="stylesheet" href="../assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

    <!--[if lte IE 9]>
    <link rel="stylesheet" href="../assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
    <![endif]-->
    <link rel="stylesheet" href="../assets/css/ace-skins.min.css" />
    <link rel="stylesheet" href="../assets/css/ace-rtl.min.css" />

    <!--[if lte IE 9]>
    <link rel="stylesheet" href="../assets/css/ace-ie.min.css" />
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
<?php



if(! isset($_SESSION['user']) && $_SESSION['user']==null){

    header("Location: ../login.html");


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
            <a href="../index.php" class="navbar-brand">
                <small>
                    <i class=""></i>
                    <img src="../../logos/rmklogo.JPG" style="height: 25px;">
                    RMK Group of Institutions
                </small>
            </a>
        </div>

        <div class="navbar-buttons navbar-header  pull-right"  role="navigation">
            <ul class="nav ace-nav" style="">
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
            <li class="active">
                <a href="../index.php">
                    <i class="menu-icon fa fa-tachometer"></i>
                    <span class="menu-text"> Dashboard</span>
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

            <li class="">
                <a href="../admin_panel/admin_panel.php" >
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
                        <a href="../company/companies.php">
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
                        <a href="../../admin_login/search/advanced_search.php">
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
                        <a href="../../index.html">Home</a>
                    </li>
                    <li class="active">Dashboard</li>
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
                        Insert Records

                    </h1>
                </div><!-- /.page-header -->

                <div class="row">
                    <div class="col-xs-12">
                        <!-- PAGE CONTENT BEGINS -->


                        <?php


                        if(isset($_FILES['file'])){




                            $file_name = $_FILES['file']['name'];
                            $file_size = $_FILES['file']['size'];
                            $file_tmp = $_FILES['file']['tmp_name'];
                            $file_type = $_FILES['file']['type'];

                            $year=$_POST['hidden_field'];

                            $value = explode('.',$file_name);




                            $file_ext=strtolower(end($value));
                            $temp = explode(".", $file_name);
                            $newfilename = "file".time() . '.' . end($temp);

                            $extensions= array("xls","xlsx");


                            if(in_array($file_ext,$extensions)=== false){
                                $errors="extension not allowed, please choose a JPEG or PNG file.";
                            }

                            if($file_size > 2097152) {
                                $errors[]='File size must be excately 2 MB';
                            }

                            if(empty($errors)==true) {
                                move_uploaded_file($file_tmp,"files/".$newfilename);

                            }






                            include "../connect.php";
                            include ("PHPExcel/IOFactory.php");

                            $objPHPExcel = PHPExcel_IOFactory::load("files/$newfilename");
                            foreach ($objPHPExcel->getWorksheetIterator() as $worksheet)
                            {

                                $highestRow = $worksheet->getHighestRow();
                                for ($row=2; $row<=$highestRow; $row++)
                                {



                                    /* $id = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(0, $row)->getValue());
                                     $name = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(1, $row)->getValue());
                                     $position = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(2, $row)->getValue());*/


                                    $roll= mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(0, $row)->getValue());
                                    $first_name= mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(1, $row)->getValue());
                                    $middle_name= mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(2, $row)->getValue());
                                    $last_name= mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(3, $row)->getValue());
                                    $name= mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(4, $row)->getValue());
                                    $gender= mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(5, $row)->getValue());
                                    $father_name= mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(6, $row)->getValue());
                                    $father_occupation= mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(7, $row)->getValue());
                                    $mother_name= mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(8, $row)->getValue());
                                    $mother_occupation= mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(9, $row)->getValue());
                                    $email= mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(10, $row)->getValue());
                                    $phone= mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(11, $row)->getValue());
                                    $dob= mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(12, $row)->getValue());
                                    $nationality= mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(13, $row)->getValue());
                                    $caste= mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(14, $row)->getValue());
                                    $college_name= mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(15, $row)->getValue());
                                    $university= mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(16, $row)->getValue());
                                    $_10percentage= mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(17, $row)->getValue());
                                    $_10boardofstudy= mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(18, $row)->getValue());
                                    $_10medium= mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(19, $row)->getValue());
                                    $_10yearofpassing= mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(20, $row)->getValue());
                                    $_12percentage= mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(21, $row)->getValue());
                                    $_12boardofstudy= mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(22, $row)->getValue());
                                    $_12medium= mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(23, $row)->getValue());
                                    $_12yearofpassing= mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(24, $row)->getValue());
                                    $dippercentage= mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(25, $row)->getValue());
                                    $dipyearofpassing= mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(26, $row)->getValue());
                                    $current= mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(27, $row)->getValue());
                                    $ugdeg= mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(28, $row)->getValue());
                                    $ugspecial= mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(29, $row)->getValue());
                                    $ug1sem= mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(30, $row)->getValue());
                                    $ug2sem= mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(31, $row)->getValue());
                                    $ug3sem= mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(32, $row)->getValue());
                                    $ug4sem= mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(33, $row)->getValue());
                                    $ug5sem= mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(34, $row)->getValue());
                                    $ug6sem= mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(35, $row)->getValue());
                                    $ug7sem= mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(36, $row)->getValue());
                                    $ug8sem= mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(37, $row)->getValue());
                                    $cgpa= mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(38, $row)->getValue());
                                    $ugyearofpassing= mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(39, $row)->getValue());
                                    $pgdeg= mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(40, $row)->getValue());
                                    $pgspecial= mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(41, $row)->getValue());
                                    $pg1sem= mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(42, $row)->getValue());
                                    $pg2sem= mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(43, $row)->getValue());
                                    $pg3sem= mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(44, $row)->getValue());
                                    $pg4sem= mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(45, $row)->getValue());
                                    $pgcgpa= mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(46, $row)->getValue());
                                    $pgyearofpassing= mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(47, $row)->getValue());
                                    $dayhostel= mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(48, $row)->getValue());
                                    $historyofarrears= mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(49, $row)->getValue());
                                    $standingarrears= mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(50, $row)->getValue());
                                    $hometown= mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(51, $row)->getValue());
                                    $address1= mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(52, $row)->getValue());
                                    $address2= mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(53, $row)->getValue());
                                    $city= mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(54, $row)->getValue());
                                    $state= mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(55, $row)->getValue());
                                    $postal_code= mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(56, $row)->getValue());
                                    $landline= mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(57, $row)->getValue());
                                    $skill= mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(58, $row)->getValue());
                                    $duration= mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(59, $row)->getValue());
                                    $vendor= mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(60, $row)->getValue());
                                    $coecertification= mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(61, $row)->getValue());
                                    $gap= mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(62, $row)->getValue());
                                    $reason= mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(63, $row)->getValue());
                                    $english= mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(64, $row)->getValue());
                                    $quantitative= mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(65, $row)->getValue());
                                    $logical= mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(67, $row)->getValue());
                                    $overall= mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(68, $row)->getValue());
                                    $percentage= mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(69, $row)->getValue());
                                    $candidate= mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(70, $row)->getValue());
                                    $signature= mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(71, $row)->getValue());
                                    $placement_status= mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(72, $row)->getValue());



                                    $database_name=$_SESSION['database_name'];
                                    if(preg_match('/rmd_database/', $database_name)){

                                        $sql = "INSERT INTO students_$year VALUES ('$roll','$first_name','$middle_name','$last_name','$name','$gender','$father_name','$father_occupation','$mother_name','$mother_occupation','$email','$phone','$dob','$nationality','$caste','$college_name','$university','$_10percentage','$_10boardofstudy','$_10medium','$_10yearofpassing','$_12percentage','$_12boardofstudy','$_12medium','$_12yearofpassing','$dippercentage','$dipyearofpassing','$current','$ugdeg','$ugspecial','$ug1sem','$ug2sem','$ug3sem','$ug4sem','$ug5sem','$ug6sem','$ug7sem','$ug8sem','$cgpa','$ugyearofpassing','$pgdeg','$pgspecial','$pg1sem','$pg2sem','$pg3sem','$pg4sem','$pgcgpa','$pgyearofpassing','$dayhostel','$historyofarrears','$standingarrears','$hometown','$address1','$address2','$city','$state','$postal_code','$landline','$skill','$duration','$vendor','$coecertification','$gap','$reason','$english','$quantitative','$logical','$overall','$percentage','$candidate','$signature','$placement_status','student123','default_rmd.jpg','','')";
                                    }
                                    else if(preg_match('/rmk_database/', $database_name)){

                                        $sql = "INSERT INTO students_$year VALUES ('$roll','$first_name','$middle_name','$last_name','$name','$gender','$father_name','$father_occupation','$mother_name','$mother_occupation','$email','$phone','$dob','$nationality','$caste','$college_name','$university','$_10percentage','$_10boardofstudy','$_10medium','$_10yearofpassing','$_12percentage','$_12boardofstudy','$_12medium','$_12yearofpassing','$dippercentage','$dipyearofpassing','$current','$ugdeg','$ugspecial','$ug1sem','$ug2sem','$ug3sem','$ug4sem','$ug5sem','$ug6sem','$ug7sem','$ug8sem','$cgpa','$ugyearofpassing','$pgdeg','$pgspecial','$pg1sem','$pg2sem','$pg3sem','$pg4sem','$pgcgpa','$pgyearofpassing','$dayhostel','$historyofarrears','$standingarrears','$hometown','$address1','$address2','$city','$state','$postal_code','$landline','$skill','$duration','$vendor','$coecertification','$gap','$reason','$english','$quantitative','$logical','$overall','$percentage','$candidate','$signature','$placement_status','student123','default_rmk.jpg','','')";

                                    }
                                    else if(preg_match('/rmkcet_database/', $database_name)){

                                        $sql = "INSERT INTO students_$year VALUES ('$roll','$first_name','$middle_name','$last_name','$name','$gender','$father_name','$father_occupation','$mother_name','$mother_occupation','$email','$phone','$dob','$nationality','$caste','$college_name','$university','$_10percentage','$_10boardofstudy','$_10medium','$_10yearofpassing','$_12percentage','$_12boardofstudy','$_12medium','$_12yearofpassing','$dippercentage','$dipyearofpassing','$current','$ugdeg','$ugspecial','$ug1sem','$ug2sem','$ug3sem','$ug4sem','$ug5sem','$ug6sem','$ug7sem','$ug8sem','$cgpa','$ugyearofpassing','$pgdeg','$pgspecial','$pg1sem','$pg2sem','$pg3sem','$pg4sem','$pgcgpa','$pgyearofpassing','$dayhostel','$historyofarrears','$standingarrears','$hometown','$address1','$address2','$city','$state','$postal_code','$landline','$skill','$duration','$vendor','$coecertification','$gap','$reason','$english','$quantitative','$logical','$overall','$percentage','$candidate','$signature','$placement_status','student123','default_rmkcet.jpg','','')";
                                    }







                                    mysqli_query($connect, $sql);





                                    if(!$result){

                                        die("".mysqli_error($connect));
                                    }
                                }
                            }



                            unlink("files/$newfilename");
                            ?>

                            <div class="alert alert-block alert-success">
                                <button type="button" class="close" data-dismiss="alert">
                                    <i class="ace-icon fa fa-times"></i>
                                </button>

                                <i class="ace-icon fa fa-check green"></i>


                                <strong class="green">
                                    Successfully Inserted

                                </strong>


                            </div>
                            <div class="col-xs-6 bigger-120 ">

                                <a href="../index.php" class="btn btn-primary">
                                    Go Back

                                </a>

                            </div>
                            <div class="col-xs-6">



                            </div>

                            <?php




                        }



                        ?>









                        <div class="col-xs-8">
                            <form action="action_insert.php" method="post" enctype = "multipart/form-data">

                                <?php

                                if(isset($_GET['insert_year'])){

                                $get_year = $_GET['insert_year'];

                                echo "<input type='hidden' name='hidden_field' value='$get_year'>";


                                ?>

                                <div class="space-32"></div>


                                <input type="file" name="file" id="id-input-file-2"/>


                                <div class="space-32"></div>
                                <div class="space-32"></div>
                                <button type="submit" name="import" class="btn btn-lg btn-success ">
                                    <i class="ace-icon fa fa-download"></i>
                                    Import
                                </button>


                            </form>
                            <?php
                            }
                            ?>
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

<!--[if IE]>
<script src="../assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
<script type="text/javascript">
    if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
</script>
<script src="../assets/js/bootstrap.min.js"></script>

<!-- page specific plugin scripts -->

<!--[if lte IE 8]>
<script src="../assets/js/excanvas.min.js"></script>
<![endif]-->
<script src="../assets/js/jquery-ui.custom.min.js"></script>
<script src="../assets/js/jquery.ui.touch-punch.min.js"></script>
<script src="../assets/js/jquery.easypiechart.min.js"></script>

<script src="../assets/js/chosen.jquery.min.js"></script>
<script src="../assets/js/jquery.sparkline.index.min.js"></script>
<script src="../assets/js/jquery.flot.min.js"></script>
<script src="../assets/js/jquery.flot.pie.min.js"></script>
<script src="../assets/js/jquery.flot.resize.min.js"></script>

<!-- ace scripts -->
<script src="../assets/js/ace-elements.min.js"></script>
<script src="../assets/js/ace.min.js"></script>

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

                $(' #id-input-file-2').ace_file_input({
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


        $('[data-rel=tooltip]').tooltip({container:'body'});
        $('[data-rel=popover]').popover({container:'body'});

        autosize($('textarea[class*=autosize]'));





    });
</script>



</body>
</html>
