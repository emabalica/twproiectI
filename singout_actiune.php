<?php

SESSION_START();
$_SESSION = array();
session_destroy();

echo "You logged out.Click <a href='http://localhost/responsive/home.php'>link</a> to return";

?>