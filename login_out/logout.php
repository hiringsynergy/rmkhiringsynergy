<?php
/**
 * Created by PhpStorm.
 * User: Akash
 * Date: 17-12-2016
 * Time: 09:13
 */

session_start();

$_SESSION['user']=null;
$_SESSION['pass']=null;
$_SESSION['database_name']=null;
header("Location: ../login.html");
?>