<?php include '../phpDocs/dbcon.php'?> <!--Recovery-->

<!DOCTYPE html>

<html>
<title>Phobia-Free</title>

<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/styleScrollImag.css">
	<link rel="stylesheet" href="../css/footer.css">
	<link rel="stylesheet" href="../css/toparticles.css">
	<link rel="stylesheet" href="../css/articole_layout.css">
	<link rel="stylesheet" href="../css/footer.css">
	<link rel="stylesheet" href="../css/form.css">
	<link rel="stylesheet" href="../phobia_groups.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>




<div class="nav">
  <div class="box" > 
    <img src="../photos/FREE-PHOBIA.png" style="width:200px; padding-left:20px;">
	
		<div class="right menu-large">
		<a href="http://localhost/siteFinal/home/home.php" class=" item button "><i class="icon home_icon" ></i>ABOUT</a>
		<a href="http://localhost/siteFinal/articles/articles.php" class=" item button"><i class="icon art_icon"></i>ARTICLES</a>
		<a href="http://localhost/siteFinal/phobias.php" class=" item button"><i class="icon art_icon"></i> PHOBIAS</a>
		 <a href="http://localhost/siteFinal/quiz2/test.php" class=" item button"><i class="icon art_icon"></i> PHOBIA KNOWLEDGE TEST</a>
		<?php include '../phpDocs/userOption.php'?>
		  
		</div>
	
		<a href="#" class="item button right hide-menu" onclick="open_menu()">
		<i class="icon menu_icon"></i> </a>
  </div>
</div>

