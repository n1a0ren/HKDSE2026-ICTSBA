<?php
include_once('db.php');
$time = $_POST['time'];
$court = $_POST['court'];
mysqli_query($conn,"UPDATE {$court} SET Status = NULL WHERE Time_Period = '{$time}'");
//Update the target data in database into null
header("location: userinfo.php");
?>