<?php
session_start();?>
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
	<link rel="stylesheet" href="../css/quiz2.css">
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
     
	    <form style="padding:0.01em 16px" action="post.php" method='post'>
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
	


<?php

$_SESSION['score']='0';
		$fid = $_GET['id'];
		$answer1= $_POST['answerOne'];
		$answer2= $_POST['answerTwo'];
		$answer3= $_POST['answerThree'];
		$answer4= $_POST['answerFour'];

	
	if ($fid==1)
	{
			if ($answer1 == "A"){$_SESSION['score'] = $_SESSION['score']+'1';}
			if ($answer2 == "C"){$_SESSION['score'] = $_SESSION['score']+'1';}
			if ($answer3 == "C"){$_SESSION['score'] = $_SESSION['score']+'1';}
			if ($answer4 == "A"){$_SESSION['score'] = $_SESSION['score']+'1';}	
		echo "


<form action='pas3.php?id=2' method='post' id='quizForm' id='2'>


	<ul>
    
    
				<li>
				<h3>What is a phobia?</h3>
				
					<div>
					<input type='radio' name='answerOne' id='answerOne' value='A' />
					<label for='answerOneA'>A)A rational fear of or aversion to something</label>
					</div>
					
					<div>
					<input type='radio' name='answerOne' id='answerOne' value='B' />
					<label for='answerOneB'>B) An extreme or irrational fear of or aversion to something</label>
					</div>
					
					<div>
					<input type='radio' name='answerOne' id='answerOne' value='C' />
					<label for='answerOneC'>C) An illness </label>
					</div>
				</li>
				
			   
				<li>
				<h3>Who was the first to write about phobias?</h3>
				
					<div>
					<input type='radio' name='answerTwo' id='answerTwo' value='A' />
					<label for='answerTwoA'>A)Plutarch </label>
					</div>
					
					<div>
					<input type='radio' name='answerTwo' id='answerTwo' value='B' />
					<label for='answerTwoB'>B)Pythagoras</label>
					</div>
					
					<div>
					<input type='radio' name='answerTwo' id='answerTwo' value='C' />
					<label for='answerTwoC'>C) Aristotle</label>
					</div>
				</li>
				
			   
				 <li>
				<h3>What is Mysophobia?</h3>
					
					<div>
					<input type='radio' name='answerThree' id='answerThree' value='A' />
					<label for='answerThreeA'>A)The fear of heights </label>
					</div>
					
					<div>
					<input type='radio' name='answerThree' id='answerThree' value='B' />
					<label for='answerThreeB'>B)The fear of germs and dirt</label>
					</div>
					
					<div>
					<input type='radio' name='answerThree' id='answerThree' value='C' />
					<label for='answerThreeC'>C)The fear of water </label>
					</div>
				</li>
							   
				 <li>
				<h3>What is Porphyrophobia?</h3>
				
					<div>
					<input type='radio' name='answerFour' id='answerThree' value='A' />
					<label for='answerFourA'>A)The fear of clowns </label>
					</div>
					
					<div>
					<input type='radio' name='answerFour' id='answerThree' value='B' />
					<label for='answerFourB'>B) The fear of the color purple</label>
					</div>
					
					<div>
					<input type='radio' name='answerFour' id='answerThree' value='C' />
					<label for='answerFourC'>C) the fear of doctors</label>
					</div>
				</li>

    </ul>
     <input type='submit' value='Continue' />
    
