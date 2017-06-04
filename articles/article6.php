<?php include '../phpDocs/dbcon.php'?> <!--Self-talk-->

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
				<h2>Self-talk</h2>
				<p>	Imagine two individuals sitting in stop-and-go traffic at rush hour. One perceives himself as
					trapped, and says such things to himself as "I can/t stand this", "I've got to get out of here",
					and "Why did I ever get myself into this commute?" What he feels is anxiety, anger, and
					frustration. The other perceives the situation as an opportunity to lie back, relax, and listen
					to music. He says, "I might as well just relax and adjust to the pace of the traffic" or "I can
					unwind by doing some deep breathing". What he feels is a sense of calm and acceptance. In
					both cases, the situation is exactly the same, but the feelings in response to that situation are
					vastly different because of each individual’s internal monologue, or self-talk.
				</p>

				
				
		</div>
    <div class="continut_articol" style="margin-top:80px;">
		<img class="image " src="../photos/articol6.png" style="width:320px;margin-left:90px;" >
    </div>
	
	<div style="float:left ;padding-right:25px;">	

			<p>	The truth is that it’s what we say to ourselves in response to any particular situation that
				mainly determines our mood and feelings. Often we say it so quickly and automatically that
				we don’t even notice, and so we get the impression that the external situation “makes” us feel
				the way we do. But it’s really our interpretations and thoughts about what is happening that
				form the basis of our feelings.
			</p>

			<p>	In short, you are largely responsible for how you feel (barring physiological determinants,
				such as illness). This is a profound and very important truth—one that sometimes
				takes a long time to fully grasp. It’s often much easier to blame the way you feel on something
				or someone outside yourself than to take responsibility for your reactions. Yet it is through
				your willingness to accept that responsibility that you begin to take charge and have mastery
				over your life. The realization
				that you are mostly responsible for how you feel is empowering
				once you fully accept it. It’s one of the most important keys to living a happier, more effective,
				and anxiety-free life.
			</p>

			<h3>Some Basic Points About Self-Talk</h3>
				<p>	Self-talk is usually so automatic and subtle that you don’t notice it or the effect it
					has on your moods and feelings. You react without noticing what you told yourself
					right before you reacted. Often it’s only when you relax, take a step back, and really
					examine what you’ve been telling yourself that you can see the connection between
					self-talk and your feelings. What is important is that you can learn to slow down and
					take note of your negative internal monologue.
				</p>

				<p>	Anxious self-talk is typically irrational but almost always sounds like the truth. What-if
					thinking may lead you to expect the worst possible outcome in a given situation, one
					that is highly unlikely to occur. Yet because the association takes place so quickly,
					it goes unchallenged and unquestioned. It’s hard to evaluate the validity of a belief
					you’re scarcely aware of—you just accept it as is.
				</p>
				
				<p>	Negative self-talk perpetuates avoidance. You tell yourself that a situation such as the
					freeway is dangerous and so you avoid it. By continuing to avoid it, you reinforce the
					thought that it’s dangerous. You may even project images of catastrophe around the
					prospect of confronting the situation. In short, anxious self-talk leads to avoidance,
					avoidance begets further anxious self-talk, and around and around the cycle goes.
				</p>
				
				<p>	Self-talk can initiate or aggravate a panic attack. A panic attack often starts out with
					symptoms of increasing physiological arousal, such as a more rapid heartbeat,tightness
					in the chest, or sweaty palms. Biologically, this is the body’s natural
					response to stress—the fight-or-flight response that all mammals, including humans,
					normally experience when subjected to a perceived threat. There is nothing inherently
					abnormal or dangerous about it. Yet these symptoms can remind you of previous
					panic attacks.
				</p>
				
				<p>	Negative self-talk is a series of bad habits. You aren’t born with a predisposition to
					fearful self-talk: you learn to think that way. Just as you can replace unhealthy behavioral
					habits, such as smoking or drinking excess coffee, with more positive, healthpromoting
					behavior, so can you replace unhealthy thinking with more positive, supportive
					mental habits. Bear in mind that the acquisition of positive mental habits takes
					the same persistence and practice required for learning new behaviors.
				</p>
					
					
					<h3>Countering Negative Self-Talk</h3>
				<p>	The most effective way to deal with the negative self-talk of your Worrier and other subpersonalities
					is to counter it with positive, supportive statements. Countering involves writing down
					and rehearsing positive statements that directly refute or invalidate your negative self-talk. If
					you’re creating anxiety and other upsetting emotional states through negative mental programming,
					you can begin to change the way you feel by substituting positive programming.
					Doing this will take some practice. You’ve had years to practice your negative self-talk and
					naturally have developed some very strong habits. Your Worrier and other subpersonalities
					are likely to be very well entrenched. By starting to notice when you’re engaging in negativity
					and then countering it with positive, supportive statements to yourself, you’ll begin to turn
					your thinking around. With practice and consistent effort, you’ll change both the way you
					think and the way you feel on an ongoing basis.
				</p>
				<p>	Sometimes countering comes naturally and easily. You are ready and willing to substitute
					positive, reasonable self-statements for ones that have been causing you anxiety and
					distress. You’re more than ready to relinquish negative mental habits that aren’t serving you.</p>
				<p>	Perhaps you’re strongly attached to some of your negative self-talk. You’ve been telling
					yourself these things for years and it’s difficult to give up both the habit and the belief. You’re
					not someone who’s easily persuaded. If that’s the case, and you want to do something about
					your negative self-talk, it’s important that you subject it to rational scrutiny. You can weaken
					the hold of your negative self-statements by exposing them to any of the following Socratic
					questions, or rational investigation.
					<ol>
						<li>What is the evidence for this?</li>
						<li>Is this always true?</li>
						<li>Has this been true in the past?</li>
						<li>What are the odds of this really happening (or being true)?</li>
						<li>What is the very worst that could happen? What is so bad about that? What would
							you do if the worst happened?</li>
						<li>Are you being fully objective?</li>
					</ol>
				</p>




			<h3>Working with Counterstatements</h3>
			<p>	Now you are ready to go back and counter all of the negative statements you recorded on the
				worksheets for your various subpersonalities. Write down counterstatements corresponding
				to each negative statement in the right-hand column. Use extra sheets of paper if you need to.</p>
			<p>	Once you’ve completed writing out positive self-talk for each subpersonality in each
				situation,there are several ways you can work with your positive counterstatements.
			<ul>
				<li>Read through your list of positive counterstatements slowly and carefully for a few
					minutes each day for at least two weeks. See if you can feel some conviction about
					their truth as you read them. This will help you to integrate them more deeply into
					your consciousness.</li>
				<li>Make copies of your worksheets and post them in a conspicuous place. Take time
					once a day to carefully read through your positive counterstatements.</li>
				<li>Record your counterstatements, leaving about five seconds between each consecutive
					positive statement so that it has time to sink in. You can significantly enhance
					the effect of such a recording by giving yourself ten to fifteen minutes to become
					very relaxed before listening to your counterstatements. You will be more receptive
					to them in a relaxed state. You may want to record the instructions for progressive
					muscle relaxation or one of the relaxing visualizations described in chapter 4 on the
					first ten to fifteen minutes of the recording.</li>
				<li>If you’re having a problem with a particular phobia, you might want to work with
					positive counterstatements that are specific just to that phobia. For example, if you’re
					afraid of speaking before groups, make a list of all your fears about what could
					happen, and develop positive statements to counter each fear. </li>
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