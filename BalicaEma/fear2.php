

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
					<h2>Fear of Flying</h2>
				</header>

				<footer>
					<p class="post-info">This post was published on April 07,2017</p>
				</footer>

				
					<img src="fearFlying.png"  class="imagine">
				<content>
					
					
<p >Fear of flying is the second most common phobia (after fear of public speaking) and affects
about 20 percent of the population, who either avoid flying or do so with discomfort. It can
cripple a person’s life in major ways, such as avoiding desirable jobs that require flying or
going on vacations to visit family and friends.</p>
<p >Frequently, the fear of flying overlaps with other phobias, particularly claustrophobia—
the fear of being enclosed on a plane with no ability to exit for a set period of time. Fear of
heights (acrophobia) may also play a role. For some, the main fear is of a plane crash, despite
the realistic odds of a crash being less than one in ten million. Other fears can include a
fear of encountering air turbulence, a fear of hijackers, or just a general fear of relinquishing
control—putting one’s life in the hands of the pilots.</p>
<p >Flying phobia can involve avoiding flights altogether or flying only with the aid of sedation
from alcohol and/or prescription tranquilizers. Fearful fliers are often afraid they will have
a full-blown panic attack while flying, and this may be based on a bad previous experience.</p>

<h2>Causes</h2>
<p >The most frequent cause of flying phobia is a traumatic experience with flying, either
related to another phobia (such as heights or feeling enclosed) or as a result of encountering
air turbulence, getting sick (vomiting) while in flight, and/or having a bad panic attack. Once
you start to avoid flying, the longer you avoid it, the more formidable the idea of ever flying
again seems to become.</p>
<p >Occasionally, witnessing scenes of an air crash on TV will be enough to initiate a phobia
in certain individuals. Also, having a negative experience after the flight, such as flying to a
meeting only to be told you are fired, could be traumatic enough to instigate a strong negative
association with flying.</p>



<h2>Treatment</h2>
<p >Education and cognitive behavioral therapy are the mainstays of effective treatment for
flying phobia. Education includes information on how planes fly and all of the multiple precautions
that are taken to ensure safety. The fact that planes are designed to withstand several
times the amount of air turbulence they would ever encounter is helpful in diminishing fears
that come up around the prospect of a bumpy ride due to turbulence. Understanding that
certain abrupt noises, such as putting the landing gear down, is just a routine part of the
flight can help those who jump at any unexpected sound. Finally, just knowing that the statistical
odds of any single commercial plane crashing are less than one in ten million (much
more favorable odds than being killed or badly injured in an auto crash) helps many people.
</p>
<p >Cognitive behavioral therapy consists of teaching people panic control strategies (see
chapter 6) and then working to shift catastrophic cognitions based on the individual’s specific
fears. A hierarchy of progressive exposures to flying is set up, beginning with a trip to the
airport and culminating with an actual flight, usually no more than one hour in duration.
A typical hierarchy of exposures for fear of flying can be found in appendix 2. Sometimes
therapists who specialize in flying phobia have an arrangement with an airline to allow their
clients to enter and sit on a grounded plane a few days in advance of making an actual
flight—an important intermediate exposure. On the day of the actual first flight, the therapist
either accompanies or has a support person accompany the person.</p>


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