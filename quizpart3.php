<?php include 'dbcon.php'; 
	  include 'toparticole.php';?>
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
					<h2 >Do you have a phobia?</h2>
				</header>

				
				
				
					
					<form id="quizmodif" action="quizpart4.php" method="post">
 
 <img src="spider.png" class="imagine2">
<p> 3.You are at summer camp, and spot a daddy long leg. You...
<br />
<fieldset id="group3" style="border-radius: 5px; background-color: #ffe6ee;">
<input type="radio"  name="group3" value="scream" /><label>Scream and run away</label></input><br/>
<input type="radio"  name="group3" value="shiver" /><label>Shiver</label></input><br/>
<input type="radio"  name="group3" value="disgusted" /><label>Feel disgusted</label></input><br/>
<input type="radio"  name="group3" value="indifferent " /><label>It dosen't bother you </label/></input><br/></fieldset>
</p>

 <input  type="submit" value="Next" />
 <input  type="submit" value="Quit" formaction='home.php' />
 </form>
				
				

			</article>
		

	
		</div>

	</div>





</body>
</html>