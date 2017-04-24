

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
					<h2>Animal and Insect Phobias</h2>
				</header>

				<footer>
					<p class="post-info">This post was published on April 07,2017</p>
				</footer>

				<img src="AnimalandInsectPhobias.png" class="imagine">
				<content>
					
					

<p >Phobias of specific types of animals or insects abound. The fear can be of snakes, bats, mice
or rats, dogs, cats, certain birds, frogs, spiders, bees or cockroaches, to name some of the most
common examples. People with this type of phobia avoid not only a particular animal/insect
but areas where they believe they might be exposed to the feared creature. Evidence of the
presence of the feared animal/insect, such as seeing a spiderweb, hearing a dog bark, or being
near a zoo is enough to evoke strong fear. Sometimes merely seeing a picture of the animal
will lead to a panic attack.</p>
<p >In childhood, many of these fears are so common that they are considered normal fears.
Only when they significantly disrupt your life and/or cause you significant distress—as a
child or an adult—do they qualify as a full-blown phobia. In general, animal and insect
phobias tend to be more common in women than men, especially in regard to snakes, mice,
spiders, and cockroaches</p>


<h2>Causes</h2>
<p >It has been proposed that certain animal phobias, such as fear of snakes or large animals,
are innate in all mammals because they confer an evolutionary advantage in promoting survival.
In many cases, though, the cause of the phobia appears to be a previous traumatic experience,
such as being bitten by a dog, scratched by a cat, or stung by a wasp. It’s also possible
for children to acquire fears of animals from their parents. Simply observing a parent express
fear at the sight of a mouse or a spider may instill the same fear in the child. There have also
been instances where simply watching a horror film that featured a particular animal was
sufficient to cause a phobia.</p>


<h2>Treatment</h2>
<p >Overcoming animal and insect phobias is straightforward and involves gradual exposure
to the feared creature. As with exposure to any other phobia, it’s necessary to set up a
hierarchy of incremental experiences of the animal, progressing from photos and videos to
eventual live contact. A generic hierarchy applicable to any animal/insect phobia might run
something like this:
<ul>
<li>Draw a picture of the animal.</li>
<li>Look at black and white photos.</li>
<li>View color photos.</li>
<li>Watch a video of the animal.</li>
<li>Handle a toy version of the animal.</li>
<li>Look at the animal from a distance (this could involve a trip to a pet store or zoo).</li>
<li>Move progressively closer to the live animal.</li>
<li>Watch someone touch or hold the animal.</li>
<li>Touch or hold the animal in a cage and, ultimately, directly.</li>
</ul>
</p>
<p >As with all exposure hierarchies, working through the various steps requires commitment,
perseverance, and a willingness to tolerate varying degrees of anxiety. If anxiety
becomes extreme, it can be useful to have a support person accompany you through the most
difficult steps. Sometimes medication, such as a beta blocker or a benzodiazepine, may be
helpful to facilitate getting through a particularly challenging step, but the medication eventually
needs to be relinquished. In beginning the hierarchy, it’s best to start with whatever
step evokes mild anxiety, skipping any early steps that do not elicit anxiety at all. Repeat a
step more than once if you need to until anxiety diminishes to a low level.</p>
<p >In working through the hierarchy, it’s also important to think about what it is about the
animal or insect that you find particularly frightening.
Once you pinpoint what specific characteristics of the creature bother you the most, then
it’s important to focus on those characteristics as you progress through the exposure. </p>
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