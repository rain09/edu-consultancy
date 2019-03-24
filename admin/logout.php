<?php
include '../inc/dbconfig.php';
include '../class/class.admin.php';

$admin= new Admin($DB_CON);
$admin->logout();
header("Location:login.php");
?>