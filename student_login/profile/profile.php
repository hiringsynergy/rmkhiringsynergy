<?php ob_start();

    session_start();

    if(! isset($_SESSION['user']) && $_SESSION['user']==null){

        header("Location: ../login.html");

    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />
    <title>RMK Hiring Synergy</title>

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
        function myfuncprofile() {
            location.href = "profile.php";

        }
        function myfuncjobs() {
            location.href = "../jobs/view_jobs.php";

        }
        function myfuncsettings() {
            location.href = "../settings.php";

        }



    </script>







    <!-- page specific plugin styles -->
    <link rel="stylesheet" href="../assets/css/colorbox.min.css" />

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
    <style type="text/css">
        .test{


            width: 25%;
            color:#00A000;





        }
        .testorange{



            border-bottom-style: inset;
            border-bottom-color:#FDE3A7;


        }.testgreen{



             border-bottom-style: inset;
             border-bottom-color:#C8F7C5;
             border-left-color: #C8F7C5;

         }
        .testblue1{



             border-bottom-style: inset;
             border-bottom-color:#FFBCD8;


         }
        .testblue{



              border-bottom-style: inset;
              border-bottom-color:#EDF3F4;

          }
          .testred{

              border-bottom-style: inset;
              border-bottom-color:#F1A9A0;

          }
        .test3{

            margin-left: 10px;

        }
        .testblue1{

            border-bottom-style: inset;
            border-bottom-color:#C5EFF7;



        }
        .testpurple{

            border-bottom-style: inset;
            border-bottom-color:#DCC6E0;



        }
        #shadow{

            width: auto;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }



    </style>



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

