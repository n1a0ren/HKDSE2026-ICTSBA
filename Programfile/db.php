<?php
$dbservername = "localhost";
$dbusername = "n1a0ren";
$dbpassword = "9418wdnmd";
$dbname = "sports_centre";

$conn = mysqli_connect($dbservername,$dbusername,$dbpassword,$dbname);
if(!$conn){
	die("Connect failed!");
}
?>