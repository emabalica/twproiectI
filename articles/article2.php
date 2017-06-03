<?php include '../phpDocs/dbcon.php'?> <!--Relaxation-->

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
				<h2>Relaxation</h2>
				<p>	The capacity to relax is at the very foundation of any program undertaken to overcome anxiety,
					phobias, or panic attacks. Many of the other skills described in this site, such as desensitization,
					visualization, and changing negative self-talk, build on the capacity to achieve deep relaxation.
					Relaxation is more than unwinding in front of the TV set or in the bathtub at the end of
					the day—though, without doubt, these practices can be relaxing. The type of relaxation that
					really makes a difference in dealing with anxiety is the regular, daily practice of some form of
					deep relaxation.
					Deep relaxation refers to a distinct physiological state that is the exact opposite
					of the way your body reacts under stress or during a panic attack.
	    		</p>
		
		</div>
    <div class="continut_articol" style="margin-top:80px;">
		<img class="image " src="../photos/articol2.png" style="width:490px;margin-left:90px;" >
    </div>
	
	<div style="float:left ;padding-right:25px;">								
			<p>	Regular practice of deep relaxation for twenty to thirty minutes on a daily basis can
				produce, over time, a generalization of relaxation to the rest of your life. That is, after several
				weeks of practicing deep relaxation once per day, you will tend to feel more relaxed all the time.
			</p>
			
			<p>	How can you achieve a state of deep relaxation? Some of the more common methods include:</p>
			
			<ul>
				<li>Abdominal breathing</li>
				<li>Progressive muscle relaxation</li>
				<li>Passive muscle relaxation</li>
				<li>Visualizing a peaceful scene</li>
				<li>Guided imagery</li>
				<li>Meditation</li>
		   </ul>
		   
		<h3>Abdominal Breathing</h3>
			<p>	Your breathing directly reflects the level of tension you carry in your body. Under tension,
				your breathing usually becomes shallow and rapid, and your breathing occurs high in the
				chest. When relaxed, you breathe more fully, more deeply, and from your abdomen. It’s difficult
				to be tense and to breathe from your abdomen at the same time.
			</p>

			<p>	If you suffer from phobias, panic, or other anxiety disorders, you will tend to have one
				or both of two types of problems with breathing. Either:
			<ul>
				<li>You breathe too high up in your chest and your breathing is shallow, or</li>
				<li>You tend to hyperventilate, breathing out too much carbon dioxide relative to the
					amount of oxygen carried in your bloodstream. Shallow, chest-level breathing, when
					rapid, can lead to hyperventilation. Hyperventilation, in turn, can cause physical
					symptoms very similar to those associated with panic attacks.</li>
			</ul>
			</p>
				
				
		<h3>Shallow, Chest-Level Breathing</h3>
			<p>	Studies have found differences in the breathing patterns of anxious and shy people as
				opposed to those who are more relaxed and outgoing. People who are fearful and shy tend
				to breathe in a shallow fashion from their chest, while those who are more extroverted and
				relaxed breathe more slowly, deeply, and from their abdomens.
			</p>
			
			<p>	Before reading on, take a minute to notice how you are breathing right now. Is your
				breath slow or rapid? Deep or shallow? Does it center around a point high in your chest or
				down in your abdomen? You might also notice changes in your breathing pattern under
				stress versus when you are more relaxed.
			</p>

		
			<p>	If you find that your breathing is shallow and high in your chest, don’t despair. It’s
				quite possible to retrain yourself to breathe more deeply and from your abdomen. Practicing
				abdominal breathing (described below) on a regular basis will gradually help you to shift the
				center of your breath downward from your chest. Regular practice of full abdominal breathing
				will also increase your lung capacity, helping
				you to breathe more deeply. A program of
				vigorous, aerobic exercise can also be helpful.
			</p>

		<h3>Hyperventilation Syndrome</h3>

		<p>	If you breathe from your chest, you may tend to overbreathe, exhaling excess carbon
			dioxide in relation to the amount of oxygen in your bloodstream. You may also tend to breathe
			through your mouth. The result is a cluster of symptoms, including rapid heartbeat, dizziness,
			and tingly sensations that are so similar to the symptoms of panic that they can be indistinguishable.
			Some of the physiological changes brought on by hyperventilation include:
			<ul>
				<li>Increased alkalinity of nerve cells, which causes them to be more excitable. The result
					is that you feel nervous and jittery.</li>
				<li>Decreased carbon dioxide in the blood, which can cause your heart to pump harder and
					faster as well as making lights seem brighter and sounds louder.</li>
				<li>Increased constriction of blood vessels in your brain, which can cause feelings of dizziness,
					disorientation, and even a sense of unreality or separateness from your body.</li>
				</ul>
		</p>
		
		<p>	All these symptoms may be interpreted as a developing panic attack. As soon as you start
			responding to these bodily changes with panic-evoking mental statements to yourself, such
			as "I’m losing control!"
			or "What’s happening to me?" you actually do panic. Symptoms that
			initially only mimicked panic set off a reaction that leads to genuine panic. Hyperventilation
			can either 1) cause physical sensations that lead you to panic or 2) contribute to an ongoing
			panic attack by aggravating unpleasant physical symptoms.
		</p>

		<p>	If you suspect that you are subject to hyperventilation, you might notice whether you
			habitually breathe shallowly from your chest and through your mouth. Notice also, when
			you’re frightened, whether you tend to hold your breath or breathe very shallowly and quickly.
			The experience of tingling or numb sensations, particularly in your arms or legs, is also a sign
			of hyperventilation. If any of these characteristics seem to apply to you, hyperventilation may
			play a role in either instigating or aggravating your panic reactions or anxiety.
		</p>

		<p>	The traditional cure for acute hyperventilation symptoms is to breathe into a paper bag.
			This technique causes you to breathe in carbon dioxide, restoring the normal balance of oxygen
			to carbon dioxide in your bloodstream. It is a method that works. Equally effective in reducing
			symptoms of hyperventilation are the abdominal breathing and calming breath exercises
			described below. Both of them help you to slow your breathing down, which effectively reduces
			your intake of oxygen and brings the ratio of oxygen to carbon dioxide back into balance.
		</p>


		<h3>Abdominal Breathing Exercise</h3>

		<ul>
			<li>Note the level of tension you’re feeling. Then place one hand on your abdomen right
				beneath your rib cage.</li>
			<li>Inhale slowly and deeply through your nose into the “bottom" of your lungs—in
				other words, send the air as low down as you can. If you’re breathing from your
				abdomen, your hand should actually rise. Your chest should move only slightly
				while your abdomen expands. (In abdominal breathing, the diaphragm—the muscle
				that separates the chest cavity
				from the abdominal cavity—moves downward. In so
				doing, it causes the muscles surrounding the abdominal cavity to push outward.)</li>
			<li>When you’ve taken in a full breath, pause for a moment and then exhale slowly
				through your nose or mouth, depending on your preference. Be sure to exhale fully.
				As you exhale, allow your whole body to just let go (you might visualize your arms and
				legs going loose and limp like a rag doll).</li>
			<li>Do ten slow, full abdominal breaths. Try to keep your breathing smooth and regular,
				without gulping in a big breath or letting your breath out all at once.</li>
		</ul>

		<h3>Calming Breath Exercise</h3>
			<p>	The Calming Breath Exercise was adapted from the ancient discipline of yoga. It is a very
				efficient technique for achieving a deep state of relaxation quickly.
			<ul>
				<li>Breathing from your abdomen, inhale through your nose slowly to a count of five
					(count slowly “one … two … three … four … five" as you inhale).</li>
				<li>Pause and hold your breath to a count of five.</li>
				<li>Exhale slowly, through your nose or mouth, to a count of five (or more if it takes you
					longer).Be sure to exhale fully.</li>
				<li>When you’ve exhaled completely, take two breaths in your normal rhythm, then
					repeat steps 1 through 3 in the cycle above.</li>
				<li>Keep up the exercise for at least three to five minutes. This should involve going
					through at least ten cycles of in-five, hold-five, out-five. As you continue the exercise,
					you may notice that you can count higher when you exhale than when you inhale.
					Allow these variations in your counting to occur if they do, naturally, and just continue
					with the exercise for up to five minutes. Remember to take two normal breaths
					between each cycle. If you start to feel light-headed while practicing this exercise,
					stop for thirty seconds and then start again.</li>
				<li>Throughout the exercise, keep your breathing smooth and regular, without gulping in
					breaths or breathing out suddenly.</li></ul>
			 </p>


			<h3>Practice Exercise</h3>
				<p>	Practice the Abdominal Breathing Exercise or Calming Breath Exercise for five minutes every
					day for at least two weeks. If possible, find a regular time each day to do this so that your breathing
					exercise becomes a habit. With practice, you can learn in a short period of time to damp
					down the physiological reactions underlying anxiety and panic.
				</p>
				<p>	Once you feel you’ve gained some mastery in the use of either technique, apply it when
					you feel stressed or anxious, or when you experience the onset of panic symptoms. By extending
					your practice of either exercise to a month or longer, you will begin to retrain yourself to
					breathe from your abdomen. The more you can shift the center of your breathing from your
					chest to your abdomen,the more consistently you will feel relaxed on an ongoing basis.
			   </p>


		<h3>Progressive Muscle Relaxation</h3>
			<p>	Progressive muscle relaxation (PMR) is a systematic technique for achieving a deep state of
				relaxation.It was developed by Dr. Edmund Jacobson more than fifty years ago. Dr. Jacobson
				discovered that a muscle could be relaxed by first tensing it for a few seconds and then releasing
				it. Tensing and releasing various muscle groups throughout the body produces a deep state of relaxation, which Dr. Jacobson found capable of relieving a variety of conditions, from
				high blood pressure to ulcerative colitis.
			</p>
			
			<p>	Progressive muscle relaxation is especially helpful for people whose anxiety is strongly
				associated with muscle tension. This is what often leads you to say that you are “uptight"
				or “tense." You may experience
				chronic tightness in your shoulders and neck, which can be
				effectively relieved by practicing progressive muscle relaxation. Other symptoms that respond
				well to progressive muscle relaxation include tension headaches, backaches, tightness in the
				jaw, tightness around the eyes, muscle spasms, high blood pressure, and insomnia. If you are
				troubled by racing thoughts, you may find that systematically relaxing your muscles tends to
				help slow down your mind. Dr. Jacobson himself once said, “An anxious
				mind cannot exist in a relaxed body."</p>

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