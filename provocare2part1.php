<?php 

php session_start();
$conn = oci_connect("system","STUDENT","localhost/orcl");


	  $id_provocare=2;
$query = 'begin creste_nivel(:id_user,:id_provocare); end; '; //iau toate provocarile ptr user respectiv
$results = oci_parse($conn, $query);
oci_bind_by_name($results,':id_user',$_SESSION['login_user']);
oci_bind_by_name($results,':id_provocare',$id_provocare);
 oci_execute($results);
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

	
	<div class="mainContent2">
		<div class="Content">
			<article class="topContent">
				<header>
					<h2 >Challenge 1</h2>
				</header>

				
				
				
					
					<form   method="post">
 
 <img src="no.png" class="imagine2">
<p>1)First step
<br />
<fieldset class="group1"style="border-radius: 5px; background-color: #ffe6ee; padding-bottom:4px;  ">
<input type="checkbox" name="group1" value="teen" /> <label> Learn that your feelings and needs are important</label> </input></br>
<input type="checkbox" name="group1" value="teen" /> <label> Learn to ask others for what you need.</label> </input></br>
<input type="checkbox" name="group1" value="teen" /> <label> Learn that it's okay to say no to others.</label> </input></br>
<input type="checkbox" name="group1" value="teen" /> <label> Learn to take life one day at a time.</label> </input></br>
</fieldset >
</p>

 <input  type="submit" value="Next" formaction="provocare2part2.php"/>
 <input  type="submit" value="Quit" formaction='home.php' />
 </form>
				
				

			</article>
		

	
		</div>

	</div>





</body>
</html>