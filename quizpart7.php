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

				
				
				
					
					<form  action="quizpart8.php" method="post">
 
 <img src="dog.png" class="imagine2">
 <p > 7.Your friends want to visit a pet store to look at the new dogs. You know very well they have pet spiders there. You....
<br />
<fieldset id="group1"style="border-radius: 5px; background-color: #ffe6ee;  ">
<input type="radio" name="group1" value="teen" /> <label> Leave!! </label> </input></br>
<input type="radio" name="group1" value="adult" /> <label> Spiders? Who cares!</label> </input></br>
<input type="radio" name="group1" value="mature40" /> <label>  I go and see the doggies of course!</label> </input></br>
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