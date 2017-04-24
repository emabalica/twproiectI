



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

	<header class="mainHeader">
		<img src="medic.png" >
		<nav> 
			<ul>
				<li><a href="http://localhost/responsive/home.php ">Home</a></li>
				<li><a href="http://localhost/responsive/phobias.php"  class="active">Phobias</a></li>
				<li><a href="http://localhost/responsive/quizpart1.php">What's your phobia?</a></li>
				<li><a href="http://localhost/responsive/articles.php">Articles</a></li>
				<?php
				if(isset($_SESSION['login_user'])){
				print"<li><a href='http://localhost/responsive/provocari.php' >Account</a></li>";}?>
			</ul>
		</nav>
	</header>

	<div class="mainContent">
		<div class="Content">
			<article class="topContent">
				<header>
					<h2>Dental Phobia</h2>
				</header>

				<footer>
					<p class="post-info">This post was published on April 07,2017</p>
				</footer>

				
					<img src="DentalPhobia.png" class="imagine" >
				
				<content>
					
					

<p >Dental phobia can involve fear and avoidance of dentistry in general, or a more specific fear
about having a particular dental procedure. In some cases, it appears that the problem is not
a phobia at all but symptoms of post-traumatic stress disorder in response to a previous,
traumatic dental experience.
</p>
<p >More than half of adults in America experience some anxiety about going to the dentist,
though a much smaller number are phobic to the point of avoiding dentists altogether unless
they have an acute, painful dental emergency. Obviously, this can create very serious problems
for dental health, resulting in much more serious and intrusive procedures down the
road when you have not had regular cleanings and routine dental maintenance over the
years.</p>
<p >Women and young children report a higher incidence of dental phobia than men. The
more invasive the procedure (for example, oral surgery), the greater the likelihood of dental
phobia or at least considerable anticipatory dental anxiety.</p>


<h2>Causes</h2>
<p >There are multiple ways you can develop a fear of going to the dentist. The most common
is actually having had a painful or traumatic dental experience. A second factor is the personality
of the dentist. Even in the absence of painful experiences, many people develop fears
simply as the result of working with a dentist they found cold, impersonal, or uncaring.</p>
<p >Other causes can include hearing about someone else's bad experience or a generalization
of fear from doctor phobia-that is, you can be afraid of receiving any procedure in an
antiseptic clinic administered by a health professional.</p>
<p >Often a dental phobia can overlap with the fear of confinement (being in a chair you
can’t leave for a period of time) or a fear of loss of control (relinquishing complete control to the dentist, especially in the cases where you are sedated or put to sleep for the procedure).
Sometimes there is a fear of surrendering to the effects of the anesthetic.</p>


