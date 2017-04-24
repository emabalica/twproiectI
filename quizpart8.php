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

				
				
				
					
					<form  action="quizpart9.php" method="post">
 
 <img src="snake.png" class="imagine2">
 <p> 9.You spot a water snake in the creek. You..
<br />
<fieldset id="group1"style="border-radius: 5px; background-color: #ffe6ee;  ">
<input type="radio" name="group1" value="teen" /> <label> Swim away</label> </input></br>
<input type="radio" name="group1" value="adult" /> <label> Go and get your camera</label> </input></br>
<input type="radio" name="group1" value="mature" /> <label> Race with it</label> </input></br>

</fieldset >
</p>

 <input  type="submit" value="Submit" />
 <input  type="submit" value="Quit" formaction='home.php' />
 </form>
				
				

			</article>
		

	
		</div>

	</div>





</body>
</html>