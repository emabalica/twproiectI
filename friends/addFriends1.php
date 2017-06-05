<?php
	session_start();
	$conn = oci_connect("system","STUDENT","localhost/orcl");
	$id=1;
	$stmt=oci_parse($conn,'insert into friends values(:id1,:id2)');
		oci_bind_by_name($stmt,':id1',$_SESSION['login_user']);
		oci_bind_by_name($stmt,':id2',$id);
		oci_execute($stmt);
	
	header("location: ../articles/articles.php");
	oci_close($conn);
		
?>