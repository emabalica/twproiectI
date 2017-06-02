<?php //deletePost.php


	if(empty($_POST['username']) || empty($_POST['password'])){
		$error = "Username or Password is invalid";}

	$type=$_POST['art_type'];
	$name=$_POST['name'];



	$conn = oci_connect("system","STUDENT","localhost/orcl");
	if (!$conn) {
		$m = oci_error();
		echo $m['message'], "\n";
		exit;}



	$query=oci_parse($conn,'BEGIN delete_post(:type,:name,); END;');
	oci_bind_by_name($query,':type',$type);
    oci_bind_by_name($query,':name',$name);
	oci_execute($query);


    header("location:home.php"); 

oci_close($conn);
?>
