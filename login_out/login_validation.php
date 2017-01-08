<?php

ob_start();
session_start();


if(isset($_POST['login'])){

    $username=$_POST['username'];
    $password=$_POST['password'];
    $connect=mysqli_connect("localhost","root","","rmd_database");

    $query_admin="SELECT * FROM login_admin WHERE username='{$username}'";
    $query_student="SELECT * FROM login_student WHERE username='{$username}'";
    $query_coordinator="SELECT * FROM login_coordinator WHERE username='{$username}'";

    $result_admin=mysqli_query($connect, $query_admin);
    $result_student=mysqli_query($connect, $query_student);
    $result_coordinator=mysqli_query($connect, $query_coordinator);

    $row_admin=mysqli_fetch_assoc($result_admin);
    $row_student=mysqli_fetch_assoc($result_student);
    $row_coordinator=mysqli_fetch_assoc($result_coordinator);

    $admin_name=$row_admin['username'];
    $admin_password=$row_admin['password'];

    $student_name=$row_student['username'];
    $student_password=$row_student['password'];

    $coordinator_name=$row_coordinator['username'];
    $coordinator_password=$row_coordinator['password'];

    if($admin_name==$username && $admin_password==$password){



        $_SESSION['user']=$username;
        $_SESSION['pass']=$password;
        header("Location: ../admin_login/index.php");
    }
    else if($student_name == $username && $student_password==$password){



        $_SESSION['user']=$username;
        $_SESSION['pass']=$password;
        header("Location: ../student_login/index.php");

    }
    else if($coordinator_name == $username && $coordinator_password == $password){



        $_SESSION['user']=$username;
        $_SESSION['pass']=$password;
        header("Location: ../coordinator_login/index.php");
    }
    else{

        header("Location: ../login.html");
    }


}



?>

