<?php


		if(empty($_POST['username']) || empty($_POST['password'])) {
			$error = "Username or Password is invalid";}

		// Define $username and $password
		$username=$_POST['username'];
		$password=$_POST['password'];

		// Establishing Connection with Server by passing server_name, user_id and password as a parameter
		$conn = oci_connect("system","STUDENT","localhost/orcl");
		if (!$conn) {
			$m = oci_error();
			echo $m['message'], "\n";
			exit;}


		$stmt=oci_parse($conn,'BEGIN logintw(:username,:passw,:id,:mesaj);END;');
		oci_bind_by_name($stmt,':username',$username);
		oci_bind_by_name($stmt,':passw',$password);
		oci_bind_by_name($stmt,':id',$id);
		oci_bind_by_name($stmt,':mesaj',$mesaj,300);
		oci_execute($stmt);


		if(strcmp($mesaj,'User or password are wrong or you do not have an account')==0){
				header("location:error.php"); }
		else{
		SESSION_START();
		$_SESSION['login_user']=$id;
		header("location:../home/home.php"); }

	
		oci_close($conn); 
?>



