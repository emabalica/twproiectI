<?php //allArticles.php

	$query=' select * from myphobias order by nr_reads';
	$results = oci_parse($conn, $query);
	(oci_execute($results)); 
	
	while($row1 = oci_fetch_array($results, OCI_RETURN_NULLS+OCI_ASSOC)){
			$value=$row1['ID_PHOBIA'];
			print "	<div class='individual_art '>
						<div class='bottomarticol'>
							<img src='".$row1['IMG_PATH']."' style='width:100%' class='change2'>
								<div class='bestart'>
									<a href='".$row1['PHOBIA_PATH']."' style='color:#b3ff66'><h3>".$row1['TITLE_PHOBIA']."</h3></a>
									<p class='opacitate'>".$row1['DATE_PHOBIA']."</p>
									<p>".$row1['RESUME_PHOBIA']."</p>
									<p><a href='http://localhost/siteFinal/likeArt/likeArt".$value.".php'><button class='likebutton '><i class='icon like'></i>Like</button></a></p>
								</div>
						</div>
					</div>";}

					
					
					


?>