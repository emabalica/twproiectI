<?php //toparticole.php
		
		$cauta=oci_parse($conn,'BEGIN best_read(:id1,:id2,:id3); END;');

		oci_bind_by_name($cauta,':id1',$id1);
		oci_bind_by_name($cauta,':id2',$id2);
		oci_bind_by_name($cauta,':id3',$id3);

	if(!oci_execute($cauta)){
		$l=occi_error();
	trigger_error(htmlentities($l['message'],END_QUOTES),E_USER_ERROR);
	}
	
		$query1 = 'select * from articole where id_art=:id1';
		$rez1 = oci_parse($conn, $query1);
		oci_bind_by_name($rez1,':id1',$id1);
		oci_execute($rez1);

		$query2 = 'select * from articole where id_art=:id2';
		$rez2 = oci_parse($conn, $query2);
		oci_bind_by_name($rez2,':id2',$id2);
		oci_execute($rez2);


		$query3 = 'select * from articole where id_art=:id3';
		$rez3 = oci_parse($conn, $query3);
		oci_bind_by_name($rez3,':id3',$id3);
		oci_execute($rez3);
		?>