


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

				
				
				
					
					<form id="quizmodif" action="quizpart3.php" method="post">
 
 <img src="gender.png" class="imagine2">
<p>  2.What is your gender?
<br />
<fieldset id="group2"style="border-radius: 5px; background-color: #ffe6ee;">
<input type="radio" name="group2" value="male" /><label>Male<br/></input></br>
<input type="radio" name="group2" value="female" /><label>Female<br/></input>
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