<nav class="small_menu bar-block black box animation hide-menu" style="display:none" id="menu">
  <a href="" onclick="close_menu()" class=" item button ">×</a>
  <a href="http://localhost/siteFinal/home/home.php"   onclick="close_menu()" class=" item button">ABOUT</a>
  <a href="http://localhost/siteFinal/articles/articles.php" onclick="close_menu()" class=" item button">ARTICLES</a>
  <a href="http://localhost/siteFinal/phobias.php" onclick="close_menu()" class=" item button">PHOBIAS</a>
  
 
   <?php 
   
   
   if(isset($_SESSION['login_user'])){
		 
		  $id=(int)$_SESSION['login_user'];
		  $query=oci_parse($conn,'select * from userstw where user_id=:id');
		  oci_bind_by_name($query,':id',$id);
	      oci_execute($query);
		  $row1 = oci_fetch_array($query);
		  $role=$row1['ROLE'];
  
  if(strcmp($role,'user')==0){
		print" 	<a onclick=\'document.getElementById('quizpart1').style.display='block';\' onclick=\'close_menu()\' class='item button'>PHOBIA QUIZ</a>
				<a href='http://localhost/siteFinal/account.php' onclick=\'close_menu()\' class='item button'>ACCOUNT</a>
				<a href='http://localhost/siteFinal/phpDocs/logout.php' onclick=\'close_menu()\' class='item button'>LOGOUT</a>";}

  if(strcmp($role,'admin')==0){
		print"	<a onclick=\'document.getElementById('delete').style.display='block';\' onclick=\'close_menu()\' class='item button'>DELETE POST</a>
				<a onclick=\'document.getElementById('post').style.display='block';\' onclick=\'close_menu()\' class='item button'>ADD POST</a>
								<a href='http://localhost/siteFinal/phpDocs/logout.php' onclick=\'close_menu()\' class='item button'>LOGOUT</a>";}

   }
   
  else{
	    print" <a onclick=\'document.getElementById('quizpart1').style.display='block';' onclick=\'close_menu()\' class='item button'>PHOBIA QUIZ</a>
               <a onclick=\'document.getElementById('form').style.display='block';' onclick=\'close_menu()\' class='item button'>LOGIN/LOGOUT</a>";}

?>
 
 </nav>


<!--LOGIN/SINGUP FORM-->
<div id="form" class="form">
    <div class="form-content" style="max-width:600px">

      <div style="text-align:center!important"><br>
        <span onclick="document.getElementById('form').style.display='none'" class="button" style="position:absolute;right:0;top:0;color:red!important;background-color:white!important;font-size:24px!important;">&times;</span>
        <img src="../photos/login.png" style="width:40%;border-radius:50%;margin-top:16px!important;">
      </div>

      <form style="padding:0.01em 16px"  method='post'>
        <div style="margin-top:16px!important;margin-bottom:16px!important">
          <label><b>Username</b></label>
          <input class="text" type="text" placeholder=" Username" name="username" required>
          <label><b>Password</b></label>
          <input class="text" type="password" placeholder="Password" name="password" required>
		  
          <button formaction="../phpDocs/login.php" class="button decorate " type="submit">Login</button>
		  <button formaction="../phpDocs/register.php" type="submit" class="button decorate ">Register</button>
		</div>
      </form>


    </div>
  </div>

<!--QUIZ FORM-->
 <div id="quizpart1" class="form">
    <div class="form-content" style="max-width:600px">
      <div style="text-align:center!important">
			<span onclick="document.getElementById('quizpart1').style.display='none'" class="button" style="position:absolute;right:0;top:0;color:red!important;background-color:white!important;font-size:24px!important;">&times;</span>
			<img src="../photos/age.png" style="width:40%;">
			</div>

			<form style="padding:0.01em 16px" action="../quiz/quizpart2.php" method='post'>
				<div style="margin-top:16px!important;margin-bottom:16px!important">
					<p> 1.What is your age?<br/>
					<fieldset id="group1"style="border-radius: 5px; background-color:#bbff99;  ">
						<input type="radio" name="group1" value="teen" /> <label> Under 18 Years Old </label> </input></br>
						<input type="radio" name="group1" value="adult" /> <label> 18 to 24 Years Old</label> </input></br>
						<input type="radio" name="group1" value="mature" /> <label> 25 to 30 Years Old</label> </input></br>
						<input type="radio" name="group1" value="mature40" /> <label> 31 to 40 Years Old</label> </input></br>
						<input type="radio" name="group1" value="mature50" /> <label> 41 to 50 Years Old</label> </input></br>
						<input type="radio" name="group1" value="old60" /> <label>51 to 60 Years Old</label> </input></br>
						<input type="radio" name="group1" value="old" /> <label> Over 60 Years Old </label> </input>
					</fieldset >
					</p>
				<button class="button decorate " type="submit">Next</button>
			</form>
		</div>
	</div>
 </div>


<!--ADD FORM-->
<div id="post" class="form">
    <div class="form-content" style="max-width:600px">
      <div style="text-align:center!important"><br>
        <span onclick="document.getElementById('post').style.display='none'" class="button" style="position:absolute;right:0;top:0;color:red!important;background-color:white!important;font-size:24px!important;">&times;</span>
      </div>
	  
			<form style="padding:0.01em 16px" action="phpDocs/post.php" method='post'>
				<div style="margin-top:16px!important;margin-bottom:16px!important">
					<label><b>Select the type of posting:</b></label>
						<select class="select" name="art_type">
							<option>Phobia</option>
							<option>Article</option>
						</select>
					<label><b>Title</b></label>
							<input class="text" type="text" placeholder="title" name="title" required>
					<label><b>Date</b></label>
							<input class="text" type="text" placeholder="date" name="date" required>
					<label><b>Path img</b></label>
							<input class="text" type="text" placeholder="img" name="img" required>
					<label><b>Preview</b></label>
							<textarea class="text" type="text" placeholder="preview" name="preview" required></textarea>
					<label><b>Article</b></label>
							<textarea style="height:50px;" class="text" type="text"  name="article" required></textarea>
					<button class="button decorate " type="submit">Post</button>
				</div>
			</form>
	  </div>
  </div>



<!--DELETE FORM-->
<div id="delete" class="form">
    <div class="form-content" style="max-width:600px">
      <div style="text-align:center!important"><br>
        <span onclick="document.getElementById('delete').style.display='none'" class="button" style="position:absolute;right:0;top:0;color:red!important;background-color:white!important;font-size:24px!important;">&times;</span>
      </div>
     
	    <form style="padding:0.01em 16px" action="phpDocs/delete.php" method='post'>
				<div style="margin-top:16px!important;margin-bottom:16px!important">
					<label><b>Select the type of posting:</b></label>
						<select class="select" id="sel1">
							<option>Phobia</option>
							<option>Article</option>
						</select>
					<label><b>Name of the post</b></label>
						<input class="text" type="text" placeholder="name" name="name" required>
					<button class="button decorate " type="submit">Delete</button>
				</div>
		</form>
    </div>
 </div>




<div class="recent_art content">

		<?php include"../phpDocs/recentArticles.php" ?>
		<button class="button arrow_left" onclick="next(-1)">&#10094;</button>
		<button class="button arrow_right" onclick="next(1)">&#10095;</button>

</div>

<div class="media_contact">
	<div class="social_media">
		<i class="icon fa-facebook-official  "></i>
		<i class="icon fa-instagram"></i>
		<i class="icon fa-pinterest-p "></i>
		<i class="icon fa-twitter "></i> 
  </div>
</div>


<div class="_articol color" style="padding:20px 16px;margin-top:10px;">
	<div class="row_padding borduraPhobiGroups" style="border-top:1px solid #ccc" >
		<div class="continut_articol " >  
				<h2>Performance Anxiety</h2>
				<p>	The fear of performing or speaking in front of an audience is the most common phobia, affecting up to 70 percent of the population worldwide. In the context of fear of public speaking,
it’s sometimes referred to as glossophobia. It’s a complex fear and can involve any one or all of
the following components:</p>
				</div>
    <div class="continut_articol" style="margin-top:80px;">
		<img class="image " src="../photos/speakingFear.png" style="width:400px;margin-left:90px;" >
    </div>
	
	<div style="float:left ;padding-right:25px;">								
			<p>
			
<ul>
<li>Fear of being judged as awkward or inadequate by others</li>
<li>Fear of underperforming or making a mistake, as in a musical recital or sports performance</li>
<li>Fear of having your anxiety be visible to others, as in sweating, stammering, or blushing</li>
<li>Fear of failure and/or rejection, as in a job interview or oral examination</li>
<li>Anxiety over uncertainty as to how you will do when you have to perform</li>
</ul>
			</p>

			<p>Performance anxiety often has a strong anticipatory aspect, with considerable worry in
advance of the performance or speaking presentation. The anxiety usually increases as the
time of the performance approaches. For many, the anxiety goes away as soon as they actually
start speaking, singing, or performing. Others, however, continue to have distracting symptoms
during the performance such as pounding heart, hand tremors, sweating, nausea, or
dry mouth. In the worst case, the anxiety becomes severe enough to interfere with the performance
and/or disrupt speech.
Performance anxiety affects all kinds of people whether they are novices or professionals.
Singer Barbra Streisand, for example, spent twenty-seven years avoiding any performance
before a live audience</p>

		<h3>Causes</h3>
			<p>	The long-term cause of performance anxiety may be a single traumatic experience with
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
				
				
				
	<h3>Treatment</h3>
			<p>	Cognitive-behavioral treatment of performance anxiety consists of identifying selfdefeating
core beliefs (and images) and gradually internalizing more constructive beliefs that:
<ul>
<li>You really do have the ability to perform well in front of others.</li>
<li>It’s possible to embrace or “flow with” anxiety when it comes up rather than resist it.</li>
<li>It’s human and okay to make mistakes.</li>
<li>You will likely not appear anxious to others, even if you feel anxious inside.</li>
<li>People are not scrutinizing you to see if you flub the speech or performance.</li>
<li>By focusing on the message you want to convey, you can deflect attention away from anxiety.</li>
<li>With practice and adequate rehearsal, you can assure a good performance.</li>
</ul>
			</p>



   </div>
  </div>
</div>

	<div class="footer" style="margin-top:30px; " >
			
	</div>


<script>

	var menu = document.getElementById("menu");

	function open_menu() {
			if (menu.style.display === 'block') {
				menu.style.display = 'none';} 
			
			else{
				menu.style.display = 'block';}
	}

	function close_menu() { menu.style.display = "none";}

	var index = 1;
	change_pic(index);

	function next(n){	change_pic(index += n); }

	function change_pic(n) {
		var i;
		var x = document.getElementsByClassName("mySlides"); 
		if (n > x.length) {index = 1}    
		if (n < 1) {index = x.length}
		for (i = 0; i < x.length; i++) {
				x[i].style.display = "none";  }
		x[index-1].style.display = "block";  
	}

	</script>