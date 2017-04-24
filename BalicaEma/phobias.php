

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
				<li><a href="http://localhost/responsive/articles.php" >Articles</a></li>
				<?php
				if(isset($_SESSION['login_user'])){
				print"<li><a href='http://localhost/responsive/provocari.php' >Account</a></li>";}?>
			</ul>
		</nav>
	</header>

<div class="mainContent">
		<div class="Content">
			<article class="topContent">

<div class="articole">
<content>
<a href='http://localhost/responsive/fear1.php'><h2>Performance Anxiety</h2></a>
<img src="speakingFear.png" class="imagine" >
<p>The fear of performing or speaking in front of an audience is the most common phobia, affecting up to 70 percent of the population worldwide. In the context of fear of public speaking,it’s sometimes referred to as glossophobia. </p>
</content>
</div>

<div class="articole">
<content>
<a href='http://localhost/responsive/fear2.php'><h2>Fear of Flying</h2></a>
<img src="fearFlying.png"  class="imagine" >
<p>Fear of flying is the second most common phobia (after fear of public speaking) and affects about 20 percent of the population, who either avoid flying or do so with discomfort. It can
cripple a person’s life in major ways, such as avoiding desirable jobs that require flying.</p>
</content>
</div>

<div class="articole">
<content>
<a href='http://localhost/responsive/fear3.php'><h2>Claustrophobia</h2></a>
<img src="Claustrophobia.png" class="imagine" >
<p>Most people know that claustrophobia refers to a fear of being closed in and having no escape.It can take a variety of forms, including fear of small and/or crowded rooms, fear of being
stuck in traffic, fear of tunnels, fear of subways, fear of being stuck waiting in line, or fear of
sitting in a chair while receiving a procedure. </p>
</content>
</div>


<div class="articole">
<content>
<a href='http://localhost/responsive/fear4.php'><h2>Hypochondria</h2></a>
<img src="Hypochondria.png" class="imagine" >
<p>Hypochondria is defined as excessive worry about having a serious disease, even after medical reassurance. Often a particular symptom, such as gastric discomfort, chronic headaches, or
heart palpitations, is taken to be evidence of a life-threatening disease. Having a bad head ache might be taken as evidence of a brain tumor, or a chronic cough as evidence for cancer.</p>
</content>
</div>

<div class="articole">
<content>
<a href='http://localhost/responsive/fear5.php'><h2>Dental Phobia</h2></a>
<img src="DentalPhobia.png" class="imagine">
<p>Dental phobia can involve fear and avoidance of dentistry in general, or a more specific fear about having a particular dental procedure. In some cases, it appears that the problem is not
a phobia at all but symptoms of post-traumatic stress disorder in response to a previous,
traumatic dental experience.</p>
</content>
</div>


<div class="articole">
<content>
<a href='http://localhost/tw/fear6.php'><h2>Blood/Injection Phobia</h2></a>
<img src="InjectionPhobia.png" class="imagine">
<p>Fears of blood, injuries associated with blood, and injections often go together. About 70 percent of people who are phobic of blood also have a phobia of injections. On the other hand,
only about 30 percent of injection/needle phobics have fears of blood .</p>
</content>
</div>


<div class="articole">
<content>
<a href='http://localhost/responsive/fear7.php'><h2>Fear of Heights</h2></a>
<img src="FearofHeights.png" class="imagine" >
<p>The fear of heights, or acrophobia, is another very common phobia. Frequently, it combines with other phobias, such as the fear of flying, fear of riding elevators, or fear of driving over a high
bridge. The most frequent form of the fear is being high up in a building.</p>
</content>
</div>

<div class="articole">
<content>
<a href='http://localhost/responsive/fear8.php'><h2>Animal and Insect Phobias</h2></a>
<img src="AnimalandInsectPhobias.png" class="imagine" >
<p>Phobias of specific types of animals or insects abound. The fear can be of snakes, bats, miceor rats, dogs, cats, certain birds, frogs, spiders, bees or cockroaches, to name some of the most
common examples. People with this type of phobia avoid not only a particular animal/insect
but also areas .</p>
</content>
</div>

<div class="articole">
<content>
<a href='http://localhost/responsive/fear9.php'><h2>Fear of Death</h2></a>
<img src="FearofDeath.png" class="imagine" >
<p>The fear of death, sometimes referred to as thanatophobia, can involve any one or several of a variety of distinct fears.Sometimes the basic fear is simply one of losing control. Dying is out of your control, andyou may attempt to hold death at bay through frequent visits to doctors. </p>
</content>
</div>



		

	

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