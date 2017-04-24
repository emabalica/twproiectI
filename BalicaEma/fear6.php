


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
					<h2>Blood/Injection Phobia</h2>
				</header>

				<footer>
					<p class="post-info">This post was published on April 07,2017</p>
				</footer>

				
					<img src="InjectionPhobia.png" class="imagine" >
				<content>
					
				

<p >Fears of blood, injuries associated with blood, and injections often go together. About 70
percent of people who are phobic of blood also have a phobia of injections. On the other hand,
only about 30 percent of injection/needle phobics have fears of blood and injury. A phobia of
injections can have very serious health consequences, if you refuse to receive blood tests or
potentially life-saving medication that needs to be taken by injection or IV. About 25 percent
of people with blood/injection phobias jeopardize their health by avoiding visits to doctors
altogether (Thompson 1999).
</p>
<p >Of all anxiety disorders, blood/injection phobia has the strongest degree of family association.
Up to 60 percent of people with this type of phobia have a family member with the
same problem, compared to about a 5 percent association rate among family members for
claustrophobia or animal phobias. The overall incidence of blood-injection phobias in the
general population is about 3 percent.</p>
<p >Another unusual characteristic of blood/injection phobias, distinguishing them from all
other phobias, is that they often involve a fainting response. When confronted with the sight
of blood (your own or another’s) or the prospect of receiving an injection, there is a twofold
response. The first phase is a normal anxiety response with increased heart rate, increased
blood pressure, and other panic-like symptoms. This is followed by a sudden drop in blood
pressure, slowing down of heart rate (called bradycardia), and reduced blood flow to the brain,
which often results in fainting. (Referred to as a "vasovagal response", it appears that the
vagus nerve stimulates the parasympathetic nervous system to overcompensate for the initial
sympathetic nervous system arousal associated with anxiety.) About 75 percent of people
with blood/injection phobias tend to faint, allowing them to escape from the feared stimulus.
</p>


<h2>Causes</h2>
<p >Since phobias of blood, injury, and injections tend to run in families, the most likely
cause is children learning and internalizing the fear from their parents and siblings.</p>


<h2>Treatment</h2>
<p>Cognitive behavioral therapy, emphasizing gradual exposure, works well for blood/
injection phobias. However, because of the fainting response, an additional technique called
“applied tension” is included. Upon the first sensation of possibly fainting, you are instructed
to tense your feet, legs, and arms quickly all at once. This raises blood pressure and blocks
the fainting response. Even more important, it gives you confidence that you have a coping
strategy you can use to overcome fainting. With this confidence, it’s much easier to negotiate
exposure.</p>
<p >It takes some resourcefulness to come up with effective hierarchies for these types of
phobias. A possible hierarchy for blood phobia would include:
<ul>
<li>Read an article about bleeding.</li>
<li>Look at photos of blood.</li>
<li>Look at photos of injuries involving blood.</li>
<li>Watch videos or movies involving blood and injuries.</li>
<li>Visit a blood bank.</li>
</ul>
</p>
<p >In medical and particularly dental settings, a variety of anesthetics may be used to
reduce the fear of being injected. These usually include some kind of numbing gel applied to
the gum followed by a very gradual injection of anesthetic. Often you aren’t even aware of
the needle at all. Most competent dentists are proficient in administering painless injections.</p>
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