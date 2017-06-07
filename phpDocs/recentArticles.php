
<?php //recentArticles.php

		$query='select * from ( select * from myarticles order by months_between(sysdate,date_art)/12) where rownum <= 4 ';
		$results = oci_parse($conn,$query);
		(oci_execute($results)); 
	
		while($row1 = oci_fetch_array($results, OCI_RETURN_NULLS+OCI_ASSOC)){

				print "<div class='content mySlides'>
					   <a href='".$row1['ART_PATH']."'><img class='change' src='../".$row1['IMG_PATH']."' style='width:100%'></a>
					   <div class='title'>".$row1['TITLE_ART']."
					   </div></div>";
}
?>

