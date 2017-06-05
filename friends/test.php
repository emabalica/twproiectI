<?

$query=oci_parse($conn,'select * from friends id_user=:id');
		oci_bind_by_name($query,':id',$_SESSION['login_user']);
		oci_execute($query);

		
			
		while($row1 = oci_fetch_array($query, OCI_RETURN_NULLS+OCI_ASSOC)){
	
			$query2=oci_parse($conn,'select * from USERSTW where user_id=:id');
			oci_bind_by_name($query2,':id',$row1['ID_USER']);
			oci_execute($query2);
	
				while($row2 = oci_fetch_array($query2, OCI_RETURN_NULLS+OCI_ASSOC)){
				print $row2['MAIL'];}
		
		
		}
		
?>