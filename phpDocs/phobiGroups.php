<?php //phobiGroups.php

		if(isset($_SESSION['login_user'])){
			
		$query=oci_parse($conn,'select * from userstw where user_id=:id');
		oci_bind_by_name($query,':id',$_SESSION['login_user']);
		oci_execute($query);
		$row1 = oci_fetch_array($query, OCI_RETURN_NULLS+OCI_ASSOC);
		$role=$row1['ROLE'];
			
		if (strcmp($role,'user')==0){

			print "<div class=' containerPhobiGroups' >
						<h3 class='borduraPhobiGroups ' style='color:green'>Treat your phobia</h3>
						<img src='../photos/join.png' style='width:60%;padding-left:19%;'>
						<a href='http://localhost/siteFinal/darkFear/fearDarkStart.php'><img src='../photos/darkFear.png' style='width:40%;padding-left:30%;'></a>
				   </div>
				   <div class='paddingPhobi'>";
    


	$fobie='dark';
	$query=oci_parse($conn,'select * from userstw where fobie=:fobie');
	oci_bind_by_name($query,':fobie',$fobie);
	oci_execute($query);

		while($row1 = oci_fetch_array($query, OCI_RETURN_NULLS+OCI_ASSOC)){
	
				print "	<div class='singleContactDiv marginPhobi'>
							<img src='../".$row1['PROFILE_PIC']."'style='width:40%;border-radius:50%;margin-top:16px!important;'>
							<h3>".$row1['USER_NAME']."</h3>
							<p><button class='button decorate block'>Add friend</button></p>
						</div>";}
				
				print "	</div>
						<div class='containerPhobiGroups'>
						<a href='http://localhost/siteFinal/spider/fearOfSpider.php'><img src='../photos/fearSpider.png' style='width:40%;padding-left:30%;'></a>
						</div>
						<div class='paddingPhobi '>";

	$fobie='spider';
	$query=oci_parse($conn,'select * from userstw where fobie=:fobie');
	oci_bind_by_name($query,':fobie',$fobie);
	oci_execute($query);

		while($row1 = oci_fetch_array($query, OCI_RETURN_NULLS+OCI_ASSOC)){
	 
				print "<div class='singleContactDiv marginPhobi'>
							<img src='../".$row1['PROFILE_PIC']."'style='width:40%;border-radius:50%;margin-top:16px!important;'>
							<h3>".$row1['USER_NAME']."</h3>
							<p><button class='button decorate block'>Add friend</button></p>
						</div>";}

				print "	</div>
						<div class='containerPhobiGroups'>
							<a href='http://localhost/siteFinal/height/fearOfHeight.php'><img src='../photos/fearHeights.png' style='width:40%;padding-left:30%;'><a>
						</div>
						<div class='paddingPhobi'>";


	$fobie='height';
	$query=oci_parse($conn,'select * from userstw where fobie=:fobie');
	oci_bind_by_name($query,':fobie',$fobie);
	oci_execute($query);

		while($row1 = oci_fetch_array($query, OCI_RETURN_NULLS+OCI_ASSOC)){
		
				print " <div class='singleContactDiv marginPhobi'>
						<img src='../".$row1['PROFILE_PIC']."'style='width:40%;border-radius:50%;margin-top:16px!important;'>
						<h3>".$row1['USER_NAME']."</h3>
						<p><button class='button decorate block'>Add friend</button></p>
						</div>";}
		
		print "</div>";}
		}
 ?>
  