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
	 //{header("location: singin.php");}
		 {print "Subscription succeeded.Click <a href='http://localhost/responsive/home.php'>link</a> to login";}
 else
	 if(strcmp($mesaj, 'You already have an account')==0)                 
	    {print $mesaj."Click <a href='http://localhost/tw/home.php'>link</a> to login";}
	if(strcmp($mesaj, 'User contains special char.Use only letters')==0)
		{print $mesaj."Click <a href='http://localhost/tw/signup.php'>link</a> to register";}
	if(strcmp($mesaj,'Not a valid mail address. It should look like : name@mail.com')==0)
		{print $mesaj."Click <a href='http://localhost/tw/singup.php'>link</a> to register";}


oci_close($conn); // Closing Connection

?>
