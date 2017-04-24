


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
					<h2>Hypochondria</h2>
				</header>

				<footer>
					<p class="post-info">This post was published on April 07,2017</p>
				</footer>

				<img src="Hypochondria.png" class="imagine" >
				
				<content>
					

<p >Hypochondria is defined as excessive worry about having a serious disease, even after medical
reassurance. Often a particular symptom, such as gastric discomfort, chronic headaches, or
heart palpitations, is taken to be evidence of a life-threatening disease. Having a bad headache might be taken as evidence of a brain tumor, or a chronic cough as evidence for cancer.
Forgetting where you put something might be taken as an indication of Alzheimer’s disease.
</p>
<p >Some people continuously seek out various doctors and have repeated exams to confirm
whether they have the dreaded disease, while others avoid doctors altogether out of fear that
their worst-case scenario will turn out to be true.</p>
<p >Hypochondria is often thought of as an OCD-spectrum disorder because it frequently
involves intrusive fears followed by compulsive checking (such as feeling for lumps or continually
retaking one’s blood pressure). In other cases, it is more like a phobia, consisting of
sensitization and avoidance around anything that reminds you of, for example, cancer. The
more you tend to engage in self-monitoring, doctor-seeking, or reassurance-seeking behavior,
the more the problem fits an OCD-spectrum disorder model. One difference between OCD
and hypochondria is that OCD sufferers tend to fear getting a disease, while hypochondriacs
fear they already have a disease.</p>


<h2>Causes</h2>
<p >Many different kinds of factors can lead to hypochondria. It may develop through unconscious
identification after the death or serious illness of a close family member. Suddenly you
become afraid that you could develop the same or a similar disease. Even approaching the
age at which a loved one’s premature death occurred may be enough to trigger worry about
oneself.</p>
<p >Predicted pandemics, such as a worldwide flu outbreak, lead some people to become
obsessed with becoming ill. Even seeing a special on TV about a particular illness may be
enough to trigger serious worry about that disease.</p>
<p >Family studies of hypochondria find little evidence of a genetic predisposition. However,
having a first-degree relative with OCD increases the likelihood that you might develop obsessive
preoccupation with a particular disease.</p>


<h2>Treatment</h2>
<p >Cognitive behavioral therapy is the first-line treatment for hypochondria. The cognitive
component focuses on identifying and countering false beliefs that lead you to overestimate
the threat posed by your symptoms. The risk of actually having a life-threatening disease
is usually very low, much lower than your estimated risk. The behavioral part focuses on
stopping the quest for continual reassurance from doctors and others. Also, you would work
on stopping continuous monitoring of your body for evidence of the problem, which only
reinforces your fear. Excessive research about the disease on the Internet would also be discontinued.
Being frequently exposed to symptoms that evoke worry about disease—without
engaging in body monitoring, reassurance seeking, or Internet research—is an approach very
similar to exposure and response prevention utilized in the treatment of OCD.
</p>
<p >Another approach used with hypochondria is imaginal exposure. Here you would write
out your worst-case scenario of having the dread disease (such as cancer or AIDS) in vivid
detail. Your script would be audio-recorded, and you would listen to the recording repeatedly
until you desensitized to the fears and worries it evokes. While this can be an uncomfortable
process at first, it ultimately reduces the frequency and intensity of intrusive worries about
the disease.</p>

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