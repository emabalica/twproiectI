<?php include '../phpDocs/dbcon.php'?> <!--Help for Phobias: Exposure-->

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
				<h2>Help for Phobias: Exposure</h2>
				<p>	The most effective way to overcome a phobia is simply to face it. Continuing to avoid a situation
					that frightens you is, more than anything else, what keeps the phobia alive.
				</p>
				
				<p>	Having to face a particular situation you have been avoiding for years may at the outset
					seem an impossible task. Yet this task can be made manageable by breaking it down into sufficiently
					small steps. Instead of entering a situation all at once, you can do it very gradually
					in small or even minute increments.
				</p>
				
				
		</div>
    <div class="continut_articol" style="margin-top:80px;">
		<img class="image " src="../photos/articol5.png" style="width:400px;margin-left:90px;" >
    </div>
	
	<div style="float:left ;padding-right:25px;">	

			<p>	Phobias develop as a result of sensitization. This is a process of becoming sensitized to
				a particular stimulus. In essence, you learn to associate anxiety with a particular situation.
				Perhaps you once panicked while sitting in a restaurant or by yourself at home. If your anxiety
				level was high, it’s likely that you acquired a strong association between being in that particular
				situation and being anxious. Thereafter,being in, being near, or perhaps just thinking
				about that situation automatically triggered your anxiety:a connection between the situation
				and a strong anxiety response was established. Because this connection was automatic and
				seemingly beyond your control, you probably did all you could to avoid putting yourself in
				the situation again. Your avoidance was rewarded because it saved you from reexperiencing
				your anxiety. At the point where you began to always avoid the situation, you developed a
				full-fledged phobia.
			</p>
					
			<p>	Desensitization-or exposure-is the process of unlearning the connection between anxiety
				and a particular situation. For desensitization to occur, you need to enter a phobic situation
				while in a relatively relaxed state. With real-life desensitization, you confront a phobic
				situation directly, letting your anxiety rise and then subside while in the situation. (If your
				anxiety rises to the point where you’re concerned it might get out of control, you temporarily
				retreat from the situation and then return to it as soon as possible.) The point is to 1) unlearn
				a connection between a phobic situation (such as driving on the freeway) and an anxiety
				response and 2) reassociate feelings of relaxation and safety with that particular situation.
				Repeatedly entering the situation while relaxed will eventually allow you to overcome your
				tendency to respond with anxiety. If you can train yourself to relax and feel safe in response
				to something, you will no longer feel anxious about it. Relaxation and anxiety are incompatible
				responses, so the goal of desensitization is to learn to remain in the phobic situation and
				be calm at the same time.
			</p>

			<p>	Real-life desensitization is the treatment of choice for agoraphobia, social phobias, and
				many specific phobias. It’s useful in overcoming the territorial phobias that are common in agoraphobia—
				for example, fear of entering grocery stores or shopping malls, driving on bridges
				or freeways, riding on buses, trains, or planes, scaling heights, and being alone. Social phobias
				that respond to direct exposure include fears of public speaking, making presentations, being
				in groups, attending social functions, dating, using public restrooms, and taking examinations.
				And specific phobias, ranging from a fear of spiders to a fear of water or dentists, can all
				be overcome by direct exposure.
			</p>

			<h3>How to Practice Real-Life Desensitization</h3>
				<p><i>Set Goals</i></p>
				<p>	Start out by clearly defining your goals. What situations would you most like to stop
					avoiding? Do you want to be able to drive on the freeway alone? Buy the week’s groceries by
					yourself? Give a presentation at work? Fly on a jet?
				</p>

				<p>	Be sure to make your goals specific. Instead of aiming for something as broad as being
					comfortable with all types of shopping, define a specific goal such as “buying the week’s groceries
					at the local grocery store by myself” or “making a one-hour flight.” Eventually you will
					want to remove all restrictions—in other words, be comfortable in any store or on any flight.
					Once you’ve defined goals, set up timelines. 
				</p>
				
				<h3>Create a Hierarchy for Each Goal</h3>
					<p>	For each goal you’ve defined, you need to create a hierarchy of exposures. A hierarchy is
						an incremental series of approaches to your phobic situation. You start off with a very limited
						exposure to the situation and then gradually, in small increments, increase your degree of
						exposure. For example, if you’re afraid of riding in elevators, you might start out simply
						approaching an elevator without getting on. The next step might be to get on and off the elevator
						without riding it up. Then the next step would be to ride up one floor and return. After
						that, you would proceed to go up two floors, and so on. You can use the following guidelines,
						as well as sample hierarchies that appear later in the chapter, to develop your own:
						<ul>
							<li>Choose a particular phobic situation you want to work on, whether this involves
								going to the grocery store, driving on the freeway, or giving a talk before a group.</li>

							<li>Imagine having to deal with this situation in a very limited way—one that hardly
								bothers you at all. In the case of going to the grocery store, this might be driving to
								the parking lot in front of the store and then returning home. In the case of giving a
								talk, this might be giving a one-minute talk to a friend in the comfort of your home.
								On a scale of 1 to 10, such exposures would be a 1 in intensity.</li>

							<li>Now imagine what would be the strongest or most challenging exposure relating to
								your phobia, and place it at the opposite extreme as the highest step in your hierarchy. For example, if you’re phobic about grocery stores, your highest step might be waiting in a long line at the checkout counter by yourself. For flying, such a
								step might involve taking off on a transcontinental flight or encountering severe air
								turbulence. For public speaking, you might imagine presenting to a large crowd,
								giving a long presentation, or speaking on a very demanding topic. On a scale of 1
								to 10, such exposures would be a 10.</li>

							<li>Now take some time to imagine six or more exposures of graduated intensity
								related to your phobia and rank them, on a scale of 1 to 10, according to their anxiety-
								provoking potential. Place these situations in ascending order between the two
								extremes you’ve already defined. Use the sample hierarchies that follow in a few
								pages to assist you. Then write down your list of scenes on the Hierarchy Worksheet
								later in this chapter.</li>
						</ul>
						
					</p>


					<h3>Determine Scenes of Varying Intensity</h3>
						<p>	Try to identify what specific parameters of your phobia make you more or less anxious
							and use them to develop situations of varying intensity. In the case of driving, such variables
							might include distance from home, whether you’re driving alone or have someone with you,
							traffic congestion, number of stoplights, or ease of getting off the highway. In the case of
							public speaking, the variables might include length of the talk, the number of people you’re
							presenting to, or how well you know the people you’re presenting to.
						</p>

						<p>	Note: If you are having difficulty moving from one step to the next in your hierarchy, you
							can always add an additional step. For example, suppose you’re exposing yourself to grocery
							shopping. You’ve reached the point where you can stay in the store for several minutes, but
							you can’t bring yourself to buy an item and go through the express checkout line. One intermediate
							step you could add would be taking an item in your basket up to the checkout line,
							waiting in line as long as your anxiety level remained mild, and then returning the item to
							where you found it. You would repeat this step without buying anything until the action
							became monotonous. Another example of an intermediate step would be to go through the checkout line with a support person carrying and paying for the item you picked out. After
							several repetitions of this, you might be ready to go through the line and buy an item on
							your own.
						</p>

						<p>	If you have a problem getting beyond a particular step, try going back to the preceding
							step in your hierarchy for your next practice session and working your way back up. For
							example, if you’ve mastered driving over a small bridge but have difficulty advancing to the
							next step, go back and repeat driving over the smaller bridge several times. The object is to
							get yourself so bored with the smaller bridge that you feel a strong incentive to attempt the
							next step up in your hierarchy. When you do, have a support person go with you.
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