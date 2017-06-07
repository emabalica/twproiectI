<?php

	$type=$_POST['art_type'];
	$name=$_POST['name'];

	$conn = oci_connect("system","STUDENT","localhost/orcl");
	if (!$conn) {
	   $m = oci_error();
	   echo $m['message'], "\n";
	   exit;
	}

	if(strcmp($type,'Article')==0){

	



	$query=oci_parse($conn,'delete from myarticles where title_art=:name');
	oci_bind_by_name($query,':name',$name);
	oci_execute($query);
	
	}

	if(strcmp($type,'Phobia')==0){

	



	$query=oci_parse($conn,'delete from myarticles where title_phobia=:name');
	oci_bind_by_name($query,':name',$name);
	oci_execute($query);
	
	}


    header("location:../home/home.php"); 


	oci_close($conn); // Closing Connection
?>
