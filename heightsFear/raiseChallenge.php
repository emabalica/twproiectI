<?php
	  //verific stadiu provocare user
SESSION_START();


$conn = oci_connect("system","STUDENT","localhost/orcl");
if (!$conn) {
   $m = oci_error();
   echo $m['message'], "\n";
   exit;
}


$id_provocare=3;
//salvez in baza de date stagiu provocare
$query = 'begin creste_nivel(:id_user,:id_provocare); end; ';
$results = oci_parse($conn, $query);
oci_bind_by_name($results,':id_user',$_SESSION['login_user']);
oci_bind_by_name($results,':id_provocare',$id_provocare);
oci_execute($results);
 
	 
  $query=oci_parse($conn,'select * from provocari where user_id=:id and provocare_id=3');
		  oci_bind_by_name($query,':id',$_SESSION['login_user']);
	      oci_execute($query);

$row1 = oci_fetch_array($query, OCI_RETURN_NULLS+OCI_ASSOC);
$stagiu_provocare=$row1['STAGIU_PROVOCARE'];


if(strcmp($stagiu_provocare,'2')==0){
		header("location: heightsFear2.php"); }

 if(strcmp($stagiu_provocare,'3')==0){
		header("location: heightsFear3.php"); }

 if(strcmp($stagiu_provocare,'4')==0){
		header("location: heightsFear4.php"); }

 if(strcmp($stagiu_provocare,'5')==0){
		header("location: heightsFear5.php"); }


?>