<!doctype html>
<?php
include_once 'db.php';
$user = $_POST['user'];
$pwd = $_POST['pwd'];
$result = mysqli_query($conn,"SELECT * FROM user_info");

while($row = mysqli_fetch_assoc($result)){
	if($row["Username"]==$user and $row["Password"]==$pwd){
		setcookie('isUserLoggedIn',$user, time()+(86400*7), "/");
		header("location: index.php"); 
	}
	elseif($row["Username"]!=$user){
		header("location: User_Confirmed.html"); //Locate to the dialog box
	}
	else{
		echo "<script>alert('Wrong password!')</script>";
		include_once("Login.html"); //Back to login page
	}
}
?>