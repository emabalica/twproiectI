<?php include 'dbcon.php'; 
	  include 'toparticole.php';
	  $query = 'select * from provocari where user_id=:id '; //iau toate provocarile ptr user respectiv
	  $results = oci_parse($conn, $query);
	  oci_bind_by_name($results,':id',$_SESSION['login_user']);
	  $r = oci_execute($results);
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Phobia</title>
	<meta charset="utf-8"/>
	<link rel="stylesheet" href="stylesheet.css"/>
	<link rel="stylesheet" href="style.css"/>
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0>"
</head>

<body class="body">

	<header class="mainHeader">
		<img src="medic.png" >
		<nav> 
			<ul>
				<li><a href="http://localhost/responsive/home.php " >Home</a></li>
				<li><a href="http://localhost/responsive/phobias.php">Phobias</a></li>
				<li><a href="http://localhost/responsive/quizpart1.php">What's your phobia?</a></li>
				<li><a href="http://localhost/responsive/articles.php">Articles</a></li>
				<li><a href='http://localhost/responsive/provocari.php' class="active" >Account</a></li>
			</ul>
		</nav>
	</header>

	<div class="mainContent">
		<div class="Content">
			<article class="topContent">
				<header>
					<h2 >Challenges</h2>
				</header>

				
				
<?php

while($row1 = oci_fetch_array($results, OCI_RETURN_NULLS+OCI_ASSOC)){
$numar_stagiu=$row1['STAGIU_PROVOCARE'];
print 
"<div class='articole'><content><img src='".$row1['STAGIU_PROVOCARE'].".png' class='imagine3'> ";
if((int)$row1['STAGIU_PROVOCARE']!=6){

if((int)$row1['STAGIU_PROVOCARE']==0 or (int)$row1['STAGIU_PROVOCARE']==1)
	{$nivel_provocare=(int)$row1['STAGIU_PROVOCARE']+1;}
else
	{$nivel_provocare=(int)$row1['STAGIU_PROVOCARE'];}

$query2 = 'select * from provocari_nume where provocare_id=:id '; //iau toate provocarile ptr user respectiv
$res = oci_parse($conn, $query2);
oci_bind_by_name($res,':id',$row1['PROVOCARE_ID']);
oci_execute($res);


$row2 = oci_fetch_array($res, OCI_RETURN_NULLS+OCI_ASSOC);
print"
<h2>Challenge ".$row1['PROVOCARE_ID']."</h2><p>At the moment you have completed ".$numar_stagiu." tasks.</p>
<form  action='".$row2['NUME_PROVOCARE'].$nivel_provocare.".php' method='post' >
	
		  <input id='SearchButton' type='submit' name='Start' value='Start' style='border-radius: 5px; width:100px;'/>
		
		  </form></content></div>"; }
else{
	print"
  <h2>Challenge ".$row1['PROVOCARE_ID']."</h2><p>You have completed this challenge.</br>Congrats!</p></content></div>";
}
}
	?>			

			</article>
		

	
		</div>

	</div>
	<?php
	if(isset($_SESSION['login_user'])){
	print "<aside class='top-sidebar'>
		<article style=' padding-left: 17px; padding-bottom: 5px; '><form  action='singout_actiune.php' method='post' >
		  <fieldset style='text-align: center; width:50%;  border:3px solid  gray; '>
		  <legend>Disconnect</legend>
		  <input  type='submit' name='Logout' value='Logout' style='border-radius: 5px; width:100px ;'/>
		  </fieldset>
		  </form>
		</article>

	</aside>";}
	?>



	<aside class="top-sidebar">
		<article>
		<h2 style='margin: 0px 0px 10px 20px;color: #de6581; font-size: 120%; margin-left:5px; ;'>Top articles</h2>
		<ul style="list-style: none;">
		<?php
		while($row1 = oci_fetch_array($rez1, OCI_RETURN_NULLS+OCI_ASSOC)){
		print "<li><a href='http://localhost/tw/".$row1['ID_ART'].".php'><img  src=".$row1['IMG_PATH']." ' style='width:100%; margin-left:-40px;'>
		<p style='font-size:13px; font-style:italic; color:black; margin-left:-40px; '>".$row1['NAME_ART']."</br>".$row1['DATE_ART']."</p></a></li>";
		
		}

		while($row2 = oci_fetch_array($rez2, OCI_RETURN_NULLS+OCI_ASSOC)){
		print "<li><a href='http://localhost/tw/".$row2['ID_ART'].".php'><img  src=".$row2['IMG_PATH']." style='width:90%; margin-left:-40px;' >
		<p style='font-size:13px; font-style:italic; color:black;  margin-left:-40px;'>".$row2['NAME_ART']."</br>".$row2['DATE_ART']."</p></a></li>";
		}

		while($row3 = oci_fetch_array($rez3, OCI_RETURN_NULLS+OCI_ASSOC)){
		print "<li><a href='http://localhost/tw/".$row3['ID_ART'].".php'><img  src=".$row3['IMG_PATH']." style='width:90%; margin-left:-40px;' >
		<p style='font-size:13px; font-style:italic; color:black; margin-left:-40px;'>".$row3['NAME_ART']."</br>".$row3['DATE_ART']."</p></a></li>";
		}
		oci_close($conn);

		?>
	</ul>
	</article>
	</aside>




<footer class="main-footer">
	<p>Copyright.com</p>
</footer>


</body>
</html>