<h2>Treatment</h2>
<p >As with other phobias, the first-line treatment for dental phobia is cognitive behavioral
therapy. This would include three components.
</p>
<ul>
<li>Learn panic control techniques as described in chapter 6 of this book (for example,
abdominal breathing and the use of specific coping statements).</li>
<li>Identify and challenge catastrophic fears about the phobic situation—the tendency
both to overestimate the danger or threat of the situation and to underestimate your
ability to cope </li>
<li>Gradual exposure to the phobic situation. A hierarchy of progressive exposures
would be set up to the dentist’s office, then the treatment room, and, finally, a specific
procedure such as receiving an injection. In the latter case, you might first see
the syringe, then handle it, then witness the dentist giving a “placebo” injection to
himself, then finally receive the injection while in an induced state of relaxation</li>
</ul>
<p >Medications are commonly used to manage anxiety about dental procedures. Nitrous
oxide (or “laughing gas”) may be used to help you relax, though some people are afraid of
the mask that needs to be worn to administer the gas. Benzodiazepine tranquilizers such as
Xanax or Valium may be administered orally or intravenously ahead of the procedure. While
such medications help you to relax, you remain conscious and able to communicate with the
dentist. In general, if you are prone to dental anxiety, ask your dentist about using a dental
anesthetic that does not contain epinephrine.</p>
				</content>
				

			</article>
		

	
		</div>

	</div>
	<?php
	if(isset($_SESSION['login_user'])){
	print "<aside class='top-sidebar'>
		<article style=' padding-left: 17px; padding-bottom: 5px; '><form  action='singout_actiune.php' method='post' >
		  <fieldset style='text-align: center; width:50%;  border:3px solid  gray; '>
		  <legend>Disconnect</legend>
		  <input  type='submit' name='Logout' value='Logout' style='border-radius: 5px; width:100px ;'/>
		  </fieldset>
		  </form>
		</article>

	</aside>";}
	?>



	<aside class="top-sidebar">
		<article>
		<h2 style='margin: 0px 0px 10px 20px;color: #de6581; font-size: 120%; margin-left:5px; ;'>Top articles</h2>
		<ul style="list-style: none;">
		<?php
		while($row1 = oci_fetch_array($rez1, OCI_RETURN_NULLS+OCI_ASSOC)){
		print "<li><a href='http://localhost/tw/".$row1['ID_ART'].".php'><img  src=".$row1['IMG_PATH']." ' style='width:100%; margin-left:-40px;'>
		<p style='font-size:13px; font-style:italic; color:black; margin-left:-40px; '>".$row1['NAME_ART']."</br>".$row1['DATE_ART']."</p></a></li>";
		
		}

		while($row2 = oci_fetch_array($rez2, OCI_RETURN_NULLS+OCI_ASSOC)){
		print "<li><a href='http://localhost/tw/".$row2['ID_ART'].".php'><img  src=".$row2['IMG_PATH']." style='width:90%; margin-left:-40px;' >
		<p style='font-size:13px; font-style:italic; color:black;  margin-left:-40px;'>".$row2['NAME_ART']."</br>".$row2['DATE_ART']."</p></a></li>";
		}

		while($row3 = oci_fetch_array($rez3, OCI_RETURN_NULLS+OCI_ASSOC)){
		print "<li><a href='http://localhost/tw/".$row3['ID_ART'].".php'><img  src=".$row3['IMG_PATH']." style='width:90%; margin-left:-40px;' >
		<p style='font-size:13px; font-style:italic; color:black; margin-left:-40px;'>".$row3['NAME_ART']."</br>".$row3['DATE_ART']."</p></a></li>";
		}
		oci_close($conn);

		?>
	</ul>
	</article>
	</aside>


<?php


if(!isset($_SESSION['login_user'])){
print"
<aside class='middle-sidebar'>

	
	<form   method='post' accept-charset='UTF-8'>
	<fieldset >
	<legend>Register</legend>
	<input type='hidden' name='submitted' id='submitted' value='1'/>
	<label for='username' >UserName:</label>
	<input type='text' name='username' id='username' maxlength='50' />
	<label for='password' >Password:</label>
	<input type='password' name='password' id='password' maxlength='50' />
	<input type='submit' name='Submit' value='Submit'  formaction='singin_actiune.php'/>
	<input type='submit' name='Register' value='Register'  formaction='singup.php'/>
</fieldset ></form></aside>";}?>


<aside class="bottom-sidebar">
		<article>
			<content>
					<p><img id="adress" src="adress.png"  style="width:15px;">Strada General Henri Mathias Berthelot 16, Iași 70025</p>
  					<p><img id="phone" src="phone.png"  style="width:15px;">0232 201 090</p>
  					<p><img id="website" src="website.png"  style="width:15px;"> info.uaic.ro</p>

					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2712.1904313670793!2d27.5750766!3d47.173708!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40cafb6227e846bd%3A0x193e4b6864504e2c!2sFaculty+of+Computer+Science!5e0!3m2!1sen!2sro!4v1492861546250" class="iframe"></iframe>


				</content>
		</article>
	</aside>


<footer class="main-footer">
	<p>Copyright.com</p>
</footer>


</body>
</html>