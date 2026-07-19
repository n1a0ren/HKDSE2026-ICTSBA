<?php
include_once 'db.php';
$username = $_COOKIE['isUserLoggedIn'];
$var = $_POST['time'];
$court = $_POST['court']."_court_info";
if(count($var)>1){
	$var2 = $var[1];
}
$var1 = $var[0];
$result = mysqli_query($conn, "SELECT * FROM $court");
while($row = mysqli_fetch_assoc($result)){
	if(isset($var2)){
		if($var1 == $row['Time_Period']){
			mysqli_query($conn, "UPDATE $court SET Status = '$username' WHERE Time_Period = '$var1'");
		}
		if($var2 == $row['Time_Period']){
			mysqli_query($conn, "UPDATE $court SET Status = '$username' WHERE Time_Period = '$var2'");
		}
	}else{
		if($var1 == $row['Time_Period']){
			mysqli_query($conn, "UPDATE $court SET Status = '$username' WHERE Time_Period = '$var1'");
		}
	}
}
echo "<script>alert('Booking success!')</script>";
include_once("index.php"); //Back to homepage
?>