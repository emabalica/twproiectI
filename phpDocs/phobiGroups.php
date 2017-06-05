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
							<h3>".$row1['USER_NAME']."</h3>";
							$stmt=oci_parse($conn,'BEGIN see_friend_exist(:id,:id2,:rasp);END;');
						oci_bind_by_name($stmt,':id',$_SESSION['login_user']);
						oci_bind_by_name($stmt,':id2',$row1['USER_ID']);
						oci_bind_by_name($stmt,':rasp',$rasp);
						oci_execute($stmt);
						if($rasp==0)
							print "<p><a href='http://localhost/siteFinal/friends/addFriends".$row1['USER_ID'].".php'><button class='button decorate block'>Add friend</button></a></p>";
						else
							print "<p><a href='http://localhost/siteFinal/friends/seeFriends.php'><button class='button decorate block'>See friend</button></a></p>";

							
					

						print "</div>";}
				
				print "	</div>
						<div class='containerPhobiGroups'>
						<a href='http://localhost/siteFinal/spiderFear/FearSpiderStart.php'><img src='../photos/fearSpider.png' style='width:40%;padding-left:30%;'></a>
						</div>
						<div class='paddingPhobi '>";

	$fobie='spider';
	$query=oci_parse($conn,'select * from userstw where fobie=:fobie');
	oci_bind_by_name($query,':fobie',$fobie);
	oci_execute($query);

		while($row1 = oci_fetch_array($query, OCI_RETURN_NULLS+OCI_ASSOC)){
	 
				print "<div class='singleContactDiv marginPhobi'>
							<img src='../".$row1['PROFILE_PIC']."'style='width:40%;border-radius:50%;margin-top:16px!important;'>
							<h3>".$row1['USER_NAME']."</h3>";
							
						
						$stmt=oci_parse($conn,'BEGIN see_friend_exist(:id,:id2,:rasp);END;');
						oci_bind_by_name($stmt,':id',$_SESSION['login_user']);
						oci_bind_by_name($stmt,':id2',$row1['USER_ID']);
						oci_bind_by_name($stmt,':rasp',$rasp);
						oci_execute($stmt);
						if($rasp==0)
							print "<p><a href='http://localhost/siteFinal/friends/addFriends".$row1['USER_ID'].".php'><button class='button decorate block'>Add friend</button></a></p>";
						else
							print "<p><a href='http://localhost/siteFinal/friends/seeFriends.php'><button class='button decorate block'>See friend</button></a></p>";

							
					

						print "</div>";}

				print "	</div>
						<div class='containerPhobiGroups'>
							<a href='http://localhost/siteFinal/heightsFear/heightsFearStart.php'><img src='../photos/fearHeights.png' style='width:40%;padding-left:30%;'><a>
						</div>
						<div class='paddingPhobi'>";


	$fobie='height';
	$query=oci_parse($conn,'select * from userstw where fobie=:fobie');
	oci_bind_by_name($query,':fobie',$fobie);
	oci_execute($query);

		while($row1 = oci_fetch_array($query, OCI_RETURN_NULLS+OCI_ASSOC)){
		
				print " <div class='singleContactDiv marginPhobi'>
						<img src='../".$row1['PROFILE_PIC']."'style='width:40%;border-radius:50%;margin-top:16px!important;'>
						<h3>".$row1['USER_NAME']."</h3>";
						
						$stmt=oci_parse($conn,'BEGIN see_friend_exist(:id,:id2,:rasp);END;');
						oci_bind_by_name($stmt,':id',$_SESSION['login_user']);
						oci_bind_by_name($stmt,':id2',$row1['USER_ID']);
						oci_bind_by_name($stmt,':rasp',$rasp);
						oci_execute($stmt);
						if($rasp==0)
							print "<p><a href='http://localhost/siteFinal/friends/addFriends".$row1['USER_ID'].".php'><button class='button decorate block'>Add friend</button></a></p>";
						else
							print "<p><a href='http://localhost/siteFinal/friends/seeFriends.php'><button class='button decorate block'>See friend</button></a></p>";

							
					

						print "</div>";}
		
		print "</div>";}
		}
 ?>
  