<?php //allArticles.php

	$query=' select * from myarticles order by nr_reads';
	$results = oci_parse($conn, $query);
	(oci_execute($results)); 
	
	while($row1 = oci_fetch_array($results, OCI_RETURN_NULLS+OCI_ASSOC)){
	 
			print "	<div class='individual_art '>
						<div class='bottomarticol'>
							<img src='../".$row1['IMG_PATH']."' style='width:100%' class='change2'>
								<div class='bestart'>
									<a href='".$row1['ART_PATH']."' style='color:#b3ff66'><h3>".$row1['TITLE_ART']."</h3></a>
									<p class='opacitate'>".$row1['DATE_ART']."</p>
									<p>".$row1['RESUME_ART']."</p>
									<p><button class='likebutton '><i class='icon like'></i>Like</button></p>
								</div>
						</div>
					</div>";}
?>