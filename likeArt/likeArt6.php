<?php
	$conn = oci_connect("system","STUDENT","localhost/orcl");
	$id=6;
	$stmt=oci_parse($conn,'BEGIN inc_like_art(:id);END;');
		oci_bind_by_name($stmt,':id',$id);
		oci_execute($stmt);
	
	header("location: ../articles/articles.php");
	oci_close($conn);	
?>