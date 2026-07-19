<?php
if($_COOKIE['isUserLoggedIn'] == false){	//Cheking whether the 
	header('location: Login.html');
}
?>
<html>
<head>
	<meta charset="utf-8">
	<title>Basketball Court</title>
	<link rel="stylesheet" href="datetaker_style.css">
	<link rel="stylesheet" href="booking_page_style.css">
</head>
<body>
	<h1 align="center">Basketball Court</h1>
	<form action="booking.php" method="post">
		<input type="hidden" name="court" value="basketball">
		<table border="2" align="center">
		<thead><tr>
		<th>Monday</th><th>Tuesday</th><th>Wednesday</th><th>Thursday</th><th>Friday</th><th>Saturday</th><th>Sunday</th>
		</tr></thead>
			<tbody><tr>
				<td><input type="checkbox" name="time[]" onClick="checkLimit(2)" value="2_Mon">12:00-13:00</td>
				<td><input type="checkbox" name="time[]" onClick="checkLimit(2)" value="2_Tue">12:00-13:00</td>
				<td><input type="checkbox" name="time[]" onClick="checkLimit(2)" value="2_Wed">12:00-13:00</td>
				<td><input type="checkbox" name="time[]" onClick="checkLimit(2)" value="2_Thu">12:00-13:00</td>
				<td><input type="checkbox" name="time[]" onClick="checkLimit(2)" value="2_Fri">12:00-13:00</td>
				<td><input type="checkbox" name="time[]" onClick="checkLimit(2)" value="2_Sat">12:00-13:00</td>
				<td><input type="checkbox" name="time[]" onClick="checkLimit(2)" value="2_Sun">12:00-13:00</td>
				</tr></tbody>
			<tbody><tr>				
				<td><input type="checkbox" name="time[]" onClick="checkLimit(2)" value="3_Mon">13:00-14:00</td>
				<td><input type="checkbox" name="time[]" onClick="checkLimit(2)" value="3_Tue">13:00-14:00</td>
				<td><input type="checkbox" name="time[]" onClick="checkLimit(2)" value="3_Wed">13:00-14:00</td>
				<td><input type="checkbox" name="time[]" onClick="checkLimit(2)" value="3_Thu">13:00-14:00</td>
				<td><input type="checkbox" name="time[]" onClick="checkLimit(2)" value="3_Fri">13:00-14:00</td>
				<td><input type="checkbox" name="time[]" onClick="checkLimit(2)" value="3_Sat">13:00-14:00</td>
				<td><input type="checkbox" name="time[]" onClick="checkLimit(2)" value="3_Sun">13:00-14:00</td></tr></tbody>
			<tbody><tr>				
				<td><input type="checkbox" name="time[]" onClick="checkLimit(2)" value="4_Mon">14:00-15:00</td>
				<td><input type="checkbox" name="time[]" onClick="checkLimit(2)" value="4_Tue">14:00-15:00</td>
				<td><input type="checkbox" name="time[]" onClick="checkLimit(2)" value="4_Wed">14:00-15:00</td>
				<td><input type="checkbox" name="time[]" onClick="checkLimit(2)" value="4_Thu">14:00-15:00</td>
				<td><input type="checkbox" name="time[]" onClick="checkLimit(2)" value="4_Fri">14:00-15:00</td>
				<td><input type="checkbox" name="time[]" onClick="checkLimit(2)" value="4_Sat">14:00-15:00</td>
				<td><input type="checkbox" name="time[]" onClick="checkLimit(2)" value="4_Sun">14:00-15:00</td></tr></tbody>
			<tbody><tr>	
				<td><input type="checkbox" name="time[]" onClick="checkLimit(2)" value="5_Mon">15:00-16:00</td>
				<td><input type="checkbox" name="time[]" onClick="checkLimit(2)" value="5_Tue">15:00-16:00</td>
				<td><input type="checkbox" name="time[]" onClick="checkLimit(2)" value="5_Wed">15:00-16:00</td>
				<td><input type="checkbox" name="time[]" onClick="checkLimit(2)" value="5_Thu">15:00-16:00</td>
				<td><input type="checkbox" name="time[]" onClick="checkLimit(2)" value="5_Fri">15:00-16:00</td>
				<td><input type="checkbox" name="time[]" onClick="checkLimit(2)" value="5_Sat">15:00-16:00</td>
				<td><input type="checkbox" name="time[]" onClick="checkLimit(2)" value="5_Sun">15:00-16:00</td></tr></tbody>
			<tbody><tr>				
				<td><input type="checkbox" name="time[]" onClick="checkLimit(2)" value="6_Mon">16:00-17:00</td>
				<td><input type="checkbox" name="time[]" onClick="checkLimit(2)" value="6_Tue">16:00-17:00</td>
				<td><input type="checkbox" name="time[]" onClick="checkLimit(2)" value="6_Wed">16:00-17:00</td>
				<td><input type="checkbox" name="time[]" onClick="checkLimit(2)" value="6_Thu">16:00-17:00</td>
				<td><input type="checkbox" name="time[]" onClick="checkLimit(2)" value="6_Fri">16:00-17:00</td>
				<td><input type="checkbox" name="time[]" onClick="checkLimit(2)" value="6_Sat">16:00-17:00</td>
				<td><input type="checkbox" name="time[]" onClick="checkLimit(2)" value="6_Sun">16:00-17:00</td></tr></tbody>
			<tbody><tr>
				<td><input type="checkbox" name="time[]" onClick="checkLimit(2)" value="7_Mon">17:00-18:00</td>
				<td><input type="checkbox" name="time[]" onClick="checkLimit(2)" value="7_Tue">17:00-18:00</td>
				<td><input type="checkbox" name="time[]" onClick="checkLimit(2)" value="7_Wed">17:00-18:00</td>
				<td><input type="checkbox" name="time[]" onClick="checkLimit(2)" value="7_Thu">17:00-18:00</td>
				<td><input type="checkbox" name="time[]" onClick="checkLimit(2)" value="7_Fri">17:00-18:00</td>
				<td><input type="checkbox" name="time[]" onClick="checkLimit(2)" value="7_Sat">17:00-18:00</td>
				<td><input type="checkbox" name="time[]" onClick="checkLimit(2)" value="7_Sun">17:00-18:00</td></tr></tbody>
			<tbody><tr>				
				<td><input type="checkbox" name="time[]" onClick="checkLimit(2)" value="8_Mon">18:00-19:00</td>
				<td><input type="checkbox" name="time[]" onClick="checkLimit(2)" value="8_Tue">18:00-19:00</td>
				<td><input type="checkbox" name="time[]" onClick="checkLimit(2)" value="8_Wed">18:00-19:00</td>
				<td><input type="checkbox" name="time[]" onClick="checkLimit(2)" value="8_Thu">18:00-19:00</td>
				<td><input type="checkbox" name="time[]" onClick="checkLimit(2)" value="8_Fri">18:00-19:00</td>
				<td><input type="checkbox" name="time[]" onClick="checkLimit(2)" value="8_Sat">18:00-19:00</td>
				<td><input type="checkbox" name="time[]" onClick="checkLimit(2)" value="8_Sun">18:00-19:00</td></tr></tbody>
			<tbody><tr>			
				<td><input type="checkbox" name="time[]" onClick="checkLimit(2)" value="9_Mon">19:00-20:00</td>
				<td><input type="checkbox" name="time[]" onClick="checkLimit(2)" value="9_Tue">19:00-20:00</td>
				<td><input type="checkbox" name="time[]" onClick="checkLimit(2)" value="9_Wed">19:00-20:00</td>
				<td><input type="checkbox" name="time[]" onClick="checkLimit(2)" value="9_Thu">19:00-20:00</td>
				<td><input type="checkbox" name="time[]" onClick="checkLimit(2)" value="9_Fri">19:00-20:00</td>
				<td><input type="checkbox" name="time[]" onClick="checkLimit(2)" value="9_Sat">19:00-20:00</td>
				<td><input type="checkbox" name="time[]" onClick="checkLimit(2)" value="9_Sun">19:00-20:00</td></tr></tbody>
		</table>
		<p align="center"><input type="submit" name="submit"></p>
	</form>	
	<p class="centered-block">
		<span>Representation of colours：</span>
		<span class="color-block1"></span>
		<span>Can be booked，</span>
		<span class="color-block2"></span>
		<span>Cannot be booked</span>
	</p>
	<div id="timeDisplay" class="datetaker"></div>
	<script src="DateTaker.js"></script>
	
	<?php
	include_once 'db.php'; //Connect with database
	$temp = array();
	$result = mysqli_query($conn,"SELECT * FROM basketball_court_info");
	while($row = mysqli_fetch_assoc($result)){
		if($row['Status']){
			$temp[] = $row['Time_Period']; 
			//If Status value is false, the time period will be recorded in the temp array
 		}
	}
	?>
	<script>
		function checkLimit(max) {
  			const checks = document.querySelectorAll('input:checked'); //Select all the checked boxes
  			if (checks.length > max){
				event.target.checked = false; //Cancelling the selecting event
			}
		}
		
    	document.querySelectorAll('input[name="time[]"]').forEach(checkbox => {
      		const td = checkbox.closest('td');
			var array = <?php echo json_encode($temp); ?>; 
			td.classList.add("can_be_booked"); //Setting all the boxes with this style
			for(let i = 0; i<array.length ; i++){
				const value = checkbox.value; //Getting the value of checkbox
				if(value == array[i]){
			   		td.classList.add("cannot_be_booked"); //Setting the dedicate box with this style
		}}})
	</script>
</body>
</html>