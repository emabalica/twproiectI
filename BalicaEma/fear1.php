


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
					<h2 >Performance Anxiety</h2>
				</header>

				<footer>
					<p class="post-info">This post was published on April 07,2017</p>
				</footer>

				
						<img src="speakingFear.png" class="imagine" >
				
				<content>
					
				
<p >The fear of performing or speaking in front of an audience is the most common phobia, affecting
up to 70 percent of the population worldwide. In the context of fear of public speaking,
it’s sometimes referred to as glossophobia. It’s a complex fear and can involve any one or all of
the following components:
<ul>
<li>Fear of being judged as awkward or inadequate by others</li>
<li>Fear of underperforming or making a mistake, as in a musical recital or sports performance</li>
<li>Fear of having your anxiety be visible to others, as in sweating, stammering, or blushing</li>
<li>Fear of failure and/or rejection, as in a job interview or oral examination</li>
<li>Anxiety over uncertainty as to how you will do when you have to perform</li>
</ul>
</p>
<p >Performance anxiety often has a strong anticipatory aspect, with considerable worry in
advance of the performance or speaking presentation. The anxiety usually increases as the
time of the performance approaches. For many, the anxiety goes away as soon as they actually
start speaking, singing, or performing. Others, however, continue to have distracting symptoms
during the performance such as pounding heart, hand tremors, sweating, nausea, or
dry mouth. In the worst case, the anxiety becomes severe enough to interfere with the performance
and/or disrupt speech.
Performance anxiety affects all kinds of people whether they are novices or professionals.
Singer Barbra Streisand, for example, spent twenty-seven years avoiding any performance
before a live audience.</p>




<h2>Causes</h2>
<p>The long-term cause of performance anxiety may be a single traumatic experience with
speaking before a group or doing a musical recital as a child. Or you may simply be prone
to social anxiety and shyness from early childhood. You consistently avoid speaking or performing
in front of others, and, in the more extreme case, avoid being in groups in general.Performance anxiety is a distinct problem from social phobia (see chapter 1), however, affecting
large numbers of people who otherwise do not avoid or fear participating in groups.
The immediate cause of performance anxiety often lies in deep-seated core beliefs and
images where you may think or picture yourself losing control or being incompetent in front
of others. You may imagine that you will make dreadful mistakes, believe that your performance
has to be perfect to be acceptable, or exaggerate the importance or status of the people
you will speak to. These self-defeating thoughts can be very stubborn and persistent, leading
to long-term avoidance of any situation where you might have the opportunity to perform or
speak before others.</p>


<h2>Treatment</h2>
<p>Cognitive-behavioral treatment of performance anxiety consists of identifying selfdefeating
core beliefs (and images) and gradually internalizing more constructive beliefs that:
<ul>
<li>You really do have the ability to perform well in front of others.</li>
<li>It’s possible to embrace or “flow with” anxiety when it comes up rather than resist it.</li>
<li>It’s human and okay to make mistakes.</li>
<li>You will likely not appear anxious to others, even if you feel anxious inside.</li>
<li>People are not scrutinizing you to see if you flub the speech or performance.</li>
<li>By focusing on the message you want to convey, you can deflect attention away from anxiety.</li>
<li>With practice and adequate rehearsal, you can assure a good performance.</li>
</ul></p>


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