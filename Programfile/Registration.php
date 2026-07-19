<?php
include_once 'db.php'; //connect to database

//let variable
$user = $_POST['user'];
$pwd = $_POST['pwd'];
$pwd2 = $_POST['pwd2'];
$valid = true;
$result = mysqli_query($conn,"SELECT * FROM user_info");

while($user2 = mysqli_fetch_assoc($result)){ //Fetch the result from database as a associative array
	if($user == $user2["Username"]){ //Data validation 1
		echo "<script>alert('Username exists!')</script>"; 
		$valid = false;
	}
}
if($pwd != $pwd2){ //Data validation 2
	echo "<script>alert('Two passwords are inconsistent!')</script>";
	$valid = false;
}
elseif(strlen($pwd)<8){ //Data validation 3
	echo "<script>alert('Password must have at least 8 characters!')</script>";
	$valid = false;
}
if($valid == false){ 
	include_once("Registration.html"); //Back to registration page
}elseif($valid == true){
	$query = "INSERT INTO user_info (Username,Password) VALUES ('$user','$pwd')"; //Adding data into database
	mysqli_query($conn,$query);
	setcookie('isUserLoggedIn',$user, time()+(86400*7), "/"); //Setting new cookie
	header("Location: index.php");//Locate to index page
}
?>