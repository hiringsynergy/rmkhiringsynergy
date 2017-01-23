
<?php

session_start();
ob_start();

if(isset($_GET['create'])){


    $tablename=$_GET['tablename'];


    include "connect.php";



    $query="CREATE TABLE students_".$tablename."  (
    st_roll varchar(12) NOT NULL,
  st_firstname char(255)  ,
  st_middlename char(255)  ,
  st_lastname char(255)  ,
  st_name char(255)  ,
  st_gender char(255)  ,
  st_fathername char(255)  ,
  st_fatheroccupation char(255)  ,
  st_mothername char(255)  ,
  st_motheroccupation char(255)  ,
  st_email char(255) NOT NULL,
  st_phone char(15) NOT NULL,
  st_dob date  ,
  st_nationality char(255)  ,
  st_caste char(255)  ,
  st_collegename char(255)  ,
  st_university char(255)  ,
  st_10thpercentage varchar(255)  ,
  st_10thboardofstudy char(255)  ,
  st_10thmedium char(255)  ,
  st_10thyearofpassing year(4)  ,
  st_12thpercentage varchar(255)  ,
  st_12thboardofstudy char(255)  ,
  st_12thmedium char(255)  ,
  st_12thyearofpassing year(4)  ,
  st_dippercentage varchar(255)  ,
  st_dipyearofpassing year(4)  ,
  st_currentlypursuing char(255)  ,
  st_ugdegree char(255)  ,
  st_ugspecialization char(255)  ,
  st_1stsem varchar(255)  ,
  st_2ndsem varchar(255)  ,
  st_3rdsem varchar(255)  ,
  st_4thsem varchar(255)  ,
  st_5thsem varchar(255)  ,
  st_6thsem varchar(255)  ,
  st_7thsem varchar(255)  ,
  st_8thsem varchar(255)  ,
  st_cgpa varchar(255)  ,
  st_ugyearofpassing year(4)  ,
  st_pgdegree char(255)  ,
  st_pgspecialization char(255)  ,
  st_pg1stsem varchar(255)  ,
  st_pg2ndsem varchar(255)  ,
  st_pg3rdsem varchar(255)  ,
  st_pg4thsem varchar(255)  ,
  st_pgcgpa varchar(255)  ,
  st_pgyearofpassing year(4)  ,
  st_dayorhostel char(255)  ,
  st_historyofarrears char(255)  ,
  st_standingarrears char(255)  ,
  st_hometown char(255)  ,
  st_address1 char(255)  ,
  st_address2 char(255)  ,
  st_city char(255)  ,
  st_state char(255)  ,
  st_posatlcode char(255)  ,
  st_landline char(255)  ,
  st_skillcertification char(255)  ,
  st_duration char(255)  ,
  st_vendor char(255)  ,
  st_coecertification char(255)  ,
  st_gapinstudies char(255)  ,
  st_reason char(255)  ,
  st_english char(255)  ,
  st_quantitative char(255)  ,
  st_logical char(255)  ,
  st_overall char(255)  ,
  st_percentage varchar(255)  ,
  st_candidateid char(255)  ,
  st_signature char(255)  ,
  st_placementstatus char(255)  ,
  st_pass char(255)  ,
  st_pic char(255)
 
 
)ENGINE=MyISAM DEFAULT CHARSET=latin1";

    $query_alter="ALTER TABLE students_".$tablename."
    ENGINE=InnoDB
    ROW_FORMAT=COMPRESSED 
    KEY_BLOCK_SIZE=9000s";
    mysqli_query($connect, $query_alter);

    $result=mysqli_query($connect,$query);


    if(!$result) {

        die(" " . mysqli_error($connect));


    }



    $table_name="students_".$tablename;
    $short_name=$tablename[2].$tablename[3];
    $short_name+=0;


    $query2="INSERT  INTO table_map VALUES ('$table_name','{$tablename}',$short_name)";
    $result2=mysqli_query($connect, $query2);




    header("Location: index.php");

}

if(isset($_GET['delete']))

{

    $tab_name=$_GET['tablename'];


    include "connect.php";

    $query_jobs="DELETE FROM jobs WHERE year_of_graduation={$tab_name}";
    $result_jobs=mysqli_query($connect, $query_jobs);



    $query="DROP TABLE students_".$tab_name." ";
    $result=mysqli_query($connect, $query);

    $query2="DELETE FROM table_map WHERE table_value=$tab_name";
    $result2=mysqli_query($connect, $query2);



    header("Location: index.php");


}


