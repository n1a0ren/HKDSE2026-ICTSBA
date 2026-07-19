<?php
include_once("db.php");
$sql = "DELETE FROM user_info";
mysqli_query($conn,$sql);
?>