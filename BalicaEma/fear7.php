

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
				<li><a href="http://localhost/responsive/home.php " >Home</a></li>
				<li><a href="http://localhost/responsive/phobias.php" class="active">Phobias</a></li>
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
					<h2>Fear of Heights</h2>
				</header>

				<footer>
					<p class="post-info">This post was published on April 07,2017</p>
				</footer>

				
					<img src="FearofHeights.png" class="imagine">

				<content>
				
<p >The fear of heights, or acrophobia, is another very common phobia. Frequently, it combines with
other phobias, such as the fear of flying, fear of riding elevators, or fear of driving over a high
bridge. The most frequent form of the fear is being high up in a building.</p>
<p >Sometimes the fear of heights is confused with vertigo. Vertigo is a sensation of spinning
usually caused by a medical condition, and it rarely occurs with acrophobia. A more common
reaction to heights is dizziness and difficulty trusting your own sense of balance. Frequently,
you may grab on to something to steady yourself, and if that doesn’t help, you may panic.</p>
<p >People with acrophobia should avoid construction work at heights or climbing tall
ladders. Unfortunately, this is one phobia where panic might, in some circumstances, lead to
a dangerous fall.</p>
<p >Acrophobia can result in severe restrictions on your life if it causes you, for example, to
avoid taking a job offer that would involve being high up in a building or visiting someone
in the hospital on a high floor.</p>


<h2>Causes</h2>
<p >A certain amount of acrophobia is instinctive in all animals. It has an evolutionary
advantage in preventing falls. However, a true phobia of heights is typically learned and is
an exaggeration of the normal, adaptive fear response to heights. It may develop as the result
of an actual fall or the memory of an incident where you were very afraid of falling as a child.
People prone to having problems with balance may be more susceptible to developing a fear
of heights, but the research on this is inconclusive.</p>


<h2>Treatment</h2>
<p >Cognitive behavioral therapy is effective in overcoming the fear of heights. The acrophobic
is first taught panic-control strategies and then undergoes a gradual,
progressive exposure to a hierarchy of situations that involve increasing heights. This can
be done by going up successive floors in a building and looking out of a window or even
walking onto balconies. As with other phobias, having a support person accompany you
when you first attempt exposure can be very helpful. Here is an example of a hierarchy of
exposures for the fear of heights:
<ul>
<li>Go to the second story of a building and look out a window for ten to sixty seconds.Have a support person go with you if you wish.</li>
<li>Look out of a second-story window for two to five minutes. Look straight out and
then down. Have a support person go with you, if you wish.</li>
<li>Go to the third floor of a building and look out of a window for ten to sixty seconds.
Take someone with you, if you wish.</li>
<li>Repeat step 4 for two to five minutes. Look straight ahead and then down.</li>
<li>Repeat steps 4 and 5 with phone access to your support person, then alone.</li>
<li>Continue the process in steps 1 through 6 for progressively higher floors in a taller
building. Beyond the fourth floor, take an elevator to higher floors.</li>
<li>Continue advancing to higher floors in small increments until you reach your
desired goal (ideally, the highest floor of the tallest building in the area where you
live).</li>
</ul>
</p>
<p >Virtual exposure has also been used effectively with the fear of heights. This involves
recreating a hierarchy of height scenarios in virtual reality using special equipment. Clinics
that can afford the equipment prefer this option because it allows therapists to treat more
people in a more efficient and timely manner.</p>

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