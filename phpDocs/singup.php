<?php


if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Username or Password is invalid";
}

// Define $username and $password
$username=$_POST['username'];
$password=$_POST['password'];
$mail=$_POST['mail'];


// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$conn = oci_connect("system","STUDENT","localhost/orcl");
if (!$conn) {
   $m = oci_error();
   echo $m['message'], "\n";
   exit;
}

$stmt=oci_parse($conn,'BEGIN register_usertw(:passw,:email,:username,:mesaj); END;');

oci_bind_by_name($stmt,':username',$username);
oci_bind_by_name($stmt,':email',$mail);
oci_bind_by_name($stmt,':passw',$password);
oci_bind_by_name($stmt,':mesaj',$mesaj,100);

if(!oci_execute($stmt)){
	$e=occi_error();
	trigger_error(htmlentities($e['message'],END_QUOTES),E_USER_ERROR);
	}
	
if(strcmp($mesaj, 'Inregistrare reusita')==0)
		 header("location: singin.php");
 else
	 if(strcmp($mesaj, 'You already have an account')==0)                 
	    header("location: dublure.php");
	if(strcmp($mesaj, 'User contains special char.Use only letters')==0)
		header("location: specialchar.php");
	if(strcmp($mesaj,'Not a valid mail address. It should look like : name@mail.com')==0)
		header("location: mailnotval.php");


oci_close($conn); // Closing Connection

?>