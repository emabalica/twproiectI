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
				<li><a href="http://localhost/responsive/home.php " class="active">Home</a></li>
				<li><a href="http://localhost/responsive/phobias.php">Phobias</a></li>
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
					<h2 style='color: #de6581; font-size: 120%; '>What Is Anxiety?</h2>
				</header>

				<footer>
					<p class="post-info">This post was published on April 07,2017</p>
				</footer>

				
					<img src="relax.gif"  class="imagine" >
				
				<content>
					
					<p><b><i>"But do not distress yourself with imaginings. Many fears are born of fatigue and loneliness.
					Beyond a wholesome discipline, be gentle with yourself." </i>Max Ehrmann</b></p>
					<p >You can better understand the nature of anxiety by looking at both what it is and what it is not. For example, anxiety can be distinguished from fear in several ways. When you are afraid, your fear is usually directed toward some concrete external object or situation. The event that you fear usually is within the bounds of possibility. You might fear not meeting a deadline, failing an exam, being unable to pay your bills, or being rejected by someone you want to please. When you experience anxiety, on the other hand, you often can't specify what it is you're anxious about. The focus of anxiety is more internal than external. It seems to be a response to a vague, distant, or even unrecognized danger. You might be anxious about "losing control" of yourself or some situation. Or you might feel a vague anxiety about "something bad happening."</p>
					<p>Anxiety affects your whole being. It is a physiological, behavioral, and psychological reaction all at once. On a physiological level, anxiety may include bodily reactions such as rapid heartbeat, muscle tension, queasiness, dry mouth, or sweating. On a behavioral level, it can sabotage your ability to act, express yourself, or deal with certain everyday situations.</p>
					<p >Anxiety can appear in different forms and at different levels of intensity. It can range in
					severity from a mere twinge of uneasiness to a full-blown panic attack marked by heart palpitations,
					disorientation, and terror. Anxiety that is not connected with any particular situation, that
					comes "out of the blue", is called free-floating anxiety or, in more severe instances, a spontaneous
					panic attack. The difference between an episode of free-floating anxiety and a spontaneous panic
					attack can be defined by whether you experience four or more of the following symptoms at the
					same time (the occurrence of four or more symptoms defines a panic attack):</p>
					<ul>
						<li>Shortness of breath</li>
						<li>Heart palpitations</li>
						<li>Trembling or shaking</li>
						<li>Sweating</li>
						<li>Numbness</li>
						<li>Dizziness </li>
						</ul>
					<p>If your anxiety arises only in response to a specific situation, it is called situational anxiety
					or phobic anxiety. Situational anxiety is different from everyday fear in that it tends to be out
					of proportion
					or unrealistic. If you have a disproportionate apprehension about driving on
					freeways, going to the doctor, or confronting your spouse, this may qualify as situational
					anxiety. Situational anxiety becomes phobic when you actually start to avoid the situation: if
					you give up driving on freeways, going to doctors, or confronting your spouse altogether. In
					other words, phobic anxiety is situational anxiety that includes persistent avoidance of the
					situation.</p>
					<p >There is an important difference between spontaneous anxiety (or panic) and anticipatory
					anxiety (or panic). Spontaneous anxiety tends to come out of the blue, peaks to a
					high level very rapidly, and then subsides gradually. The peak is usually reached within five
					minutes, followed by a gradual tapering-off period of an hour or more. Anticipatory anxiety,
					on the other hand, tends to build up more gradually in response to encountering-or simply
					thinking about-a threatening situation and then usually falls off quickly. You may "worry
					yourself into a frenzy" about something for an hour or more and then let go of the worry as
					you find something else to occupy your mind.</p>
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


<aside class='middle-sidebar'>

	
	
	<form class='register' action='singup_act.php' method='post' accept-charset='UTF-8'>
	<fieldset >
	<legend>Register</legend>
	<input type='hidden' name='submitted' id='submitted' value='1'/>
	<label for='password' >Mail:</label>
	<input type='text' name='mail' id='mail' maxlength='50' />
	<label for='username' >UserName:</label>
	<input type='text' name='username' id='username' maxlength='50' />
	<label for='password' >Password:</label>
	<input type='password' name='password' id='password' maxlength='50' />
	<input type='submit' name='Submit' value='Submit' />
	</fieldset ></form></aside>


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