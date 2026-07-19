<?php
include_once 'db.php';
$tables = ["badminton_court_info", "basketball_court_info", "volleyball_court_info"];
for($k=0; $k<3; $k++){
	$court = $tables[$k];
	mysqli_query($conn,"DELETE FROM $court"); //Clear all data in the table
	for($i=2; $i<10; $i++){
		$j = intval($i); //Convert the integer data into string type
		$temp = $j."_Mon";
		mysqli_query($conn,"INSERT INTO $court (Time_Period, Status) VALUES ('$temp', '')");
	}
	for($i=2; $i<10; $i++){
		$j = intval($i);
		$temp = $j."_Tue";
		mysqli_query($conn,"INSERT INTO $court (Time_Period, Status) VALUES ('$temp', '')");
	}
	for($i=2; $i<10; $i++){
		$j = intval($i);
		$temp = $j."_Wed";
		mysqli_query($conn,"INSERT INTO $court (Time_Period, Status) VALUES ('$temp', '')");
	}
	for($i=2; $i<10; $i++){
		$j = intval($i);
		$temp = $j."_Thu";
		mysqli_query($conn,"INSERT INTO $court (Time_Period, Status) VALUES ('$temp', '')");
	}
	for($i=2; $i<10; $i++){
		$j = intval($i);
		$temp = $j."_Fri";
		mysqli_query($conn,"INSERT INTO $court (Time_Period, Status) VALUES ('$temp', '')");
	}
	for($i=2; $i<10; $i++){
		$j = intval($i);
		$temp = $j."_Sat";
		mysqli_query($conn,"INSERT INTO $court (Time_Period, Status) VALUES ('$temp', '')");
	}
	for($i=2; $i<10; $i++){
		$j = intval($i);
		$temp = $j."_Sun";
		mysqli_query($conn,"INSERT INTO $court (Time_Period, Status) VALUES ('$temp', '')");
	}
}
?>