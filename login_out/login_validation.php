<?php

ob_start();
session_start();


if(isset($_POST['login'])){

//value initialization
    $admin_name="initialize";
    $admin_password="initialize";
    $student_name="initialize";
    $student_password="initialize";
    $coordinator_name="initialize";
    $coordinator_password="initialize";



    $username=$_POST['username'];
    $password=$_POST['password'];

    $connect_database=mysqli_connect("localhost","root","","login_database");



    //selecting admin database........
    $query_selection="SELECT * FROM admin_login WHERE username='{$username}'";
    $result_selection=mysqli_query($connect_database, $query_selection);
    $row_selection=mysqli_fetch_assoc($result_selection);
    $admin_database=$row_selection['database_name'];

    echo $admin_database;
    $connect=mysqli_connect("localhost","root","","$admin_database");



        // admin login

        $query_admin="SELECT * FROM login_admin WHERE username='{$username}'";
        echo $query_admin;
        $result_admin=mysqli_query($connect, $query_admin);
        $row_admin=mysqli_fetch_assoc($result_admin);
        $admin_name=$row_admin['username'];
        $admin_password=$row_admin['password'];

        //coordinator login

        $query_coordinator="SELECT * FROM login_coordinator WHERE username='{$username}'";
        $result_coordinator=mysqli_query($connect, $query_coordinator);
        $row_coordinator=mysqli_fetch_assoc($result_coordinator);
        $coordinator_name=$row_coordinator['username'];
        $coordinator_password=$row_coordinator['password'];



        //student login

        $isstudent=$username[4].$username[5];
        $isstudent+=4;

        $query_short="SELECT * FROM table_map WHERE table_short='{$isstudent}'";
        $result_short=mysqli_query($connect, $query_short);
        $row_short=mysqli_fetch_assoc($result_short);

        $student_table=$row_short['table_name'];





        $query_student="SELECT * FROM $student_table WHERE st_roll='{$username}'";
        $result_student=mysqli_query($connect, $query_student);
        $row_student=mysqli_fetch_assoc($result_student);

        $student_name=$row_student['st_roll'];
        $student_password=$row_student['st_pass'];
        $student_branch=$row_student['st_ugspecialization'];








    //admin validation
    if($admin_name==$username && $admin_password==$password){



        $_SESSION['database_name']=$admin_database;

        $_SESSION['user']=$username;
        $_SESSION['pass']=$password;
        header("Location: ../admin_login/index.php");
    }




    //coordinator validation

   else if($coordinator_name == $username && $coordinator_password == $password){




        $_SESSION['user']=$username;
        $_SESSION['pass']=$password;
        header("Location: ../coordinator_login/index.php");
    }




    //student validation


    else if($student_name == $username && $student_password==$password){






        $_SESSION['user'] = $username;
        $_SESSION['pass'] = $password;
        $_SESSION['student_name']=$username;
        $_SESSION['student_branch']=$student_branch;
        $_SESSION['table_name']=$student_table;
        header("Location: ../student_login/index.php");

    }


//    else{
//        header("Location: ../login.html");
//    }





}



?>

