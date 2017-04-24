

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
					<h2>Claustrophobia</h2>
				</header>

				<footer>
					<p class="post-info">This post was published on April 07,2017</p>
				</footer>

				
					<img src="Claustrophobia.png" class="imagine" >
				
				<content>
					

<p >Most people know that claustrophobia refers to a fear of being closed in and having no escape.It can take a variety of forms, including fear of small and/or crowded rooms, fear of being
stuck in traffic, fear of tunnels, fear of subways, fear of being stuck waiting in line, or fear of
sitting in a chair while receiving a procedure.It can overlap with other phobias. Many people
who fear flying are really afraid of the forced confinement of being on board the plane for a
set period of time. Or a fear of elevators may have a strong claustrophobic component. One of
the best-known forms of claustrophobia occurs in the course of being confined in the small,
tunnel-like chamber of an MRI scanner. This can be a serious problem if you need such a
procedure. </p>
<p >For a certain proportion of claustrophobics, there is a second stage of the problem. The
fear of confinement, if not relieved, leads to a fear of suffocation, of not getting enough air.
Either the fear of confinement, or confinement combined with the fear of suffocation, can lead
to panic attacks. Panic attacks include the usual array of symptoms such as sweating, shaking,and heart palpitations. With claustrophobia, you may also feel that the walls are closing in on
you and you may experience a desperate urge to escape.</p>
<p>Claustrophobia can generalize to a whole range of situations. You may come to avoid
crowds in general, or you may always sit near the door of any room containing other people
in order to have easy access out. Traveling may be very difficult for some claustrophobics,
since any form of traveling, whether by plane, train, or car, requires a sustained period of
confinement.</p>


<h2>Causes</h2>
<p >There is no clear consensus on what causes claustrophobia. The most common explanation
is a traumatic experience in childhood where you were frightened while being confined
in some way. However, there are plenty of people with claustrophobia who cannot recall any
such experience. Some degree of resistance to confinement is common for all animals and
humans, but claustrophobia appears to be a very exaggerated form of this reaction.</p>


<h2>Treatment</h2>
<p >As with other phobias, cognitive behavioral therapy is used effectively to treat claustrophobia.
In the cognitive component, the therapist would help you to identify and challenge
catastrophic beliefs, such as the false idea that being confined to a crowded room or a crowded
plane is potentially threatening or dangerous. You would work on strengthening the belief
that there are many advantages to being able travel over avoiding travel simply because of
your fear of confinement. After working on shifting your fearful beliefs, you would undergo a
custom-made hierarchy of exposures progressing from simple to more difficult types of confinement
situations that bother you. For example, in the case of tunnels, you would progress
from short to longer ones, likely having a support person go with you at first. In the case of
public transportation (buses or trains), you would progress from short trips with a support
person eventually to longer trips alone.
</p>
<p >Virtual reality has also been used effectively to treat claustrophobia. Researchers found
that virtual reality—recreating a three-dimensional video experience on an MRI procedure—
reduced anxiety when subjects subsequently went through the real procedure (Garcia-
Palacios et al. 2007/2008).</p>
<p >Medications, including tranquilizers and beta blockers, are sometimes used to treat
claustrophobia in instances where the situation you are afraid of occurs infrequently, such as
making a flight.</p>
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