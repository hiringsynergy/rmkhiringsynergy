<?php

if(isset($_SESSION['database_name'])){

    $database=$_SESSION['database_name'];
    $connect=mysqli_connect("localhost","root","","$database");

}