?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
        <title>RMK HIRING SYNERGY </title>
        <link rel="icon" href="images/logos/rmklogo.JPG"  />

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
                location.href = "reports/reports.php";

            }
            function myfuncjobs() {
                location.href = "jobs/jobs_panel.php";

            }
            function myfuncsettings() {
                location.href = "settings.php";

            }



		</script>




		<!-- page specific plugin styles -->

		<link rel="stylesheet" href="assets/css/chosen.min.css" />

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
		<![endif]-->

        <style>
            #shadow{

                width: 500px;
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            }

        </style>

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
					<a href="index.php" class="navbar-brand">
                        <small>
                            <i class=""></i>
                            <?php

                            $database=$_SESSION['database_name'];
                            if(preg_match('/rmd_database/', $database)){
                                ?>
                                <img src="images/rmd.jpg" style="height: 25px;">
                                <label style="font-size: large;">RMD Engineering College  </label>

                                <?php
                            }

                            if(preg_match('/rmk_database/', $database)){
                                ?>
                                <img src="images/rmd.jpg" style="height: 25px;">
                                <label style="font-size: large;">RMK Engineering College </label>

                                <?php
                            }

                            if(preg_match('/rmkcet_database/', $database)){
                                ?>
                                <img src="images/rmd.jpg" style="height: 25px;">
                                <label style="font-size: large;">RMK College of Engineering and Technology </label>

                                <?php
                            }


                            ?>
                        </small>
					</a>
				</div>

				<div class="navbar-buttons navbar-header  pull-right"  role="navigation">
					<ul class="nav ace-nav" style="">
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
                                include "connect.php";
                                $name=$_SESSION['user'];

                                $query="select * from login_coordinator where username='{$name}'";

                                $result=mysqli_query($connect,$query);

                                if(!$result){


                                    mysqli_error($connect);
                                }

                                while($row=mysqli_fetch_assoc($result)){



                                    ?>


                                    <img class="nav-user-photo" src="images/<?php echo $row['coordinator_pic']; ?>" alt="Jason's Photo" />
                                <?php } ?>
								<span class="user-info">
									<small>Welcome,</small>
									Coordinator
								</span>

								<i class="ace-icon fa fa-caret-down"></i>
							</a>

							<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
								<li>
									<a href="settings.php">
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
					<li class="active">
						<a href="index.php">
							<i class="menu-icon fa fa-tachometer"></i>
							<span class="menu-text"> Dashboard</span>
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
                        <a href="approve/approve.php">
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
								<a href="company/view_companies.php">
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
								<a href="../coordinator_login/search/advanced_search.php">
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
                            <li class="active">Dashboard</li>
                        </ul><!-- /.breadcrumb -->
                        <!-- /.nav-search -->
                    </div>

                    <div class="page-content">
                        <!-- /.ace-settings-container -->

                        <div class="page-header">
                            <h1>
                                Dashboard

                            </h1>
                        </div><!-- /.page-header -->

                        <div class="row">
                            <div class="col-xs-12">
                                <!-- PAGE CONTENT BEGINS -->
                                <div class="alert alert-block alert-success">
                                    <button type="button" class="close" data-dismiss="alert">
                                        <i class="ace-icon fa fa-times"></i>
                                    </button>

                                    <i class="ace-icon fa fa-check green"></i>

                                    Welcome to
                                    <strong class="green">
                                        RMK HIRING SYNERGY

                                    </strong>,

                                    RMK group of Institutions
                                </div>
                                <div class="row">






                                    <div class="col-xs-6 pricing-box">
                                        <form action="index.php" method="get">


                                            <div class="widget-box widget-color-orange" id="shadow">
                                                <div class="widget-header">
                                                    <h5 class="widget-title bigger white">Create New Student Table</h5>
                                                </div>

                                                <div class="widget-body">
                                                    <div class="widget-main">
                                                        <ul class="list-unstyled spaced2">
                                                            <li class="red bigger-120">
                                                                <div class="form-group">
                                                                    <h5><label class="col-xs-12 control-label orange bolder" for="form-field-1">Year of Graduation</label></h5>
                                                                    <div class="col-xs-12 col-md-7">
                                                                        <input type="text" align="centre" name="tablename" id="form-field-1" placeholder="Year of Graduation" class="col-xs-10 " />

                                                                    </div>
                                                                </div>

                                                            </li>

                                                        </ul><hr/>
                                                    </div>


                                                    <div class="space-16"> </div>
                                                    <div class="space-16"></div>


                                                    <div>
                                                        <button type="submit" name="create" class="btn btn-block btn-warning">
                                                            <span>Create</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                    <div class="col-xs-6 pricing-box">
                                        <form action="crud/action_update.php">


                                            <div class="widget-box widget-color-blue" id="shadow">
                                                <div class="widget-header">
                                                    <h5 class="widget-title bigger white">Update Student Table</h5>
                                                </div>

                                                <div class="widget-body">
                                                    <div class="widget-main">
                                                        <ul class="list-unstyled spaced2">
                                                            <li class="red bigger-120">
                                                                <div class="form-group">
                                                                    <h5><label class="col-xs-12 control-label blue bolder" for="form-field-1">Year of Graduation</label></h5>
                                                                    <div class="col-xs-12 col-md-7">
                                                                        <select class="col-xs-7 chosen-select form-control" name="year"  id="form-field-select-3" data-placeholder="Select a Year...">
                                                                            <option value=""></option>
                                                                            <?php

                                                                            include "connect.php";
                                                                            $query_insert="SELECT * FROM table_map";
                                                                            $result_insert=mysqli_query($connect, $query_insert);
                                                                            while ($row=mysqli_fetch_assoc($result_insert)){




                                                                                ?>



                                                                                <option value="<?php echo $row['table_name']  ?>"><?php echo $row['table_value'] ?></option>
                                                                            <?php } ?>
                                                                        </select>

                                                                    </div>
                                                                </div>

                                                            </li>

                                                        </ul><hr/>
                                                    </div>


                                                    <div class="space-16"> </div>
                                                    <div class="space-16"></div>


                                                    <div>
                                                        <button type="submit" name="update" class="btn btn-block btn-primary">
                                                            <span>Update</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                </div>

                                <div class="space-16"> </div>

                                <div class="row">

                                    <div class="col-xs-6 pricing-box">
                                        <form action="crud/action_insert.php" method="get">
                                            <div class="widget-box widget-color-green" id="shadow">
                                                <div class="widget-header">
                                                    <h5 class="widget-title bigger white">Insert Into Student Table</h5>
                                                </div>

                                                <div class="widget-body">
                                                    <div class="widget-main">
                                                        <ul class="list-unstyled spaced2">
                                                            <li class="red bigger-120">
                                                                <div class="form-group">
                                                                    <h5><label class="col-xs-12 control-label green bolder" for="form-field-1">Year of Graduation</label></h5>
                                                                    <div class="col-xs-12 col-md-7">
                                                                        <select class="col-xs-7 chosen-select form-control" name="insert_year" id="form-field-select-3" data-placeholder="Select a Year...">
                                                                            <option value=""></option>

                                                                            <?php

                                                                            include "connect.php";
                                                                            $query_insert="SELECT * FROM table_map";
                                                                            $result_insert=mysqli_query($connect, $query_insert);
                                                                            while ($row=mysqli_fetch_assoc($result_insert)){




                                                                                ?>



                                                                                <option value="<?php echo $row['table_value']  ?>"><?php echo $row['table_value'] ?></option>
                                                                            <?php } ?>
                                                                        </select>

                                                                    </div>
                                                                </div>

                                                            </li>

                                                        </ul><hr/>
                                                    </div>
                                                    <div class="space-16"> </div>
                                                    <div class="space-16"></div>

                                                    <div>
                                                        <button type="submit" name="insert" value="insert" class="btn btn-block btn-success">
                                                            <span>Insert</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-xs-6 pricing-box">
                                        <div class="widget-box widget-color-red" id="shadow">
                                            <div class="widget-header">
                                                <h5 class="widget-title bigger white">Delete Student Table</h5>
                                            </div>
                                            <form action="index.php" method="get"  >

                                                <div class="widget-body">

                                                    <div class="widget-main">

                                                        <ul class="list-unstyled spaced2">
                                                            <li class="red bigger-120">
                                                                <div class="form-group">
                                                                    <h5><label class="col-xs-12 control-label red bolder" for="form-field-1">Year of Graduation</label></h5>
                                                                    <div class="col-xs-12 col-md-7">
                                                                        <select class="col-xs-7 chosen-select form-control" name="tablename" id="form-field-select-3" data-placeholder="Select a Year...">
                                                                            <option value=""></option>
                                                                            <?php

                                                                            include "connect.php";
                                                                            $query_insert="SELECT * FROM table_map";
                                                                            $result_insert=mysqli_query($connect, $query_insert);
                                                                            while ($row=mysqli_fetch_assoc($result_insert)){




                                                                                ?>



                                                                                <option value="<?php echo $row['table_value']  ?>"><?php echo $row['table_value'] ?></option>
                                                                            <?php } ?>
                                                                        </select>

                                                                    </div>
                                                                </div>

                                                            </li>

                                                        </ul><hr/>
                                                    </div>


                                                    <div class="space-16"> </div>
                                                    <div class="space-16"></div>
                                                    <div>
                                                        <button type="submit" href="index.php" name="delete" class="btn btn-block btn-danger">
                                                            <span>Delete</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
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
		<script src="assets/js/jquery.easypiechart.min.js"></script>

		<script src="assets/js/chosen.jquery.min.js"></script>
		<script src="assets/js/jquery.sparkline.index.min.js"></script>
		<script src="assets/js/jquery.flot.min.js"></script>
		<script src="assets/js/jquery.flot.pie.min.js"></script>
		<script src="assets/js/jquery.flot.resize.min.js"></script>

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
