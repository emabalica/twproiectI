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

				
				
				
					
					<form   method="post">
 
 <img src="self.png" class="imagine2">
<p>4)Forth step
<br />
<fieldset class="group1"style="border-radius: 5px; background-color: #ffe6ee; padding-bottom:4px;  ">
<input type="checkbox" name="group1" value="teen" /> <label> Work on improving body image</label> </input></br>
<input type="checkbox" name="group1" value="teen" /> <label> Take steps toward achieving goals**</label> </input></br>
<input type="checkbox" name="group1" value="teen" /> <label> Work on countering inner critic</label> </input></br>
<input type="checkbox" name="group1" value="teen" /> <label> Work on nurturing inner child</label> </input></br>
</fieldset >
</p>

 <input  type="submit" value="Next" formaction="provocare1part5.php"/>
 <input  type="submit" value="Quit" formaction='home.php' />
 </form>
				
				

			</article>
		

	
		</div>

	</div>





</body>
</html>