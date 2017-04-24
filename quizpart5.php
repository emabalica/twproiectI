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

				
				
				
					
					<form  action="quizpart6.php" method="post">
 
 <img src="dark.png" class="imagine2">
 <p > 5.You are in your room and your night light is broken. You...
<br />
<fieldset id="group1"style="border-radius: 5px; background-color: #ffe6ee;  ">
<input type="radio" name="group1" value="teen" /> <label>Snuggle up tight and try to sleep </label> </input></br>
<input type="radio" name="group1" value="adult" /> <label>I don't have a night light</label> </input></br>
<input type="radio" name="group1" value="mature" /> <label>Scream</label> </input></br>
<input type="radio" name="group1" value="mature40" /> <label>You couldn't care less</label> </input>
</fieldset >
</p>

 <input  type="submit" value="Next" />
 <input  type="submit" value="Quit" formaction='home.php' />
 </form>
				
				

			</article>
		

	
		</div>

	</div>





</body>
</html>