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

				
				
				
					
					<form  action="quizpart7.php" method="post">
 
 <img src="camping.png" class="imagine2">
 <p> 6.You are on a long vacation in a cabin you...
<br />
<fieldset id="group1"style="border-radius: 5px; background-color: #ffe6ee;  ">
<input type="radio" name="group1" value="teen" /> <label>  Pack plenty of lenterns </label> </input></br>
<input type="radio" name="group1" value="adult" /> <label> Pack plenty of bug spray/spider repellent</label> </input></br>
<input type="radio" name="group1" value="mature" /> <label> Avoid mountains or cliffs at all costs</label> </input></br>
<input type="radio" name="group1" value="mature40" /> <label> Just enjoy myself!</label> </input></br>
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