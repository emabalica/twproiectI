<?php include '../phpDocs/dbcon.php'?> <!--Mistaken Beliefs-->

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
				<h2>Mistaken Beliefs</h2>
					<p>	By now you may have asked, "Where does negative self-talk come from?"" In most cases, it’s
						possible to trace negative thinking back to deeper-lying beliefs or assumptions about ourselves,
						others, and life in general.These basic assumptions have been variously called "scripts" ,"core
						beliefs" "life decisions", "fallacious beliefs" or "mistaken beliefs". While growing up, we
						learned them from our parents, teachers, and peers, as well as from the larger society around
						us. These beliefs are typically so basic to our thinking that we do not recognize them as
						be liefs at all—we just take them for granted and assume them to reflect reality
					</p>
				
		</div>
    <div class="continut_articol" style="margin-top:80px;">
		<img class="image " src="../photos/articol7.png" style="width:500px;margin-left:90px;" >
    </div>
	
	<div style="float:left ;padding-right:25px;">	
			<p>	Mistaken beliefs are at the root of much of the anxiety you experience. As discussed
				in the preceding chapter, you talk yourself into much of your anxiety by anticipating the
				worst (what-if thinking), putting yourself down (self-critical thinking), and pushing yourself
				to meet unreasonable demands and expectations (perfectionist thinking).
			</p>

			<h3>Examples of Mistaken Beliefs</h3>
				<p>	There are innumerable mistaken beliefs. You have your own collection as a result of what you
					learned from your parents, teachers, and peers during childhood and adolescence. Sometimes
					you take on a false belief directly from your parents, such as when you are told "Big boys
					don't cry" or "Nice girls don’t get angry". At other times, you develop an attitude about yourself
					as a result of being frequently criticized (thus "I'm worthless"), ignored (thus "My needs
					don’t matter"), or rejected (thus "I'm unlovable") over many years. The unfortunate thing
					is that you may live out these mistaken attitudes to the point where you act in ways-and
					get others to treat you in ways—that confirm them. Like computers, people can be "preprogrammed",
					and the mistaken beliefs of childhood can become self-fulfilling prophecies.
				</p>
				<p>	Below are some examples of fairly common mistaken beliefs that tend to influence many
					people.Following each are counterstatements that replace the negative belief with a positive
					one, much in the way negative self-talk was countered by positive self-statements in the preceding
					chapter. Positive statements that counter mistaken beliefs are known as affirmations.
					<ul>
						<li>I’m powerless. I’m a victim of outside circumstances.</br>
							<i>I’m responsible and in control of my life. Circumstances are what they are, but I can
							determine my attitude toward them.</i>	
						</li>
					<li>Life is a struggle. Something must be wrong if life seems too easy, pleasurable, or fun.</br>
						<i>Life is full and pleasurable.</br>
						It’s okay for me to relax and have fun.</br>
						Life is an adventure—and I’m learning to accept both the ups and the downs.</i>
					</li>

					<li>I always should look good and act nice, no matter how I feel</br>
						<i>It’s okay simply to be myself</i>
					</li>

					<li>If I worry enough, this problem should get better or go away.</br>
						<i>Worrying has no effect on solving problems; taking action does.</i>
					</li>

					<li>I can’t cope with difficult or scary situations.</br>
						<i>I can learn to handle any scary situation if I approach it slowly, in small enough steps.</i>
					</li>
					</ul>
				</p>

					<p>	Just recognizing your own particular mistaken beliefs is the first and most important step
						toward letting go of them. The second step is to develop a positive affirmation to counter each
						mistaken belief and continue to impress it on your mind until you are "deprogrammed".
					</p>


				<h3>Guidelines for Constructing Affirmations</h3>
					<p>	An affirmation should be short, simple, and direct. "I believe in myself" is preferable
						to "There are a lot of good qualities I have that I believe in".
					</p>
					<p>	Keep affirmations in the present tense ("I am prosperous") or present progressive tense
						("I am becoming prosperous"). Telling yourself that some change you desire will
						happen in the future always keeps it one step removed.
					</p>
					<p>	Try to avoid negatives. Instead of saying "I'm no longer afraid of public speaking",
						try "I'm free of fear about public speaking" or "I'm becoming fearless about public
						speaking". Similarly,
						instead of the negative statement "I'm not perfect", try "It's okay
						to be less than perfect" or "It's okay to make mistakes". Your unconscious mind is
						incapable of making the distinction between a positive and a negative statement. It
						can turn a negative statement, such as "I'm not afraid", into a positive statement that
						you don’t want to affirm—that is, "I'm afraid".
					</p>
					<p>	Start with a direct declaration of a positive change you want to make in your life ("I
						am making more time for myself every day"). If this feels a little too strong for you
						just yet, try changing it to "I am willing to make more time for myself". Willingness
						to change is the first step you need to take in order to actually make any substantial
						change in your life. A second alternative to a direct declaration is to affirm that you
						are becoming something or learning to do something. If you’re not quite ready for a
						direct statement such as "I'm strong, confident, and secure", you can affirm "I am
						becoming strong, confident, and secure". Again, if you're not ready for "I face my
						fears willingly", try "I'm learning to face my fears".
					</p>



		<h3>Ways to Work with Affirmations</h3>
			<p>	Once you have made a list of affirmations, decide on a few that you would like to work with.
				In general, it’s a good idea to work on only two or three at a time, unless you choose to make
				a recording containing all of them. Some of the more helpful ways you can utilize affirmations
				are listed below.
			</p>
			<p>	Write an affirmation repetitively, about five or ten times every day, for a week or
				two. Each time you doubt your belief in the affirmation, write down your doubt on
				the reverse side of the paper. As you continue to write an affirmation over and over,
				giving yourself the opportunity to express any doubts, you’ll find that your willingness
				to believe it increases.
			</p>
			<p>	Write your affirmation in giant letters with a magic marker on a blank sheet of paper
				(the words should be visible from at least twenty feet away). Then attach the sheet
				to your bathroom mirror, your refrigerator, or some other conspicuous place in your
				home. Constantly seeing the affirmation day in and day out, whether or not you
				actively attend to it, will help to reinforce it in your mind.
			</p>
			<p>	Record a series of affirmations. If you develop twenty or so affirmations to counter
				statements on the Mistaken Beliefs Questionnaire, you may wish to put all of them on a
				recording. You can either use your own voice or have someone else do the recording.
				Make sure the affirmations are in the first person and that you allow five to ten seconds
				between them so that each one has time to sink in.
			</p>
			<p>	Take a single affirmation with you into meditation. Repeating an affirmation slowly
				and with conviction while in a deep meditative state is a very powerful way of incorporating
				it into your consciousness. Meditation is a state in which you can experience
				yourself as a “whole being.” Whatever you affirm or declare with your whole being
				will have the strongest tendency to come true.
			</p>
			<p>	Work with a partner. Have your partner say the affirmation to you in the second
				person while looking into your eyes. After she or he says it (for example, "You are
				learning to overcome your fears"), you respond, "Yes, I know". Your partner keeps
				repeating the affirmation to you until she or he is convinced that you really mean it
				when you say, "Yes, I know". After you've completed this, reverse roles. This time you repeat the affirmation
				in the first person while looking into your partner's eyes. After
				each time you say the affirmation (for example, "I'm learning to overcome my fears"),
				your partner responds with the statement "Yes, it's true!".
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