<?php
setcookie('isUserLoggedIn',"", time()+(86400*7), "/");
header("location: index.php");
?>