</form>
";
	}

	if($fid==2)
	{$rid = rand(1,3);
			if ($answer1 == "B"){$_SESSION['score'] = $_SESSION['score']+'1';}
			if ($answer2 == "A"){$_SESSION['score'] = $_SESSION['score']+'1';}
			if ($answer3 == "B"){$_SESSION['score'] = $_SESSION['score']+'1';}
			if ($answer4 == "B"){$_SESSION['score'] = $_SESSION['score']+'1';}
	while($rid==2)
		{$rid = rand(1,3);}
	if($rid==1)
		{
		echo  "
<form action='pas3.php?id=1' method='post' id='quizForm' id='1'>


	<ul>
    
   
    	<li>
        <h3>What is the name for the fear of spiders ?</h3>
        
        <div>
        <input type='radio' name='answerOne' id='answerOne' value='A' />
        <label for='answerOneA'>A)  Arachnophobia</label>
        </div>
        
        <div>
        <input type='radio' name='answerOne' id='answerOne' value='B' />
        <label for='answerOneB'>B) Autophobia</label>
        </div>
        
        <div>
        <input type='radio' name='answerOne' id='answerOne' value='C' />
        <label for='answerOneC'>C)Cathisophobia</label>
        </div>
        </li>
        
     
        <li>
        <h3>What is the most common phobia?</h3>
        
        <div>
        <input type='radio' name='answerTwo' id='answerTwo' value='A' />
        <label for='answerTwoA'>A) Agoraphobia </label>
        </div>
        
        <div>
        <input type='radio' name='answerTwo' id='answerTwo' value='B' />
        <label for='answerTwoB'>B) Cynophobia</label>
        </div>
        
        <div>
        <input type='radio' name='answerTwo' id='answerTwo' value='C' />
        <label for='answerTwoC'>C) Arachnophobia</label>
        </div>
        </li>
        
      
        
         <li>
        <h3>What is glossophobia?</h3>
        
        <div>
        <input type='radio' name='answerThree' id='answerThree' value='A' />
        <label for='answerThreeA'>A)The fear of heights </label>
        </div>
        
        <div>
        <input type='radio' name='answerThree' id='answerThree' value='B' />
        <label for='answerThreeB'>B) The fear of snakes</label>
        </div>
        
        <div>
        <input type='radio' name='answerThree' id='answerThree' value='C' />
        <label for='answerThreeC'>C) the fear of speaking in public</label>
        </div>
        </li>
		
		<li>
		<h3>What is Eisoptrophobia?</h3>
        
        <div>
        <input type='radio' name='answerFour' id='answerThree' value='A' />
        <label for='answerFourA'>A)The fear of mirrors </label>
        </div>
        
        <div>
        <input type='radio' name='answerFour' id='answerThree' value='B' />
        <label for='answerFourB'>B) The fear of glass</label>
        </div>
        
        <div>
        <input type='radio' name='answerFour' id='answerThree' value='C' />
        <label for='answerFourC'>C) the fear of cats</label>
        </div>
        </li>
    </ul>
     <input type='submit' value='Continue' />
    
</form>";

		}
		else
		{echo "<form action='pas3.php?id=3' method='post' id='quizForm' id='3'>


	<ul>
    
   
    	<li>
        <h3>What is Necrophobia ?</h3>
        
        <div>
        <input type='radio' name='answerOne' id='answerOne' value='A' />
        <label for='answerOneA'>A)Fear of dogs</label>
        </div>
        
        <div>
        <input type='radio' name='answerOne' id='answerOne' value='B' />
        <label for='answerOneB'>B) Fear of death</label>
        </div>
        
        <div>
        <input type='radio' name='answerOne' id='answerOne' value='C' />
        <label for='answerOneC'>C) Fear of water</label>
        </div>
        </li>
        
     
        <li>
        <h3>Arachnophobia  is most common among </h3>
        
        <div>
        <input type='radio' name='answerTwo' id='answerTwo' value='A' />
        <label for='answerTwoA'>A)Men </label>
        </div>
        
        <div>
        <input type='radio' name='answerTwo' id='answerTwo' value='B' />
        <label for='answerTwoB'>B) Women</label>
        </div>
        
        <div>
        <input type='radio' name='answerTwo' id='answerTwo' value='C' />
        <label for='answerTwoC'>C) It affects both genders equally</label>
        </div>
        </li>
        
      
        
         <li>
        <h3>Ophidiophobia is attributed to:</h3>
        
        <div>
        <input type='radio' name='answerThree' id='answerThree' value='A' />
        <label for='answerThreeA'>A)evolutionary causes </label>
        </div>
        
        <div>
        <input type='radio' name='answerThree' id='answerThree' value='B' />
        <label for='answerThreeB'>B)Personal experiences</label>
        </div>
        
        <div>
        <input type='radio' name='answerThree' id='answerThree' value='C' />
        <label for='answerThreeC'>C)Both.</label>
        </div>
        </li>
		 <li>
			<h3>What is cathisophobia?</h3>
			
				<div>
				<input type='radio' name='answerFour' id='answerThree' value='A' />
				<label for='answerFourA'>A)The fear of cats </label>
				</div>
				
				<div>
				<input type='radio' name='answerFour' id='answerThree' value='B' />
				<label for='answerFourB'>B) The fear of the coins</label>
				</div>
				
				<div>
				<input type='radio' name='answerFour' id='answerThree' value='C' />
				<label for='answerFourC'>C) The fear of sitting</label>
				</div>
			</li>
    </ul>
     <input type='submit' value='Continue' />
    