if(isset($_FILES['image'])){






    $errors= array();
    $file_name = $_FILES['image']['name'];
    $file_size = $_FILES['image']['size'];
    $file_tmp = $_FILES['image']['tmp_name'];
    $file_type = $_FILES['image']['type'];

    $value = explode('.',$file_name);

    $name=$_SESSION['user'];

    $file_ext=end($value);
    $temp = explode('.', $file_name);
    $newfilename = time()."_".$name.'.'.$file_ext;


    include "../connect.php";
    //$connect=mysqli_connect("localhost","root","","rmd_database");
    $student_table=$_SESSION['table_name'];

    $select="SELECT st_pic from $student_table where st_roll='{$name}'";
    $select_result=mysqli_query($connect, $select);
    $row=mysqli_fetch_assoc($select_result);
    $old_file=$row['st_pic'];


    
     unlink("../images/".$old_file);

        move_uploaded_file($file_tmp,"../images/".$newfilename);
    $student_table=$_SESSION['table_name'];

    $query="UPDATE ".$student_table." SET  st_pic='{$newfilename}' WHERE st_roll='{$name}'";

    $result=mysqli_query($connect, $query);
    if(!$connect){

        die("".mysqli_error($connect));
    }
//    }else{
//        echo ($errors);
//    }

   header("Refresh: 800;url='profile.php'");

    header("Location: profile.php");



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

        <div class="navbar-header pull-left" ">
            <a href="profile.php" class="navbar-brand">
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


                <li class="light-blue dropdown-modal">
                    <a data-toggle="dropdown" href="#" class="dropdown-toggle">

                        <?php
                        include"../connect.php";
                        //$connect=mysqli_connect("localhost","root","","rmd_database");
                        $name=$_SESSION['user'];

                        $student_table=$_SESSION['table_name'];
                        $query="select * from $student_table where st_roll='{$name}'";




                        $result=mysqli_query($connect,$query);

                        if(!$result){


                            mysqli_error($connect);
                        }

                        while($row=mysqli_fetch_assoc($result)){



                            ?>


                            <img class="nav-user-photo" src="../images/<?php echo $row['st_pic']; ?>" alt="Jason's Photo" />
                        <?php } ?>
                        <span class="user-info">
									<small>Welcome,</small>
									Student
								</span>

                        <i class="ace-icon fa fa-caret-down"></i>
                    </a>

                    <ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
                        <li>
                            <a href="../settings.php">
                                <i class="ace-icon fa fa-cog"></i>
                                Settings
                            </a>
                        </li>

                        <li>
                            <a href="profile.php">
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

                <button class="btn btn-info"  onclick="myfuncprofile()" id="myButton2">
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

                <span class="btn btn-warning"></span>

                <span class="btn btn-danger"></span>
            </div>
        </div><!-- /.sidebar-shortcuts -->

        <ul class="nav nav-list">
            <li class="">
                <a href="../index.php">
                    <i class="menu-icon fa fa-tachometer"></i>
                    <span class="menu-text">  </span>
                    <span class="menu-text"> Dashboard </span>
                </a>

                <b class="arrow"></b>
            </li>

            <li class="active">
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
                    <li class="active">Profile</li>
                </ul><!-- /.breadcrumb -->
                <!-- /.nav-search -->
            </div>

            <div class="page-content">
                <!-- /.ace-settings-container -->

                <div class="page-header">
                    <h1>
                        Profile
                    </h1>
                </div><!-- /.page-header -->

                <div class="row">
                    <div class="col-xs-12">
                        <!-- PAGE CONTENT BEGINS -->
<?php

if(isset($_GET['changemailphone'])){

    include "../connect.php";


    $name=$_SESSION['user'];
    $student_table=$_SESSION['table_name'];


    $id=time();
    $phoneno=$_GET['phoneno'];
    $emailid=$_GET['emailid'];

    $select="SELECT * from $student_table where st_roll='{$name}'";
    $select_result=mysqli_query($connect, $select);
    $row=mysqli_fetch_assoc($select_result);
    $old_mail=$row['st_email'];






if($emailid!=$old_mail)
{
$name=$_SESSION['user'];
    $student_table=$_SESSION['table_name'];

    $query1="UPDATE $student_table SET  st_changemail='{$emailid}' WHERE st_roll='{$name}'";

    $result1=mysqli_query($connect, $query1);
?>
<div class="alert alert-block alert-success">
                                <button type="button" class="close" data-dismiss="alert">
                                    <i class="ace-icon fa fa-times"></i>
                                </button>

                                <i class="ace-icon fa fa-check green"></i>


                                <strong class="green">
                                    Your request for change Email id will be processed by the coordinator

                                </strong>


                            </div>
<?php
    if(!$connect){

        die("".mysqli_error($connect));
    }

}


    $old_phoneno=$row['st_phone'];

if($phoneno!=$old_phoneno)
{
    $name=$_SESSION['user'];
    $student_table=$_SESSION['table_name'];

    $query2="UPDATE $student_table SET  st_changephone='{$phoneno}' WHERE st_roll='{$name}'";




    $result2=mysqli_query($connect, $query2);
    if(!$connect){

        die("".mysqli_error($connect));
    }
?>
<div class="alert alert-block alert-success">
                                <button type="button" class="close" data-dismiss="alert">
                                    <i class="ace-icon fa fa-times"></i>
                                </button>

                                <i class="ace-icon fa fa-check green"></i>


                                <strong class="green">
                                    Your request for change Phone no will be processed by the coordinator

                                </strong>


                            </div>
<?php

}


}




?>



                        <div>
                            <div id="user-profile-1" class="user-profile row">
                                <div class="col-xs-12  col-sm-3 center">
                                    <div>
                                        <?php

                                        include "../connect.php";
                                        //$connect=mysqli_connect("localhost","root","","rmd_database");
                                        $name=$_SESSION['user'];
                                        $student_table=$_SESSION['table_name'];
                                        $query="SELECT * FROM $student_table WHERE st_roll='{$name}'";

                                        $result=mysqli_query($connect, $query);
                                        if(!$connect){

                                            die("".mysqli_error($connect));
                                        }
                                        while($row=mysqli_fetch_assoc($result)) {


                                            ?>


                                        <div class="space-4"></div>


                                        <div class="space-16"></div>




                                        <div class="col-xs-12  center middle align-center align-middle">
                                            <ul class="ace-thumbnails clearfix">



                                                <li>
                                                    <a href="../images/<?php echo $row['st_pic'] ?>" data-rel="colorbox">
                                                        <img style="max-height: 220px; max-width:300px ;"   src="../images/<?php echo $row['st_pic'] ?>" />
                                                        <div class="text">
                                                            <div class="inner">Click here to View</div>
                                                        </div>
                                                    </a>

                                                    <div class="tools tools-bottom">

                                                        <a href="#modal-form" role="button" data-toggle="modal">
                                                            <i class="ace-icon fa fa-pencil"></i>
                                                        </a>


                                                    </div>
                                                </li>










                                            </ul>
                                        </div>

                                            <?php

                                        }
                                        ?>







                                    </div>

                                    <div class="space-6"></div>



                                    <div class="hr hr12 dotted"></div>



                                    <div class="hr hr16 dotted"></div>
                                </div>

                                <?php

                                include "../connect.php";
                                //$connect=mysqli_connect("localhost","root","","rmd_database");
                                $name=$_SESSION['user'];
                                $student_table=$_SESSION['table_name'];
                                $query="SELECT * FROM $student_table WHERE st_roll='{$name}'";

                                $result=mysqli_query($connect, $query);
                                if(!$connect){

                                    die("".mysqli_error($connect));
                                }

                                $row=mysqli_fetch_assoc($result);



                                ?>

                                <div class="col-xs-12 col-sm-9">


                                    <div class="space-10"></div>


                                    <div class="col-xs-12 col-sm-12 widget-container-col" id="widget-container-col-1">
                                        <div class="widget-box widget-color-blue" id="shadow">
                                            <div class="widget-header">
                                                <h5 class="widget-title" style="color: white; font-weight: bold; font-size: 20px;" >Profile</h5>

                                                <div class="widget-toolbar">



                                                    <a href="#modal-form1" data-toggle="modal">

                                                        <i class=" ace-icon fa fa-pencil-square-o bigger-200 middle white"></i>

                                                    </a>

                                                </div>
                                            </div>

                                            <div class="widget-body">
                                                <div class="widget-main">




                                                    <div class="profile-user-info profile-user-info-striped bigger-110 bolder">


                                                        <div class="profile-info-row  ">
                                                            <div class="profile-info-name align-left test" style="background: #C5EFF7; color: #1F3A93;  " > <b>University Register Number</b></div>

                                                            <div class="profile-info-value testblue1">
                                                                <span class="editable" id="fn"><?php  echo $row['st_roll']  ?></span>
                                                            </div>
                                                        </div>

                                                        <div class="profile-info-row ">
                                                            <div class="profile-info-name align-left " style="background: #C5EFF7; color: #1F3A93;  "> <b>Full Name</b> </div>

                                                            <div class="profile-info-value testblue1">

                                                                <span class="editable " id="ln"><?php  echo $row['st_name']  ?></span>

                                                            </div>
                                                        </div>

                                                        <div class="profile-info-row">
                                                            <div class="profile-info-name align-left" style="background: #C5EFF7; color: #1F3A93;  "> <b>Mobile Number</b> </div>

                                                            <div class="profile-info-value testblue1">
                                                                <span class="editable" id="fn"><?php  echo $row['st_phone']  ?></span>
                                                            </div>
                                                        </div>

                                                        <div class="profile-info-row">
                                                            <div class="profile-info-name align-left" style="background: #C5EFF7; color: #1F3A93;  " > <b>Email-Id</b> </div>

                                                            <div class="profile-info-value testblue1">
                                                                <div class=" " id="dob"><?php  echo $row['st_email']  ?></div>
                                                            </div>
                                                        </div>

                                                        <div class="profile-info-row">
                                                            <div class="profile-info-name align-left" style="background: #C5EFF7; color: #1F3A93;  ">  <b>Current Cgpa</b> </div>

                                                            <div class="profile-info-value testblue1">
                                                                <div class=" " id="gen"><?php  echo $row['st_cgpa']  ?></div>
                                                            </div>
                                                        </div>
                                                        <div class="profile-info-row">
                                                            <div class="profile-info-name align-left" style="background: #C5EFF7; color: #1F3A93;  ">  <b>Collge Name</b> </div>

                                                            <div class="profile-info-value testblue1">
                                                                <div class=" " id="gen"><?php  echo $row['st_collegename']  ?></div>
                                                            </div>
                                                        </div>

                                                        <div class="profile-info-row">
                                                            <div class="profile-info-name align-left" style="background: #C5EFF7; color: #1F3A93;  ">  <b>University</b> </div>

                                                            <div class="profile-info-value testblue1">
                                                                <div class=" " id="gen">Anna University</div>
                                                            </div>
                                                        </div>



                                                    </div>



                                                </div>
                                            </div>
                                        </div>
                                    </div>




                           </div>
                                <div class="col-xs-12 col-sm-9 test3">



                                    <div class="space-16"></div>





                                    <div class="col-xs-12 col-lg-offset-4 widget-container-col" id="widget-container-col-1">
                                        <div class="widget-box widget-color-orange" id="shadow">
                                            <div class="widget-header ">
                                                <h5 class="widget-title" style="color: white; font-weight: bold; font-size: 20px;" >Personal Details</h5>
                                                <div class="widget-toolbar">

                                                </div>
                                            </div>

                                            <div class="widget-body">
                                                <div class="widget-main">



                                                    <div class="profile-user-info profile-user-info-striped bigger-110 bolder">


                                                        <div class="profile-info-row  ">
                                                            <div class="profile-info-name align-left test " style="background: #FDE3A7; color: #F9690E;  " > <b>First Name</b></div>

                                                            <div class="profile-info-value testorange">
                                                                <span class="editable" id="fn"><?php  echo $row['st_firstname']  ?></span>
                                                            </div>
                                                        </div>
                                                        <div class="profile-info-row  ">
                                                            <div class="profile-info-name align-left test " style="background: #FDE3A7; color: #F9690E;  " > <b>Middle Name</b></div>

                                                            <div class="profile-info-value testorange">
                                                                <span class="editable" id="fn"><?php  echo $row['st_middlename']  ?></span>
                                                            </div>
                                                        </div>

                                                        <div class="profile-info-row ">
                                                            <div class="profile-info-name align-left " style="background: #FDE3A7; color: #F9690E;"> <b>Last Name</b> </div>

                                                            <div class="profile-info-value testorange">

                                                                <span class="editable " id="ln"><?php  echo $row['st_lastname']  ?></span>

                                                            </div>
                                                        </div>
                                                        <div class="profile-info-row ">
                                                            <div class="profile-info-name align-left " style="background: #FDE3A7; color: #F9690E;"> <b>Gender</b> </div>

                                                            <div class="profile-info-value testorange">

                                                                <span class="editable " id="ln"><?php  echo $row['st_gender']  ?></span>

                                                            </div>
                                                        </div>

                                                        <div class="profile-info-row">
                                                            <div class="profile-info-name align-left" style="background: #FDE3A7; color: #F9690E;"> <b>Father Name</b> </div>

                                                            <div class="profile-info-value testorange">
                                                                <span class="editable" id="fn"><?php  echo $row['st_fathername']  ?></span>
                                                            </div>
                                                        </div>
                                                        <div class="profile-info-row">
                                                            <div class="profile-info-name align-left" style="background: #FDE3A7; color: #F9690E;"> <b>Father Occupation</b> </div>

                                                            <div class="profile-info-value testorange">
                                                                <span class="editable" id="fn"><?php  echo $row['st_fatheroccupation']  ?></span>
                                                            </div>
                                                        </div>
                                                        <div class="profile-info-row">
                                                            <div class="profile-info-name align-left" style="background: #FDE3A7; color: #F9690E;"> <b>Mother Name</b> </div>

                                                            <div class="profile-info-value testorange">
                                                                <span class="editable" id="fn"><?php  echo $row['st_mothername']  ?></span>
                                                            </div>
                                                        </div>
                                                        <div class="profile-info-row">
                                                            <div class="profile-info-name align-left" style="background: #FDE3A7; color: #F9690E;"> <b>Mother Occupation</b> </div>

                                                            <div class="profile-info-value testorange">
                                                                <span class="editable" id="fn"><?php  echo $row['st_motheroccupation']  ?></span>
                                                            </div>
                                                        </div>



                                                        <div class="profile-info-row">
                                                            <div class="profile-info-name align-left" style="background: #FDE3A7; color: #F9690E;" > <b>Date of Birth</b> </div>

                                                            <div class="profile-info-value testorange">
                                                                <div class=" " id="dob"><?php  echo $row['st_dob']  ?></div>
                                                            </div>
                                                        </div>

                                                        <div class="profile-info-row">
                                                            <div class="profile-info-name align-left" style="background: #FDE3A7; color: #F9690E;">  <b>Nationality</b> </div>

                                                            <div class="profile-info-value testorange">
                                                                <div class=" " id="gen"><?php  echo $row['st_nationality']  ?></div>
                                                            </div>
                                                        </div>
                                                        <div class="profile-info-row">
                                                            <div class="profile-info-name align-left" style="background: #FDE3A7; color: #F9690E;"> <b>Caste</b> </div>

                                                            <div class="profile-info-value testorange">
                                                                <span class="editable" id="fn"><?php  echo $row['st_caste']  ?></span>
                                                            </div>
                                                        </div>
                                                        <div class="profile-info-row">
                                                            <div class="profile-info-name align-left" style="background: #FDE3A7; color: #F9690E;"> <b>Home Town</b> </div>

                                                            <div class="profile-info-value testorange">
                                                                <span class="editable" id="fn"><?php  echo $row['st_hometown']  ?></span>
                                                            </div>
                                                        </div>


                                                        <div class="profile-info-row">
                                                            <div class="profile-info-name align-left" style="background: #FDE3A7; color: #F9690E;"><b>Permanent Address</b>  </div>

                                                            <div class="profile-info-value testorange">
                                                                <span class="editable" id="qualif"><?php  echo $row['st_address1']." ".$row['st_address2']  ?></span>
                                                            </div>
                                                        </div>

                                                        <div class="profile-info-row">
                                                            <div class="profile-info-name align-left" style="background: #FDE3A7; color: #F9690E;">  <b>City</b> </div>

                                                            <div class="profile-info-value testorange">
                                                                <div class=" " id="city"><?php  echo $row['st_city']  ?></div>
                                                            </div>
                                                        </div>

                                                        <div class="profile-info-row">
                                                            <div class="profile-info-name align-left" style="background: #FDE3A7; color: #F9690E;">  <b>State</b> </div>

                                                            <div class="profile-info-value testorange">
                                                                <div class=" " id="state"><?php  echo $row['st_state']  ?></div>
                                                            </div>
                                                        </div>

                                                        <div class="profile-info-row">
                                                            <div class="profile-info-name align-left" style="background: #FDE3A7; color: #F9690E;">  <b>Country</b> </div>

                                                            <div class="profile-info-value testorange">
                                                                <div class=" " id="country">INDIA</div>
                                                            </div>
                                                        </div>

                                                        <div class="profile-info-row">
                                                            <div class="profile-info-name align-left" style="background: #FDE3A7; color: #F9690E;">  <b>Pin Code</b> </div>

                                                            <div class="profile-info-value testorange">
                                                                <div class=" " id="pc"><?php  echo $row['st_posatlcode']  ?></div>
                                                            </div>
                                                        </div>
                                                        <div class="profile-info-row">
                                                            <div class="profile-info-name align-left" style="background: #FDE3A7; color: #F9690E;"> <b>Landline Number</b> </div>

                                                            <div class="profile-info-value testorange">
                                                                <span class="editable" id="fn"><?php  echo $row['st_landline']  ?></span>
                                                            </div>
                                                        </div>
                                                    </div>



                                                    </div>



                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                <div class="space-16"></div>
                                <div class="col-xs-12 col-sm-9 test3">



                                    <div class="space-17"></div>


                                    <div class="space-16"></div>



                                    <div class="col-xs-12 col-lg-offset-4 widget-container-col" id="widget-container-col-1">
                                        <div class="widget-box widget-color-green2" id="shadow">
                                            <div class="widget-header ">
                                                <h5 class="widget-title " style="color: white; font-weight: bold; font-size: 18px;" >Academic Qualification</h5>

                                            </div>

                                            <div class="widget-body">
                                                <div class="widget-main">


                                                    <div class="profile-user-info profile-user-info-striped bigger-110 bolder">
                                                        <div class="profile-info-row  ">
                                                            <div class="profile-info-name align-left test " style="background:#C8F7C5 ;color:#1E824C;"> <b>Qualification</b></div>

                                                            <div class="profile-info-value testgreen">
                                                                <span class="editable" id="quailf3">SSLC</span>
                                                            </div>
                                                        </div>

                                                        <div class="profile-info-row ">
                                                            <div class="profile-info-name align-left " style="background:#C8F7C5 ;color:#1E824C;"> <b>Institution</b> </div>

                                                            <div class="profile-info-value testgreen">
                                                                <span class="editable " id="inst3">Sindhi Model</span>
                                                            </div>
                                                        </div>
                                                        <div class="profile-info-row ">
                                                            <div class="profile-info-name align-left " style="background:#C8F7C5 ;color:#1E824C;"> <b>Medium (Eg: English)</b> </div>

                                                            <div class="profile-info-value testgreen">
                                                                <span class="editable " id="inst2"><?php  echo $row['st_10thmedium']  ?></span>
                                                            </div>
                                                        </div>

                                                        <div class="profile-info-row">
                                                            <div class="profile-info-name align-left" style="background:#C8F7C5 ;color:#1E824C;"> <b>Year of passing</b> </div>

                                                            <div class="profile-info-value testgreen">
                                                                <span class="editable" id="yop3"><?php  echo $row['st_10thyearofpassing']  ?></span>
                                                            </div>
                                                        </div>

                                                        <div class="profile-info-row">
                                                            <div class="profile-info-name align-left" style="background:#C8F7C5 ;color:#1E824C;"> <b>Percentage/CGPA</b> </div>

                                                            <div class="profile-info-value testgreen">
                                                                <span class=" " id="cgpa3"><?php  echo $row['st_10thpercentage']  ?></span>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="space-10"></div>
                                                    <div class="profile-user-info profile-user-info-striped bigger-110 bolder">
                                                        <div class="profile-info-row  ">
                                                            <div class="profile-info-name align-left test " style="background:#C8F7C5 ;color:#1E824C;"> <b>Qualification</b></div>

                                                            <div class="profile-info-value testgreen">
                                                                <span class="editable" id="quailf2">HSC</span>
                                                            </div>
                                                        </div>

                                                        <div class="profile-info-row ">
                                                            <div class="profile-info-name align-left " style="background:#C8F7C5 ;color:#1E824C;"> <b>Institution</b> </div>

                                                            <div class="profile-info-value testgreen">
                                                                <span class="editable " id="inst2">Sindhi Model</span>
                                                            </div>
                                                        </div>
                                                        <div class="profile-info-row ">
                                                            <div class="profile-info-name align-left " style="background:#C8F7C5 ;color:#1E824C;"> <b>Medium (Eg: English)</b> </div>

                                                            <div class="profile-info-value testgreen">
                                                                <span class="editable " id="inst2"><?php  echo $row['st_12thmedium']  ?></span>
                                                            </div>
                                                        </div>

                                                        <div class="profile-info-row">
                                                            <div class="profile-info-name align-left" style="background:#C8F7C5 ;color:#1E824C;"> <b>Year of passing</b> </div>

                                                            <div class="profile-info-value testgreen">
                                                                <span class="editable" id="yop1">2014</span>
                                                            </div>
                                                        </div>

                                                        <div class="profile-info-row">
                                                            <div class="profile-info-name align-left" style="background:#C8F7C5 ;color:#1E824C;"> <b>Percentage/CGPA</b> </div>

                                                            <div class="profile-info-value testgreen">
                                                                <span class="editable" id="cgpa1"><?php  echo $row['st_12thpercentage']  ?></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="space-4"></div>
                                                    <h3  style="color: black; font-weight: bold; text-align:inherit ; padding-left: 12px ;font-size: 18px;" >UG</h3>

                                                    <div class="profile-user-info profile-user-info-striped bigger-110 bolder">

                                                        <div class="profile-info-row  ">
                                                            <div class="profile-info-name align-left test " style="background:#C8F7C5 ;color:#1E824C;"> <b>Qualification</b></div>

                                                            <div class="profile-info-value testgreen">
                                                                <span class="editable" id="quailf1">B.E</span>
                                                            </div>
                                                        </div>

                                                        <div class="profile-info-row ">
                                                            <div class="profile-info-name align-left " style="background:#C8F7C5 ;color:#1E824C;"> <b>Branch</b> </div>

                                                            <div class="profile-info-value testgreen">
                                                                <span class="editable " id="branch"><?php  echo $row['st_ugspecialization']  ?></span>
                                                            </div>
                                                        </div>

                                                        <div class="profile-info-row ">
                                                            <div class="profile-info-name align-left " style="background:#C8F7C5 ;color:#1E824C;"> <b>Institution</b> </div>

                                                            <div class="profile-info-value testgreen">
                                                                <span class="editable " id="inst1"><?php  echo $row['st_collegename']  ?></span>
                                                            </div>
                                                        </div>

                                                        <div class="profile-info-row">
                                                            <div class="profile-info-name align-left" style="background:#C8F7C5 ;color:#1E824C;"> <b>Year of passing</b> </div>

                                                            <div class="profile-info-value testgreen">
                                                                <span class="editable" id="yop1"><?php  echo $row['st_ugyearofpassing']  ?></span>
                                                            </div>
                                                        </div>

                                                        <div class="profile-info-row">
                                                            <div class="profile-info-name align-left" style="background:#C8F7C5 ;color:#1E824C;"> <b>Percentage/CGPA</b> </div>

                                                            <div class="profile-info-value testgreen">
                                                                <span class="editable" id="cgpa1"><?php  echo $row['st_cgpa']  ?></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="space-5"></div>

                                                    <h5  style="color: black; font-weight: bold; text-align:inherit ; padding-left: 12px ;font-size: 15px;" >Semester wise marks</h5>



                                                    <div class="profile-user-info profile-user-info-striped bigger-110 bolder">
                                                        <div class="profile-info-row  ">
                                                            <div class="profile-info-name align-left test " style="background:#C8F7C5 ;color:#1E824C;"> <b>First Semester</b></div>

                                                            <div class="profile-info-value testgreen">
                                                                <span class="editable" id="firstsem"><?php  echo $row['st_1stsem']  ?></span>
                                                            </div>
                                                        </div>

                                                        <div class="profile-info-row ">
                                                            <div class="profile-info-name align-left " style="background:#C8F7C5 ;color:#1E824C;"> <b>Second Semester</b> </div>

                                                            <div class="profile-info-value testgreen">
                                                                <span class="editable " id="secondsem"><?php  echo $row['st_2ndsem']  ?></span>
                                                            </div>
                                                        </div>

                                                        <div class="profile-info-row ">
                                                            <div class="profile-info-name align-left " style="background:#C8F7C5 ;color:#1E824C;"> <b>Third Semester</b> </div>

                                                            <div class="profile-info-value testgreen">
                                                                <span class="editable " id="thirdsem"><?php  echo $row['st_3rdsem']  ?></span>
                                                            </div>
                                                        </div>

                                                        <div class="profile-info-row">
                                                            <div class="profile-info-name align-left" style="background:#C8F7C5 ;color:#1E824C;"> <b>Fourth Semester</b> </div>

                                                            <div class="profile-info-value testgreen">
                                                                <span class="editable" id="fourthsem"><?php  echo $row['st_4thsem']  ?></span>
                                                            </div>
                                                        </div>

                                                        <div class="profile-info-row">
                                                            <div class="profile-info-name align-left" style="background:#C8F7C5 ;color:#1E824C;"> <b>Fifth Semester</b> </div>

                                                            <div class="profile-info-value testgreen">
                                                                <span class="editable" id="fifthsem"><?php  echo $row['st_5thsem']  ?></span>
                                                            </div>
                                                        </div>

                                                        <div class="profile-info-row">
                                                            <div class="profile-info-name align-left" style="background:#C8F7C5 ;color:#1E824C;"> <b>Sixth Semester</b> </div>

                                                            <div class="profile-info-value testgreen">
                                                                <span class="editable" id="sixthsem"><?php  echo $row['st_6thsem']  ?></span>
                                                            </div>
                                                        </div>

                                                        <div class="profile-info-row">
                                                            <div class="profile-info-name align-left" style="background:#C8F7C5 ;color:#1E824C;"> <b>Seventh Semester</b> </div>

                                                            <div class="profile-info-value testgreen">
                                                                <span class="editable" id="seventhsem"><?php  echo $row['st_7thsem']  ?></span>
                                                            </div>
                                                        </div>

                                                        <div class="profile-info-row">
                                                            <div class="profile-info-name align-left" style="background:#C8F7C5 ;color:#1E824C;"> <b>Eighth Semester</b> </div>

                                                            <div class="profile-info-value testgreen">
                                                                <span class="editable" id="eigthsem"><?php  echo $row['st_8thsem']  ?></span>
                                                            </div>
                                                        </div>


                                                    </div>
                                                    <div class="space-4"></div>
                                                    <div class="profile-user-info profile-user-info-striped bigger-110 bolder">
                                                        <div class="profile-info-row  ">
                                                            <div class="profile-info-name align-left test " style="background:#C8F7C5 ;color:#1E824C;"> <b>Standing Arrear</b></div>

                                                            <div class="profile-info-value testgreen">
                                                                <span class="editable" id="sarr"><?php  echo $row['st_standingarrears']  ?></span>
                                                            </div>
                                                        </div>

                                                        <div class="profile-info-row  ">
                                                            <div class="profile-info-name align-left test " style="background:#C8F7C5 ;color:#1E824C;"> <b>History of Arrear</b></div>

                                                            <div class="profile-info-value testgreen">
                                                                <span class="editable" id="harr"><?php  echo $row['st_historyofarrears']  ?></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                         <div class="space-4"></div>
                                                    <h3  style="color: black; font-weight: bold; text-align:inherit ; padding-left: 12px ;font-size: 18px;" >PG</h3>

                                                    <div class="profile-user-info profile-user-info-striped bigger-110 bolder">

                                                        <div class="profile-info-row  ">
                                                            <div class="profile-info-name align-left test " style="background:#C8F7C5 ;color:#1E824C;"> <b>Qualification</b></div>

                                                            <div class="profile-info-value testgreen">
                                                                <span class="editable" id="quailf1">M.E</span>
                                                            </div>
                                                        </div>

                                                        <div class="profile-info-row ">
                                                            <div class="profile-info-name align-left " style="background:#C8F7C5 ;color:#1E824C;"> <b>Branch</b> </div>

                                                            <div class="profile-info-value testgreen">
                                                                <span class="editable " id="branch">Computer Science Engineering</span>
                                                            </div>
                                                        </div>

                                                        <div class="profile-info-row ">
                                                            <div class="profile-info-name align-left " style="background:#C8F7C5 ;color:#1E824C;"> <b>Institution</b> </div>

                                                            <div class="profile-info-value testgreen">
                                                                <span class="editable " id="inst1">RMD Engineering College</span>
                                                            </div>
                                                        </div>

                                                        <div class="profile-info-row">
                                                            <div class="profile-info-name align-left" style="background:#C8F7C5 ;color:#1E824C;"> <b>Year of passing</b> </div>

                                                            <div class="profile-info-value testgreen">
                                                                <span class="editable" id="yop1">2018</span>
                                                            </div>
                                                        </div>

                                                        <div class="profile-info-row">
                                                            <div class="profile-info-name align-left" style="background:#C8F7C5 ;color:#1E824C;"> <b>Percentage/CGPA</b> </div>

                                                            <div class="profile-info-value testgreen">
                                                                <span class="editable" id="cgpa1">9.0</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="space-5"></div>

                                                    <h5  style="color: black; font-weight: bold; text-align:inherit ; padding-left: 12px ;font-size: 15px;" >Semester wise marks</h5>



                                                    <div class="profile-user-info profile-user-info-striped bigger-110 bolder">
                                                        <div class="profile-info-row  ">
                                                            <div class="profile-info-name align-left test " style="background:#C8F7C5 ;color:#1E824C;"> <b>First Semester</b></div>

                                                            <div class="profile-info-value testgreen">
                                                                <span class="editable" id="firstsem">8.0</span>
                                                            </div>
                                                        </div>

                                                        <div class="profile-info-row ">
                                                            <div class="profile-info-name align-left " style="background:#C8F7C5 ;color:#1E824C;"> <b>Second Semester</b> </div>

                                                            <div class="profile-info-value testgreen">
                                                                <span class="editable " id="secondsem">8.0</span>
                                                            </div>
                                                        </div>

                                                        <div class="profile-info-row ">
                                                            <div class="profile-info-name align-left " style="background:#C8F7C5 ;color:#1E824C;"> <b>Third Semester</b> </div>

                                                            <div class="profile-info-value testgreen">
                                                                <span class="editable " id="thirdsem">8.0</span>
                                                            </div>
                                                        </div>

                                                        <div class="profile-info-row">
                                                            <div class="profile-info-name align-left" style="background:#C8F7C5 ;color:#1E824C;"> <b>Fourth Semester</b> </div>

                                                            <div class="profile-info-value testgreen">
                                                                <span class="editable" id="fourthsem">8.0</span>
                                                            </div>
                                                        </div>


                                                    </div>
                                                    <div class="space-4"></div>
                                                    <div class="profile-user-info profile-user-info-striped bigger-110 bolder">
                                                        <div class="profile-info-row  ">
                                                            <div class="profile-info-name align-left test " style="background:#C8F7C5 ;color:#1E824C;"> <b>Standing Arrear</b></div>

                                                            <div class="profile-info-value testgreen">
                                                                <span class="editable" id="sarr">0</span>
                                                            </div>
                                                        </div>

                                                        <div class="profile-info-row  ">
                                                            <div class="profile-info-name align-left test " style="background:#C8F7C5 ;color:#1E824C;"> <b>History of Arrear</b></div>

                                                            <div class="profile-info-value testgreen">
                                                                <span class="editable" id="harr">0</span>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    </div>



                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                <div class="col-xs-12 col-sm-9 test3">



                                    <div class="space-17"></div>


                                    <div class="space-16"></div>



                                    <div class="col-xs-12 col-lg-offset-4 widget-container-col" id="widget-container-col-1">
                                        <div class="widget-box widget-color-blue2" id="shadow">
                                            <div class="widget-header ">
                                                <h5 class="widget-title" style="color: white; font-weight: bold; font-size: 18px;">Skill Set</h5>

                                                <div class="widget-toolbar">



                                                    <a href="#modal-form4" data-toggle="modal">

                                                        <i class=" ace-icon fa fa-pencil-square-o bigger-200 middle white"></i>

                                                    </a>

                                                </div>
                                            </div>

                                            <div class="widget-body">
                                                <div class="widget-main">



                                                    <div class="profile-user-info profile-user-info-striped bigger-110 bolder">
                                                        <div class="profile-info-row  ">
                                                            <div class="profile-info-name align-left test " > <b>If any Skill Certification Obtained</b></div>

                                                            <div class="profile-info-value testblue">
                                                                <span class="editable" id="urn"><?php  echo $row['st_skillcertification']  ?></span>
                                                            </div>
                                                        </div>

                                                        <div class="profile-info-row ">
                                                            <div class="profile-info-name align-left " > <b>Duration of Course</b> </div>

                                                            <div class="profile-info-value testblue">

                                                                <span class="editable " id="country"><?php  echo $row['st_duration']  ?></span>

                                                            </div>
                                                        </div>

                                                        <div class="profile-info-row">
                                                            <div class="profile-info-name align-left"> <b>Certification Vendor/Authority/Agency Name</b> </div>

                                                            <div class="profile-info-value testblue">
                                                                <span class="editable" id="mn"><?php  echo $row['st_vendor']  ?></span>
                                                            </div>
                                                        </div>

                                                        <div class="profile-info-row">
                                                            <div class="profile-info-name align-left"> <b>COE Certification</b> </div>

                                                            <div class="profile-info-value testblue ">
                                                                <div class=" " id="dob"><?php  echo $row['st_coecertification']  ?></div>
                                                            </div>
                                                        </div>





                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                </div>
                                <div class="col-xs-12 col-sm-9 test3">



                                    <div class="space-17"></div>


                                    <div class="space-16"></div>



                                    <div class="col-xs-12 col-lg-offset-4 widget-container-col" id="widget-container-col-1">
                                        <div class="widget-box widget-color-purple" id="shadow">
                                            <div class="widget-header ">
                                                <h5 class="widget-title" style="color: white; font-weight: bold; font-size: 18px;">AMCAT Score</h5>

                                            </div>

                                            <div class="widget-body">
                                                <div class="widget-main">



                                                    <div class="profile-user-info profile-user-info-striped bigger-110 bolder">
                                                        <div class="profile-info-row  ">
                                                            <div class="profile-info-name align-left test " style="background:#DCC6E0; color:#663399" > <b>English Percentage</b></div>

                                                            <div class="profile-info-value testpurple">
                                                                <span class="editable" id="urn"><?php  echo $row['st_english']  ?></span>
                                                            </div>
                                                        </div>

                                                        <div class="profile-info-row ">
                                                            <div class="profile-info-name align-left " style="background:#DCC6E0; color:#663399" > <b>Quantitative Percentage</b> </div>

                                                            <div class="profile-info-value testpurple">


                                                                <span class="editable " id="city"><?php  echo $row['st_quantitative']  ?></span>
                                                            </div>
                                                        </div>

                                                        <div class="profile-info-row">
                                                            <div class="profile-info-name align-left" style="background:#DCC6E0; color:#663399"> <b>Logical Percentage</b> </div>

                                                            <div class="profile-info-value testpurple">
                                                                <span class="editable" id="mn"><?php  echo $row['st_logical']  ?></span>
                                                            </div>
                                                        </div>

                                                        <div class="profile-info-row">
                                                            <div class="profile-info-name align-left" style="background:#DCC6E0; color:#663399"> <b>Overall Average</b> </div>

                                                            <div class="profile-info-value testpurple ">
                                                                <div class=" " id="dob"><?php  echo $row['st_overall']  ?></div>
                                                            </div>
                                                        </div>
                                                        <div class="profile-info-row">
                                                            <div class="profile-info-name align-left" style="background:#DCC6E0; color:#663399"> <b>Percentage</b> </div>

                                                            <div class="profile-info-value testpurple ">
                                                                <div class=" " id="dob"><?php  echo $row['st_percentage']  ?></div>
                                                            </div>
                                                        </div>
                                                        <div class="profile-info-row">
                                                            <div class="profile-info-name align-left" style="background:#DCC6E0; color:#663399"> <b>Candidate ID</b> </div>

                                                            <div class="profile-info-value testpurple ">
                                                                <div class=" " id="dob"><?php  echo $row['st_candidateid']  ?></div>
                                                            </div>
                                                        </div>
                                                        <div class="profile-info-row">
                                                            <div class="profile-info-name align-left" style="background:#DCC6E0; color:#663399"> <b>Signature</b> </div>

                                                            <div class="profile-info-value testpurple ">
                                                                <div class=" " id="dob"><?php  echo $row['st_signature']  ?></div>
                                                            </div>
                                                        </div>





                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                </div>


                            <div class="col-xs-12 col-sm-9 test3">



                                <div class="space-17"></div>


                                <div class="space-16"></div>



                                <div class="col-xs-12 col-lg-offset-4 widget-container-col" id="widget-container-col-1">
                                    <div class="widget-box widget-color-red" id="shadow">
                                        <div class="widget-header ">
                                            <h5 class="widget-title" style="color: white; font-weight: bold; font-size: 18px;"><?php  echo $row['st_placementstatus']  ?></h5>


                                        </div>

                                        <div class="widget-body">
                                            <div class="widget-main">



                                                <div class="profile-user-info profile-user-info-striped bigger-110 bolder">

                                                    <div class="profile-info-row  ">
                                                        <div class="profile-info-name align-left test " style="background:#F1A9A0; color:#D91E18" > <b>Placed in companies</b></div>

                                                        <div class="profile-info-value testred">
                                                            <span class="editable" id="ur">ZOHO</span>
                                                        </div>
                                                    </div>



                                                </div>
                                                <div class="space-10"></div>

                                            </div>



                                        </div>
                                    </div>
                                </div>
                            </div>




                                <div id="modal-form4" class="modal" tabindex="-1">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <h4 class="blue bigger">Edit the following form fields</h4>
                                            </div>

                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-7">
                                                        <div class="form-group">
                                                            <label for="control-label bolder blue">If any skill certification obtained</label>
                                                            <div>
                                                                <input type="text" id="control-label bolder blue" placeholder="" value="<?php echo $row['st_skillcertification']?>" />
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="control-label bolder blu">Duration of Course</label>
                                                            <div>
                                                                <input type="text" id="control-label bolder blu" placeholder="" value="<?php echo $row['st_duration']?>" />
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="control-label bolder bl">Certification Vendor/Authority/Agency Name</label>
                                                            <div>
                                                                <input type="text" id="control-label bolder bl" placeholder="" value="<?php echo $row['st_vendor']?>" />
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="control-label bolder b">COE Certification</label>
                                                            <div>
                                                                <input type="text" id="control-label bolder b" placeholder="" value="<?php echo $row['st_coecertification']?>" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="modal-footer">
                                                <button class="btn btn-sm" data-dismiss="modal">
                                                    <i class="ace-icon fa fa-times"></i>
                                                    Cancel
                                                </button>

                                                <button class="btn btn-sm btn-primary">
                                                    <i class="ace-icon fa fa-check"></i>
                                                    Save
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <div id="modal-form1" class="modal" tabindex="-1">
                                    <div class="modal-dialog">
                                <form class="modal-content" action="profile.php" method="get" enctype = "multipart/form-data">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <h4 class="blue bigger">Edit the following form fields</h4>
                                            </div>

                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-7">
                                                        <div class="form-group">
                                                            <label for="control-label bolder bl">Mobile Number</label>
                                                            <div>
                                                                <input type="text" id="control-label bolder bl" name="phoneno" placeholder="" value="<?php echo $row['st_phone'] ?>" />
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="control-label bolder b">Email-Id</label>
                                                            <div>
                                                                <input type="text" id="control-label bolder b" name="emailid" placeholder="" value="<?php echo $row['st_email'] ?>" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="modal-footer">
                                                <button class="btn btn-sm" data-dismiss="modal">
                                                    <i class="ace-icon fa fa-times"></i>
                                                    Cancel
                                                </button>

                                                <button name="changemailphone" class="btn btn-sm btn-primary">
                                                    <i class="ace-icon fa fa-check"></i>
                                                    Save
                                                </button>
                                            </div>
                                        </div></form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="modal-form" class="modal" tabindex="-1">
                            <div class="modal-dialog">
                                <form class="modal-content" action="profile.php" method="post" enctype = "multipart/form-data">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="blue bigger">Click here to Upload Photo</h4>
                                    </div>

                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12">
                                                <div class="space"></div>

                                                <input type="file" name="image" />
                                            </div>



                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn btn-sm" data-dismiss="modal">
                                                <i class="ace-icon fa fa-times"></i>
                                                Cancel
                                            </button>

                                            <button class="btn btn-sm btn-primary">
                                                <i class="ace-icon fa fa-check"></i>
                                                Save
                                            </button>
                                        </div>
                                    </div>






                                    <!-- /.page-content -->
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
                    <script src="../assets/js/jquery.colorbox.min.js"></script>



                    <script src="../../vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
                    <script src="../../vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
                    <script src="../../vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
                    <script src="../../vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
                    <script src="../../vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
                    <script src="../../vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
                    <script src="../../vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
                    <script src="../../vendors/datatables.net-scroller/js/datatables.scroller.min.js"></script>
                    <script src="../../vendors/jszip/dist/jszip.min.js"></script>
                    <script src="../../vendors/pdfmake/build/pdfmake.min.js"></script>
                    <script src="../../vendors/pdfmake/build/vfs_fonts.js"></script>

            <!--[if lte IE 8]>
            <script src="../assets/js/excanvas.min.js"></script>
            <![endif]-->
            <script src="../assets/js/jquery-ui.custom.min.js"></script>
            <script src="../assets/js/jquery.ui.touch-punch.min.js"></script>
            <script src="../assets/js/jquery.gritter.min.js"></script>
            <script src="../assets/js/bootbox.js"></script>
            <script src="../assets/js/jquery.easypiechart.min.js"></script>
            <script src="../assets/js/bootstrap-datepicker.min.js"></script>
            <script src="../assets/js/jquery.hotkeys.index.min.js"></script>
            <script src="../assets/js/bootstrap-wysiwyg.min.js"></script>
            <script src="../assets/js/select2.min.js"></script>
            <script src="../assets/js/spinbox.min.js"></script>
            <script src="../assets/js/bootstrap-editable.min.js"></script>
            <script src="../assets/js/ace-editable.min.js"></script>
            <script src="../assets/js/jquery.maskedinput.min.js"></script>

            <!-- ace scripts -->
            <script src="../assets/js/ace-elements.min.js"></script>
            <script src="../assets/js/ace.min.js"></script>

            <!-- inline scripts related to this page -->
            <script type="text/javascript">
                jQuery(function($) {


                    var $overflow = '';
                    var colorbox_params = {
                        rel: 'colorbox',
                        reposition:true,
                        scalePhotos:true,
                        scrolling:false,
                        previous:'<i class="ace-icon fa fa-arrow-left"></i>',
                        next:'<i class="ace-icon fa fa-arrow-right"></i>',
                        close:'&times;',
                        current:'{current} of {total}',
                        maxWidth:'100%',
                        maxHeight:'100%',
                        onOpen:function(){
                            $overflow = document.body.style.overflow;
                            document.body.style.overflow = 'hidden';
                        },
                        onClosed:function(){
                            document.body.style.overflow = $overflow;
                        },
                        onComplete:function(){
                            $.colorbox.resize();
                        }
                    };

                    $('.ace-thumbnails [data-rel="colorbox"]').colorbox(colorbox_params);
                    $("#cboxLoadingGraphic").html("<i class='ace-icon fa fa-spinner orange fa-spin'></i>");//let's add a custom loading icon


                    $(document).one('ajaxloadstart.page', function(e) {
                        $('#colorbox, #cboxOverlay').remove();
                    });










                    $('#avatar').mouseenter(function () {


                        $('#avatar').css("opacity",0.5);

                    });
                    $('#avatar').mouseleave(function(){

                        $('#avatar').css("opacity",1);

                    });
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

                    // *** editable avatar *** //
//                    try {//ie8 throws some harmless exceptions, so let's catch'em
//
//                        //first let's add a fake appendChild method for Image element for browsers that have a problem with this
//                        //because editable plugin calls appendChild, and it causes errors on IE at unpredicted points
//                        try {
//                            document.createElement('IMG').appendChild(document.createElement('B'));
//                        } catch(e) {
//                            Image.prototype.appendChild = function(el){}
//                        }
//
//                        var last_gritter;
//                        $('#avatar').editable({
//                            type: 'image',
//                            name: 'avatar',
//                            value: null,
//                            //onblur: 'ignore',  //don't reset or hide editable onblur?!
//                            image: {
//                                //specify ace file input plugin's options here
//                                btn_choose: 'Change Avatar',
//                                droppable: true,
//                                maxSize: 110000,//~100Kb
//
//                                //and a few extra ones here
//                                name: 'avatar',//put the field name here as well, will be used inside the custom plugin
//                                on_error : function(error_type) {//on_error function will be called when the selected file has a problem
//                                    if(last_gritter) $.gritter.remove(last_gritter);
//                                    if(error_type == 1) {//file format error
//                                        last_gritter = $.gritter.add({
//                                            title: 'File is not an image!',
//                                            text: 'Please choose a jpg|gif|png image!',
//                                            class_name: 'gritter-error gritter-center'
//                                        });
//                                    } else if(error_type == 2) {//file size rror
//                                        last_gritter = $.gritter.add({
//                                            title: 'File too big!',
//                                            text: 'Image size should not exceed 500Kb!',
//                                            class_name: 'gritter-error gritter-center'
//                                        });
//                                    }
//                                    else {//other error
//                                    }
//                                },
//                                on_success : function() {
//                                    $.gritter.removeAll();
//                                }
//                            },
//                            url: function(params) {
//                                // ***UPDATE AVATAR HERE*** //
//                                //for a working upload example you can replace the contents of this function with
//                                //examples/profile-avatar-update.js
//
//                                var deferred = new $.Deferred;
//                                alert($('#avatar').find('img').attr("src"));
//
////                                var value = $('#avatar').next().find('input[type=hidden]:eq(0)').val();
////                                var img = document.getElementById('#avatar');
////                                alert(img.getAttribute('src'));
////                                alert(img.src);
//
//
//                                if(!value || value.length == 0) {
//                                    deferred.resolve();
//                                    return deferred.promise();
//                                }
//
//
//                                //dummy upload
//                                setTimeout(function(){
//                                    if("FileReader" in window) {
//                                        //for browsers that have a thumbnail of selected image
//                                        var thumb = $('#avatar').next().find('img').data('thumb');
//                                        if(thumb) $('#avatar').get(0).src = thumb;
//
//                                    }
//                                    var reader = new FileReader();
//
//                                    reader.onload = function (e) {
//                                        document.getElementById('#avatar').src =  e.target.result;
//                                    };
//
//                                    reader.readAsDataURL(input.files[0]);
//
//                                    deferred.resolve({'status':'OK'});
//
//                                    if(last_gritter) $.gritter.remove(last_gritter);
//                                    last_gritter = $.gritter.add({
//                                        title: 'Avatar Updated!',
//                                        text: 'Uploading to server can be easily implemented. A working example is included with the template.',
//                                        class_name: 'gritter-info gritter-center'
//                                    });
//
//                                } , parseInt(Math.random() * 800 + 800));
//
//                                return deferred.promise();
//
//                                // ***END OF UPDATE AVATAR HERE*** //
//                            },
//
//                            success: function(response, newValue) {
//                            }
//                        })
//                    }catch(e) {}

                    /**
                     //let's display edit mode by default?
                     var blank_image = true;//somehow you determine if image is initially blank or not, or you just want to display file input at first
                     if(blank_image) {
					$('#avatar').editable('show').on('hidden', function(e, reason) {
						if(reason == 'onblur') {
							$('#avatar').editable('show');
							return;
						}
						$('#avatar').off('hidden');
					})
				}
                     */

                    //another option is using modals
                    $('#avatar2').on('click', function(){
                        var modal =
                            '<div class="modal fade">\
                              <div class="modal-dialog">\
                               <div class="modal-content">\
                                <div class="modal-header">\
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>\
                                    <h4 class="blue">Change Avatar</h4>\
                                </div>\
                                \
                                <form class="no-margin">\
                                 <div class="modal-body">\
                                    <div class="space-4"></div>\
                                    <div style="width:75%;margin-left:12%;"><input type="file" name="file-input" /></div>\
                                 </div>\
                                \
                                 <div class="modal-footer center">\
                                    <button type="submit" class="btn btn-sm btn-success"><i class="ace-icon fa fa-check"></i> Submit</button>\
                                    <button type="button" class="btn btn-sm" data-dismiss="modal"><i class="ace-icon fa fa-times"></i> Cancel</button>\
                                 </div>\
                                </form>\
                              </div>\
                             </div>\
                            </div>';


                        var modal = $(modal);
                        modal.modal("show").on("hidden", function(){
                            modal.remove();
                        });

                        var working = false;

                        var form = modal.find('form:eq(0)');
                        var file = form.find('input[type=file]').eq(0);
                        file.ace_file_input({
                            style:'well',
                            btn_choose:'Click to choose new avatar',
                            btn_change:null,
                            no_icon:'ace-icon fa fa-picture-o',
                            thumbnail:'small',
                            before_remove: function() {
                                //don't remove/reset files while being uploaded
                                return !working;
                            },
                            allowExt: ['jpg', 'jpeg', 'png', 'gif'],
                            allowMime: ['image/jpg', 'image/jpeg', 'image/png', 'image/gif']
                        });

                        form.on('submit', function(){
                            if(!file.data('ace_input_files')) return false;

                            file.ace_file_input('disable');
                            form.find('button').attr('disabled', 'disabled');
                            form.find('.modal-body').append("<div class='center'><i class='ace-icon fa fa-spinner fa-spin bigger-150 orange'></i></div>");

                            var deferred = new $.Deferred;
                            working = true;
                            deferred.done(function() {
                                form.find('button').removeAttr('disabled');
                                form.find('input[type=file]').ace_file_input('enable');
                                form.find('.modal-body > :last-child').remove();

                                modal.modal("hide");

                                var thumb = file.next().find('img').data('thumb');
                                if(thumb) $('#avatar2').get(0).src = thumb;

                                working = false;
                            });


                            setTimeout(function(){
                                deferred.resolve();
                            } , parseInt(Math.random() * 800 + 800));

                            return false;
                        });

                    });



                    //////////////////////////////
                    $('#profile-feed-1').ace_scroll({
                        height: '250px',
                        mouseWheelLock: true,
                        alwaysVisible : true
                    });

                    $('a[ data-original-title]').tooltip();

                    $('.easy-pie-chart.percentage').each(function(){
                        var barColor = $(this).data('color') || '#555';
                        var trackColor = '#E2E2E2';
                        var size = parseInt($(this).data('size')) || 72;
                        $(this).easyPieChart({
                            barColor: barColor,
                            trackColor: trackColor,
                            scaleColor: false,
                            lineCap: 'butt',
                            lineWidth: parseInt(size/10),
                            animate:false,
                            size: size
                        }).css('color', barColor);
                    });

                    ///////////////////////////////////////////

                    //right & left position
                    //show the user info on right or left depending on its position
                    $('#user-profile-2 .memberdiv').on('mouseenter touchstart', function(){
                        var $this = $(this);
                        var $parent = $this.closest('.tab-pane');

                        var off1 = $parent.offset();
                        var w1 = $parent.width();

                        var off2 = $this.offset();
                        var w2 = $this.width();

                        var place = 'left';
                        if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) place = 'right';

                        $this.find('.popover').removeClass('right left').addClass(place);
                    }).on('click', function(e) {
                        e.preventDefault();
                    });


                    ///////////////////////////////////////////
                    $('#user-profile-3')
                        .find('input[type=file]').ace_file_input({
                        style:'well',
                        btn_choose:'Change avatar',
                        btn_change:null,
                        no_icon:'ace-icon fa fa-picture-o',
                        thumbnail:'large',
                        droppable:true,

                        allowExt: ['jpg', 'jpeg', 'png', 'gif'],
                        allowMime: ['image/jpg', 'image/jpeg', 'image/png', 'image/gif']
                    })
                        .end().find('button[type=reset]').on(ace.click_event, function(){
                        $('#user-profile-3 input[type=file]').ace_file_input('reset_input');
                    })
                        .end().find('.date-picker').datepicker().next().on(ace.click_event, function(){
                        $(this).prev().focus();
                    })
                    $('.input-mask-phone').mask('(999) 999-9999');

                    $('#user-profile-3').find('input[type=file]').ace_file_input('show_file_list', [{type: 'image', name: $('#avatar').attr('src')}]);


                    ////////////////////
                    //change profile
                    $('[data-toggle="buttons"] .btn').on('click', function(e){
                        var target = $(this).find('input[type=radio]');
                        var which = parseInt(target.val());
                        $('.user-profile').parent().addClass('hide');
                        $('#user-profile-'+which).parent().removeClass('hide');
                    });



                    /////////////////////////////////////
                    $(document).one('ajaxloadstart.page', function(e) {
                        //in ajax mode, remove remaining elements before leaving page
                        try {
                            $('.editable').editable('destroy');
                        } catch(e) {}
                        $('[class*=select2]').remove();
                    });
                });
            </script>
</body>
</html>
