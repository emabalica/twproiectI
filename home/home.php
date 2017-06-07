<?php include '../phpDocs/dbcon.php'?>

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
	        <a href="http://localhost/twproiectI-master/quiz2/test.php" class=" item button"><i class="icon art_icon"></i> PHOBIA KNOWLEDGE TEST</a>
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
				<a href='http://localhost/siteFinal/admin/charts.php' class='item button'><i class='icon user_icon'></i>CHARTS</a>
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
     
	    <form style="padding:0.01em 16px" action="../admin/post.php" method='post'>
        <div style="margin-top:16px!important;margin-bottom:16px!important">
          <label><b>Select the type of posting:</b></label>
          <select  class="select" name="art_type">
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
     
	    <form style="padding:0.01em 16px" action="../admin/delete.php" method='post'>
				<div style="margin-top:16px!important;margin-bottom:16px!important">
					<label><b>Select the type of posting:</b></label>
						<select class="select" id="sel1" name='art_type'>
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

<!-- Most read art -->
<div class="bestart" style="padding:40px 16px" >
	<img src="../photos/bestarticles.png" style="width:30%;padding-left:35%;">
		<div class="container " style="margin-top:64px">  
			<?php include '../phpDocs/mostReadArticles.php' ?>
		</div>
</div>


<!--Phobia groups!-->

 <?php include '../phpDocs/phobiGroups.php'?>
  

<div class="_articol color" style="padding:20px 16px;margin-top:10px;">
	<div class="row_padding borduraPhobiGroups" style="border-top:1px solid #ccc" >
		<div class="continut_articol " >  
				<h3>What Is Anxiety?</h3>
				<p><b><i>"But do not distress yourself with imaginings. Many fears are born of fatigue and loneliness.
						  Beyond a wholesome discipline, be gentle with yourself." </i>Max Ehrmann</b></p>
				<p>	You can better understand the nature of anxiety by looking at both what it is and what it is not. 
					For example, anxiety can be distinguished from fear in several ways. When you are afraid, your fear 
					is usually directed toward some concrete external object or situation. The event that you fear usually 
					is within the bounds of possibility. You might fear not meeting a deadline, failing an exam, 
					being unable to pay your bills, or being rejected by someone you want to please. When you experience 
					anxiety, on the other hand, you often can't specify what it is you're anxious about. </p>
		</div>
    <div class="continut_articol" style="margin-top:80px;">
		<img class="image " src="../photos/relax.gif" alt="Buildings" width="700" height="394">
    </div>
	
	<div style="float:left ;padding-right:25px;">								
			<p>	The focus of anxiety 
				is more internal than external. It seems to be a response to a vague, distant, or even unrecognized danger. 
				You might be anxious about "losing control" of yourself or some situation. Or you might feel a vague anxiety 
				about "something bad happening".Anxiety affects your whole being. It is a physiological, behavioral, and psychological reaction all at once. On a physiological level, anxiety may include bodily reactions such as rapid heartbeat, muscle tension, queasiness, dry mouth, or sweating. On a behavioral level, it can sabotage your ability to act, express yourself, or deal with certain everyday situations.</p>
			<p>	Anxiety can appear in different forms and at different levels of intensity. It can range in
				severity from a mere twinge of uneasiness to a full-blown panic attack marked by heart palpitations,
				disorientation, and terror. Anxiety that is not connected with any particular situation, that
				comes "out of the blue", is called free-floating anxiety or, in more severe instances, a spontaneous
				panic attack. The difference between an episode of free-floating anxiety and a spontaneous panic
				attack can be defined by whether you experience four or more of the following symptoms at the
				same time (the occurrence of four or more symptoms defines a panic attack):
			</p>
			
			<ul>
				<li>Shortness of breath</li>
				<li>Heart palpitations</li>
				<li>Trembling or shaking</li>
				<li>Sweating</li>
				<li>Numbness</li>
				<li>Dizziness</li>
			</ul>
			
			<p>	If your anxiety arises only in response to a specific situation, it is called situational anxiety
				or phobic anxiety. Situational anxiety is different from everyday fear in that it tends to be out
				of proportion or unrealistic. If you have a disproportionate apprehension about driving on
				freeways, going to the doctor, or confronting your spouse, this may qualify as situational
				anxiety. Situational anxiety becomes phobic when you actually start to avoid the situation: if
				you give up driving on freeways, going to doctors, or confronting your spouse altogether. In	
				other words, phobic anxiety is situational anxiety that includes persistent avoidance of the
				situation.
			</p>
			
			<p>	There is an important difference between spontaneous anxiety (or panic) and anticipatory
				anxiety (or panic). Spontaneous anxiety tends to come out of the blue, peaks to a
				high level very rapidly, and then subsides gradually. The peak is usually reached within five
				minutes, followed by a gradual tapering-off period of an hour or more. Anticipatory anxiety,
				on the other hand, tends to build up more gradually in response to encountering-or simply
				thinking about-a threatening situation and then usually falls off quickly. You may "worry
				yourself into a frenzy" about something for an hour or more and then let go of the worry as
				you find something else to occupy your mind.</p>

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


</body>
</html>
