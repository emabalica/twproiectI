<?php

	SESSION_START();
	$_SESSION = array();
	unset($_SESSION['login_user']);

header("location:../home/home.php")

?>