</form>";}
	}
	
	if($fid==3)
	{$rid = rand(1,2);
			if ($answer1 == "B"){$_SESSION['score'] = $_SESSION['score']+'1';}
			if ($answer2 == "B"){$_SESSION['score'] = $_SESSION['score']+'1';}
			if ($answer3 == "C"){$_SESSION['score'] = $_SESSION['score']+'1';}
			if ($answer4 == "C"){$_SESSION['score'] = $_SESSION['score']+'1';}
	if($rid==1)
		{
		echo  "
<form action='pas3.php?id=1' method='post' id='quizForm' id='1'>


	<ul>
    
   
    	<li>
        <h3>What is the name for the fear of spiders ?</h3>
        
        <div>
        <input type='radio' name='answerOne' id='answerOne' value='A' />
        <label for='answerOneA'>A)  Arachnophobia</label>
        </div>
        
        <div>
        <input type='radio' name='answerOne' id='answerOne' value='B' />
        <label for='answerOneB'>B) Autophobia</label>
        </div>
        
        <div>
        <input type='radio' name='answerOne' id='answerOne' value='C' />
        <label for='answerOneC'>C)Cathisophobia</label>
        </div>
        </li>
        
     
        <li>
        <h3>What is the most common phobia?</h3>
        
        <div>
        <input type='radio' name='answerTwo' id='answerTwo' value='A' />
        <label for='answerTwoA'>A) Agoraphobia </label>
        </div>
        
        <div>
        <input type='radio' name='answerTwo' id='answerTwo' value='B' />
        <label for='answerTwoB'>B) Cynophobia</label>
        </div>
        
        <div>
        <input type='radio' name='answerTwo' id='answerTwo' value='C' />
        <label for='answerTwoC'>C) Arachnophobia</label>
        </div>
        </li>
        
      
        
         <li>
        <h3>What is glossophobia?</h3>
        
        <div>
        <input type='radio' name='answerThree' id='answerThree' value='A' />
        <label for='answerThreeA'>A)The fear of heights </label>
        </div>
        
        <div>
        <input type='radio' name='answerThree' id='answerThree' value='B' />
        <label for='answerThreeB'>B) The fear of snakes</label>
        </div>
        
        <div>
        <input type='radio' name='answerThree' id='answerThree' value='C' />
        <label for='answerThreeC'>C) the fear of speaking in public</label>
        </div>
        </li>
		
		<li>
		<h3>What is Eisoptrophobia?</h3>
        
        <div>
        <input type='radio' name='answerFour' id='answerThree' value='A' />
        <label for='answerFourA'>A)The fear of mirrors </label>
        </div>
        
        <div>
        <input type='radio' name='answerFour' id='answerThree' value='B' />
        <label for='answerFourB'>B) The fear of glass</label>
        </div>
        
        <div>
        <input type='radio' name='answerFour' id='answerThree' value='C' />
        <label for='answerFourC'>C) the fear of cats</label>
        </div>
        </li>
    </ul>
     <input type='submit' value='Continue' />
    
</form>";

		}
		else
		{	echo "


<form action='pas3.php?id=2' method='post' id='quizForm' id='2'>


	<ul>
    
    
				<li>
				<h3>What is a phobia?</h3>
				
					<div>
					<input type='radio' name='answerOne' id='answerOne' value='A' />
					<label for='answerOneA'>A)A rational fear of or aversion to something</label>
					</div>
					
					<div>
					<input type='radio' name='answerOne' id='answerOne' value='B' />
					<label for='answerOneB'>B) An extreme or irrational fear of or aversion to something</label>
					</div>
					
					<div>
					<input type='radio' name='answerOne' id='answerOne' value='C' />
					<label for='answerOneC'>C) An illness </label>
					</div>
				</li>
				
			   
				<li>
				<h3>Who was the first to write about phobias?</h3>
				
					<div>
					<input type='radio' name='answerTwo' id='answerTwo' value='A' />
					<label for='answerTwoA'>A)Plutarch </label>
					</div>
					
					<div>
					<input type='radio' name='answerTwo' id='answerTwo' value='B' />
					<label for='answerTwoB'>B)Pythagoras</label>
					</div>
					
					<div>
					<input type='radio' name='answerTwo' id='answerTwo' value='C' />
					<label for='answerTwoC'>C) Aristotle</label>
					</div>
				</li>
				
			   
				 <li>
				<h3>What is Mysophobia?</h3>
					
					<div>
					<input type='radio' name='answerThree' id='answerThree' value='A' />
					<label for='answerThreeA'>A)The fear of heights </label>
					</div>
					
					<div>
					<input type='radio' name='answerThree' id='answerThree' value='B' />
					<label for='answerThreeB'>B)The fear of germs and dirt</label>
					</div>
					
					<div>
					<input type='radio' name='answerThree' id='answerThree' value='C' />
					<label for='answerThreeC'>C)The fear of water </label>
					</div>
				</li>
							   
				 <li>
				<h3>What is Porphyrophobia?</h3>
				
					<div>
					<input type='radio' name='answerFour' id='answerThree' value='A' />
					<label for='answerFourA'>A)The fear of clowns </label>
					</div>
					
					<div>
					<input type='radio' name='answerFour' id='answerThree' value='B' />
					<label for='answerFourB'>B) The fear of the color purple</label>
					</div>
					
					<div>
					<input type='radio' name='answerFour' id='answerThree' value='C' />
					<label for='answerFourC'>C) the fear of doctors</label>
					</div>
				</li>

    </ul>
     <input type='submit' value='Continue' />
    
</form>
";}
	}
	

	?>
</div><!--- end of wrapper div --->
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
