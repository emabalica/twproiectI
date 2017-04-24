<?php include 'dbcon.php'; 
	  include 'toparticole.php';
	  $id_provocare=1;
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

				
				
				
					
					<form  method="post">
 
 <img src="diet.png" class="imagine2">
<p>5)The final step
<br />
<fieldset class="group1"style="border-radius: 5px; background-color: #ffe6ee; padding-bottom:4px;  ">
<input type="checkbox" name="group1" value="teen" /> <label> Eliminate caffeine/sugar/stimulants</label> </input></br>
<input type="checkbox" name="group1" value="teen" /> <label> Use anti-stress supplements (5–7 minutes)</label> </input></br>
<input type="checkbox" name="group1" value="teen" /> <label> Eat only whole, unprocessed foods</label> </input></br>
<input type="checkbox" name="group1" value="teen" /> <label>  Use appropriate medications as prescribed by
doctor </label> </input></br>
</fieldset >
</p>

 <input  type="submit" value="Next" formaction="finalprovocare.php"/>
 <input  type="submit" value="Quit" formaction='home.php' />
 </form>
				
				

			</article>
		

	
		</div>

	</div>





</body>
</html>