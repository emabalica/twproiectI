
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
	  
		<a onclick="document.getElementById('quizpart1').style.display='block'" class='item button'><i class='icon quiz_icon'></i>PHOBIA QUIZ</a>
			 <a onclick="document.getElementById('form').style.display='block'" class='item button'><i class='icon user_icon'></i>LOGIN/SINGUP</a>'		  
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
  
 
    <a onclick=\'document.getElementById('quizpart1').style.display='block';' onclick=\'close_menu()\' class='item button'>PHOBIA QUIZ</a>
               <a onclick=\'document.getElementById('form').style.display='block';' onclick=\'close_menu()\' class='item button'>LOGIN/LOGOUT</a> 
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

		
<div class='content mySlides'>
					   <a href='http://localhost/siteFinal/articles/article10.php'><img class='change' src='../photos/exemplu.png' style='width:100%'></a>
					   <div class='title'>How to Overcome Phobia
					   </div></div><div class='content mySlides'>
					   <a href='http://localhost/siteFinal/articles/article3.php'><img class='change' src='../photos/articol3.png' style='width:100%'></a>
					   <div class='title'>Physical Exercise
					   </div></div><div class='content mySlides'>
					   <a href='http://localhost/siteFinal/articles/article1.php'><img class='change' src='../photos/articol1.png' style='width:100%'></a>
					   <div class='title'>Recovery
					   </div></div><div class='content mySlides'>
					   <a href='http://localhost/siteFinal/articles/article4.php'><img class='change' src='../photos/articol4.png' style='width:100%'></a>
					   <div class='title'>Coping with Panic Attacks
					   </div></div>
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
		
		<h3>How to Overcome Phobia</h3>
					<p class='opacitate'>12-MAY-2017</p>
					<p><br />
Clowns. Spiders. Heights. Needles. Flying. What do these things all have in common? They're some of the most common phobias. A phobia is actually an intense form of anxiety with a deep sense of fear to which the body reacts. While severe phobias should be treated with professional therapies and/or medication, you can overcome most mild to moderate phobias and reduce the anxiety<br />
</p>
		</div>
		
	
	
	
	<div class='continut_articol' style='margin-top:80px;'>
		<img class='image' src='../photos/exemplu.png' style='width:400px;margin-left:90px;' >
    </div>	<div style='float:left ;padding-right:25px;'>								
			<p>ociated with a phobia.dentify your fear. Really think about what you're afraid of. For example, while you may hate going to the dentist, it might be the use of needles that you're truly afraid of.<br />
<br />
Identify your fear. Really think about what you're afraid of. For example, while you may hate going to the dentist, it might be the use of needles that you're truly afraid of. In this case, you'd want to focus on your fear of needles, not the dentist.[1]<br />
<br />
    If you're having trouble pinpointing your phobia, write down a list of the things that scare you. You may be able to isolate the true fear.<br />
<br />
 Write down your goals. Set tangible, achievable goals. It will also be helpful during treatment to consider the benefits that come from these goals.[2] Write down a variety of goals at different levels. Having small achievements will help you work towards tougher aims.<br />
<br />
    The act of writing down your goals can actually help you succeed. You're more likely to write down detailed, achievable goals, rather than vague ones. You'll also be more committed to sticking with them.[3]<br />
 Make a coping strategy. It's naive to assume that you won't encounter any obstacles. Instead, imagine how you want to react to what frightens you. You could visualize something else, face the fear head on for a set amount of time, or you could distract yourself by doing an activity.<br />
<br />
    Realize that your coping strategy should change as you encounter and achieve goals. While you might initially cope by distracting yourself, you may eventually be able to face your phobia for small periods of time.[4]<br />
<br />
Know that being afraid is perfectly normal. After all, fear has helped humans survive in many situations. On the other hand, fears may easily turn into phobias, also prevent someone from accomplishing certain things. For example:[5]<br />
<br />
    It is normal to feel anxious if you look down from a skyscraper. On the other hand, turning down a dream job just because it happens to be at the top of a skyscraper, is not helping you achieve your goals/dreams.<br />
    Many people feel anxious about getting shots or having blood drawn. Shots can be painful. It is when someone starts to avoid medical examinations and treatments just because he or she might get a shot, that the fear becomes problematic.<br />
<br />
<br />
Enter the exercise feeling relaxed. While everyone relaxes differently, find something that works for you. You may try simply visualizing a calming scene, releasing tension in your muscles, practicing breathing, or meditation.<br />
<br />
    Try to work on a relaxation technique that can be done anywhere at anytime. This way, when you encounter your phobia, you can overcome your fear.<br />
<br />
</p>
			</div>
	</div>
</div>

	<div class='footer' style='margin-top:30px; ' >
			
	</div>	<script>

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



