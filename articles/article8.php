<?php include '../phpDocs/dbcon.php'?> <!--Nutrition-->

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
				<h2>Nutrition</h2>
					<p>	Relatively little has been written on the subject of nutrition and anxiety disorders. Yet if it is
						assumed that there is at least some biological basis for panic attacks and anxiety, the subject
						of nutrition becomes important. What you eat has a very direct and significant impact on
						your physiology and biochemistry.
						In the last twenty years, the relationship between diet, stress, and mood has been well
						documented. It’s known that certain foods and substances tend to create additional stress and
						anxiety,while others promote a calmer and steadier mood. Certain natural substances have a
						directly calming effect and others are known to have an antidepressant effect. You may not
						yet recognize connections between how you feel and what you eat. You simply may not notice
						that the amount of coffee or cola beverages you drink aggravates your anxiety level. Or you
						may be unaware of any connection between your consumption of sugar and your anxiety,
						depression, or PMS symptoms.
					</p>
				
		</div>
    <div class="continut_articol" style="margin-top:80px;">
		<img class="image " src="../photos/articol9.png" style="width:400px;margin-left:90px;" >
    </div>
	
	<div style="float:left ;padding-right:25px;">	

			<h3>Substances That Aggravate Anxiety</h3>
				<p>	Stimulants: Caffeine</br>
					Of all the dietary factors that can aggravate anxiety and trigger panic attacks, caffeine
					is the most notorious. Several of my clients can trace their first panic attack to an excessive
					intake of caffeine.Many people find that they feel calmer and sleep better after they've
					reduced their caffeine consumption. Caffeine has a directly stimulating effect on several different
					systems in your body. It increases the level of the neurotransmitter norepinephrine in your brain, causing you to feel alert and awake. It also produces the very same physiological arousal response that is triggered when you are subjected to stress—increased sympathetic nervous system activity and a release of adrenaline.</br>
					In short, too much caffeine can keep you in a chronically tense, aroused condition,
					leaving you more vulnerable to generalized anxiety, as well as panic attacks. Caffeine further
					contributes to stress by causing a depletion of vitamin B1 (thiamine), which is one of t he socalled
					antistress vitamins.
				</p>
					
				<p>	Nicotine </br>
					Nicotine is as strong a stimulant as caffeine. It causes increased physiological arousal,
					vasoconstriction,and makes your heart work harder. Smokers often object to this notion and
					claim that having a cigarette tends to calm their nerves. Research has proven, however, that
					smokers tend to be more anxious than nonsmokers, even when there are no differences in
					their intake of other stimulants, such as coffee and over-the-counter drugs. They also tend
					to sleep less well than nonsmokers. I have found that smokers, after quitting, not only feel
					healthier and more vital but are less prone to anxiety states and panic. In short, if you presently
					smoke, here is one more reason for stopping.
				</p>
				
				<p>	Stimulant Drugs</br>
					Over-the-counter drugs containing caffeine have already been mentioned. In addition
					to these medicines, you should be aware of prescription drugs that contain amphetamines,
					including Benzedrine,Dexedrine, Methedrine, and Ritalin. While these drugs used to be
					widely prescribed as appetite suppressants as well as antidepressants, they are rarely used
					today. 
				</p>

			<h3>Substances That Stress the Body</h3>
				<p>	Salt </br>
					Excessive salt (sodium chloride) stresses the body in two ways:
					<ol>
						<li>it can deplete your body of potassium,
							a mineral that’s important to the proper functioning of the nervous system</li>
						<li>it raises blood pressure, putting extra strain on your heart and arteries and hastening arteriosclerosis</li></ul>
				</p>
				
				<p>Preservatives</br>
					There are presently about five thousand chemical additives used in commercial food
					processing. Common artificial preservatives include nitrites, nitrates, potassium bisulfite,
					monosodium glutamate(MSG), BHT, BHA, and artificial colorings and flavorings. Our bodies
					are simply not equipped to handle these artificial substances, and, in most cases, very little is
					known about their long-term biological effects. To date, some that have been thoroughly tested
					have been found to be carcinogenic and thus have been removed from the market. Others
					currently in use, especially monosodium glutamate, nitrites, and nitrates, produce allergic
					reactions in many people. It is known that traditional societies that eat strictly whole foods
					without additives have a lower incidence of cancer. You should try to eat whole, unprocessed
					foods as much as possible-the foods your body was designed to handle. Try to purchase
					vegetables and fruits that haven’t been treated with pesticides (organically grown) if these are
					available in your area.
				</p>

				<p>	Hormones in Meat</br>
					Red meat, pork, and most commercially available forms of chicken are derived from
					animals that have been fed hormones to promote fast weight gain and growth. There is evidence that such hormones stress these animals (steers and hogs sometimes die of heart attacks
					on the loading platform).While there is at present no conclusive evidence, many people believe
					that these hormones might also have harmful effects for the human consumers of meat and
					meat products. One particular hormone, diethylstilbestrol (DES), has come to the public’s attention
					because it has been implicated in the development of breast cancer and fibroid tumors.
				</p>



				<h3>Move Your Diet in the Direction of Vegetarianism</h3>
					<p>	It has been frequently observed that vegetarians tend to be somewhat calmer and more easygoing
						than their meat-eating counterparts. It might be argued that low-stress, laid-back types
						are more attracted to vegetarianism in the first place. However, impressions from clients and
						personal experience suggest otherwise. A dietary change toward vegetarianism can definitely
						promote a calmer, less anxiety-prone disposition.
					</p>
					<p>	If you're used to eating meat, dairy, cheese, and egg products, it is not necessary—or
						even advisable-to give up all sources of animal protein from your diet. Giving up red meat
						alone, for example,or restricting your consumption of cow’s milk (and using soy or rice milk
						instead)—can have a noticeable and beneficial effect.
					</p>
					<p>	How can vegetarianism lead to a calmer disposition? Earlier in this chapter, it was mentioned
						that steroid hormone residues in red meat can exert an effect not unlike the body’s
						own steroid hormones, activating natural defenses against stress and suppressing immunity.
						Another reason, however, is that meat, poultry, dairy and cheese products, and eggs—along
						with sugar and refined flour products—are all acid-forming foods. These foods are not necessarily
						acid in composition, but they leave an acid residue in the body after they are metabolized,
						making the body itself more acid. This can create two kinds of problems:</br>
						<i>When the body is more acid, the transit time of food through the digestive tract can increase to the
						point where vitamins and minerals are not adequately assimilated.</i> 
						This selective underabsorption
						of vitamins—especially B vitamins, vitamin C, and minerals—can subtly add to the body’s
						stress load and eventually lead to low-grade malnutrition. Taking supplements will not necessarily
						correct this condition unless you are able to adequately digest and absorb them.</br>
						<i>Acid-forming foods, especially meats, can create metabolic breakdown products that are congestive
						to the body.</i> This is especially true if you are already under stress and unable to properly digest
						protein
						foods. The result is that you tend to end up feeling more sluggish or tired and may
						have excess mucus or sinus problems. Although it’s true that this congestion is not exactly the
						same thing as anxiety, it can certainly add stress to the body, which in turn aggravates tension
						and anxiety.</br>
						To maintain a proper acid–alkaline balance in the body, it helps to decrease consumption
						of acid-forming foods—most animal-based foods, sugar, and refined flour products—and
						increase the amount of alkaline-forming foods in your diet. Prominent among alkaline foods
						are all vegetables;
						most fruits, except plums and prunes; whole grains such as brown rice,
						millet, and buckwheat;
						and bean sprouts.
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