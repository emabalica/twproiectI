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

				
				
				
					
					<form  action="quizpart5.php" method="post">
 
  <img src="roller.png" class="imagine2">
<p>  4.You are riding up the funnest, highest, fastest roller coaster. You are just ascending the tallest slope. You...
<br />
<fieldset id="group4"style="border-radius: 5px; background-color: #ffe6ee;">
<input type="radio" name="group4" value="jittery" /> <label>Get jittery and close your eyes </label> </input></br>
<input type="radio" name="group4" value="fear" /><label> Can't wait for a 2-nd round</label> </input></br>
<input type="radio" name="group4" value="joy" /> <label>Scream for all that is good</label> </input></br>
<input type="radio" name="group4" value="excited" /> <label>You have the time of your life</label> </input>
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