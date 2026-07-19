<html>
<head>
	<meta charset="utf-8">
	<title>RickyLi's Sports Centre</title>
	<link rel="stylesheet" href="datetaker_style.css">
</head>
<body>
    <h1 align="center">RickyLi's Sports Centre</h1>
	<p align="center" style="font-size: 25px"> 
		<a href="Badminton.php">Booking a badminton court</a><br>
		<a href="Volleyball.php">Booking a volleyball court</a><br>
		<a href="Basketball.php">Booking a basketball court</a><br><br><br>
	</p>
	<p align="center" style="font-size: 20px">
		<a href="userinfo.php">My Bookings</a><br><br>
		<?php
		if(isset($_COOKIE['isUserLoggedIn']) && $_COOKIE['isUserLoggedIn']){
			echo "Your user name is {$_COOKIE['isUserLoggedIn']}<br>";
			echo "<a href='Logout.php'>Logout</a>";
		}else{
			echo "<a href='Login.html'>Login</a>";
		}
		?>
		<div id="timeDisplay" class="datetaker"></div>
		<script src="DateTaker.js"></script>
	</p>
</body>
</html>
