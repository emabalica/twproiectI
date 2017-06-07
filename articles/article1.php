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
     
	    <form style="padding:0.01em 16px" action="../admin/delete.php" method='post'>
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
				<h2>Recovery</h2>
				<p>	Heredity, physiological imbalances in the brain, childhood deprivation and
					faulty parenting, and the cumulative effect of stress over time can all work to bring about
					the onset of panic attacks, agoraphobia, or any of the other anxiety disorders. The maintaining
					causes of these disorders—what keeps them going—are many and varied as well. Such
					factors can operate at the level of your body (for example, shallow breathing, muscle tension,
					or poor nutrition), emotions (such as withheld feelings), behavior (avoidance of phobic situations),
					mind (anxious self-talk and mistaken beliefs), and “whole self" (such as low self-esteem
					or a lack of self-nurturing skills). </p>
		</div>
    <div class="continut_articol" style="margin-top:80px;">
		<img class="image " src="../photos/articol1.png" style="width:400px;margin-left:90px;" >
    </div>
	
	<div style="float:left ;padding-right:25px;">								
			<p>	If the causes of anxiety disorders are so varied, then an adequate approach to recovery
				needs to be, too. It is the basic philosophy of this workbook that the most effective approach
				for treating panic, phobias, or any other problem with anxiety is one that addresses the full
				range of factors contributing to these conditions. This type of approach can be called “comprehensive."
				It assumes that you can’t just give someone the “right" medication and expect
				panic or generalized anxiety to go away. Nor can you just deal with childhood deprivation,
				having someone work through the emotional consequences of bad parenting, and expect the
				problems to disappear. By the same token, you can’t just teach people new behaviors and new
				ways of talking to themselves and expect these things alone to resolve their problems. Some
				therapists still treat anxiety disorders solely as psychiatric conditions which can be “cured"
				by medication, or solely as childhood developmental problems, or solely as behavior problems;
				but the trend in recent years has been away from such single-gauged approaches. Many
				practitioners have discovered that problems with anxiety
				go away only temporarily when
				merely one or two contributing causes are dealt with. Lasting recovery is achieved when you
				are willing to make basic and comprehensive changes in habit, attitude, and lifestyle.
			</p>
			
		<h3>Physical Level</h3>
			<p>	The long-term cause of performance anxiety may be a single traumatic experience with
				speaking before a group or doing a musical recital as a child. Or you may simply be prone
				to social anxiety and shyness from early childhood. You consistently avoid speaking or performing
				in front of others, and, in the more extreme case, avoid being in groups in general.Performance anxiety is a distinct problem from social phobia, however, affecting
				large numbers of people who otherwise do not avoid or fear participating in groups.
				The immediate cause of performance anxiety often lies in deep-seated core beliefs and
				images where you may think or picture yourself losing control or being incompetent in front
				of others. You may imagine that you will make dreadful mistakes, believe that your performance
				has to be perfect to be acceptable, or exaggerate the importance or status of the people
				you will speak to. These self-defeating thoughts can be very stubborn and persistent, leading
				to long-term avoidance of any situation where you might have the opportunity to perform or
				speak before others.</p>

		<h3>Emotional Level</h3>
			<p>	Suppressed feelings—especially withheld anger—can be a very important contributing cause
				to both chronic anxiety and panic attacks. Often feelings of panic are merely a front for buried
				feelings of anger, frustration, grief, or desperation. Many people with anxiety disorders grew
				up in families that discouraged the expression of feelings. As an adult you may have difficulty
				just identifying what you are feeling, let alone expressing those feelings.</p>
				
				
				
	<h3>Behavioral Level</h3>
			<p>	Phobias persist because of a single behavior: avoidance. As long as you avoid driving freeways,
				crossing bridges, speaking in public, or being in your home alone, your fear about these
				situations will persist. Your phobia is maintained because your avoidance behavior is so well
				rewarded: you don’t have to reckon with the anxiety you’d experience if you confronted what
				you fear.Desensitization through imagery allows you to first confront your fear mentally,
				imagining over and over that you can handle it well. Real-life desensitization involves
				confronting your phobia in actuality—but with the help of a support person and in small
				increments.Perhaps the most important feature of both types of desensitization is that they
				break down into small steps the process of confronting what you fear.</p>
			<p>	Certain behaviors tend to encourage panic attacks. Trying to fight or resist panic will
				usually only aggravate it. Most of the time it is impossible to will your way out of panic.Learning
				to observe and "go with it" instead of reacting to the bodily symptoms of panic is perhaps the
				most important behavioral shift you can make. Specific techniques such as talking to another
				person, distracting your mind, becoming physically active, expressing needs and feelings,
				doing abdominal breathing, and repeating affirmations can all foster an increased capacity to
				actively cope with, rather than passively
				react to, the bodily symptoms of panic.
			</p>

		<h3>Mental Level</h3>
			<p>	What you say to yourself internally—what is called self-talk—has a major effect on your state
				of anxiety. People with all types of anxiety disorders tend to engage in excessive “what-if"
				thinking, imagining the worst possible outcome in advance of facing what they fear. Scaring
				yourself through what-if scenarios is what has traditionally been called "worry" Self-critical
				thinking and perfectionist self-talk (statements to yourself that start with “I should","I have
				to" or "I must") also promote anxiety.</p>
			<p>	Beneath anxiety-provoking self-talk are mistaken beliefs about yourself, others, and the
				world that produce anxiety in very basic ways. For example, if you see yourself as inadequate
				compared to others—or view the outside world as a dangerous place—you’ll tend to remain
				anxious until you revise these basic attitudes.
			</p>

				
		<h3>Interpersonal Level</h3>
			<p>	Much of the anxiety people experience arises from difficulties in interpersonal relationships.
				When you have difficulty communicating your real feelings and needs to others, you may
				find yourself swallowing frustration to the point where you’re chronically tense and anxious.
				The same is true when you’re unable to set limits or say no to unwanted demands or requests
				from others.
			</p>
			<p>	Assertive communication provides ways to express
				what you want or don’t want in a manner that preserves respect for other people. Learning to
				be assertive is a very important part of the recovery process, especially if you’re dealing with
				agoraphobia or social phobia.
			</p>


		<h3>"Whole Self" Level (Self-Esteem)</h3>
			<p>	Of all the contributing causes to anxiety disorders, low self-esteem is among the deepest. You
				may have grown up in a dysfunctional family, which, through various forms of deprivation,
				abuse, or neglect, fostered
				your low sense of self-worth. As a result, you may carry into adulthood
				deep-seated feelings of insecurity, shame, and inadequacy, which tend to show up, on
				a more noticeable level, as panic attacks, fear of confronting the outside world (agoraphobia),
				fear of humiliation (social phobia), or generalized anxiety. Frequently, low self-esteem is tied
				in with all of the various contributing causes described above—in particular, lack of assertiveness,
			</p>
		    <p>	There are many ways to build self-esteem. Developing a positive body image, working.
				toward and achieving concrete goals, and countering negative self-talk with validating affirmations
				can all help. Many of my clients have found it particularly worthwhile to cultivate a
				relationship with their own inner child. The inner child is the part of you that is spontaneous
				and playful but also carries the insecurity, shame, or pain that may be left over from your
				childhood. 
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