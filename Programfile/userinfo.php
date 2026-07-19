<?php
if($_COOKIE['isUserLoggedIn'] == false){
	header('location: Login.html');
}
?>
<html>
<head>
<meta charset="utf-8">
<title>User Information</title>
</head>
<body>
	<?php
	echo "<h1 align='center'>Your username is: {$_COOKIE['isUserLoggedIn']}</h1>";
	include_once 'db.php';
	$doUserBooked = 0;	//This is used to check if the user has any booking records
	$courts = ["badminton_court_info", "basketball_court_info", "volleyball_court_info"];
	for($i=0; $i<count($courts); $i+=1){
		$result = mysqli_query($conn, "SELECT * FROM {$courts[$i]}");
		while($row = mysqli_fetch_assoc($result)){
			if($row['Status'] == $_COOKIE['isUserLoggedIn']){
				
				$courtName = substr(str_replace("_", " ", $courts[$i]),0,-4);
				$startTime = strval(intval(substr($row['Time_Period'],0,1))+10).":00";
				$endTime = strval(intval(substr($row['Time_Period'],0,1))+11).":00";
				$day = substr($row['Time_Period'],2,3);
				$output = "{$courtName} {$day} {$startTime}-{$endTime}";
				//These five lines are formatting the message output
				echo "
    			<form method='POST' action='cancel.php' onsubmit=\"return confirm('Confirm to delete?')\">
        			<p align='center'>{$output} 
        			<input type='hidden' name='time' value='{$row['Time_Period']}'>
        			<input type='hidden' name='court' value='{$courts[$i]}'>
        			<button type='submit'>Cancel</button></p>
    			</form>";	//Making a input form for users to cancel their booking
				$doUserBooked += 1;
			}
		}
	}
	if($doUserBooked == 0){
		echo "<p align='center'>You don't have any booking records!</p>";
	}
	?>
	<p align="center"><u><a href="index.php">Back</a><br>
</body>
</html>
