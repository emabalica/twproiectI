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

				
				
				
					
					<form  action="quizpart2.php" method="post">
 
 <img src="age.png" class="imagine2">
 <p > 1.What is your age?
<br />
<fieldset id="group1"style="border-radius: 5px; background-color: #ffe6ee;  ">
<input type="radio" name="group1" value="teen" /> <label> Under 18 Years Old </label> </input></br>
<input type="radio" name="group1" value="adult" /> <label> 18 to 24 Years Old</label> </input></br>
<input type="radio" name="group1" value="mature" /> <label> 25 to 30 Years Old</label> </input></br>
<input type="radio" name="group1" value="mature40" /> <label> 31 to 40 Years Old</label> </input></br>
<input type="radio" name="group1" value="mature50" /> <label><label> 41 to 50 Years Old</label> </input></br>
<input type="radio" name="group1" value="old60" /> <label><label><label> 51 to 60 Years Old</label> </input></br>
<input type="radio" name="group1" value="old" /> <label> Over 60 Years Old </label> </input>
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