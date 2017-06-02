<?php //dbcon.php
SESSION_START();
$conn = oci_connect("system","STUDENT","localhost/orcl");
if (!$conn) {
   $m = oci_error();
   echo $m['message'], "\n";
   exit;
}


 $_SESSION['alegere8']=$_POST['group8'];
 

 if($_SESSION['alegere3']='scream')
	 $spider=20;
 if($_SESSION['alegere3']='shiver')
	 $spider=15;
 if($_SESSION['alegere3']='indifferent')
	  $noFear=1;


 
 
 if($_SESSION['alegere4']='jittery')
	 $heights=20;
 if($_SESSION['alegere4']='fear')
	 $heights=15;
 if($_SESSION['alegere4']='joy')
	  $noFear=$noFear+1;
  if($_SESSION['alegere4']='excited')
	  $noFear=$noFear+1;

 
 
  
 if($_SESSION['alegere5']='snuggle')
	 $dark=15;
 if($_SESSION['alegere5']='scream')
	 $dark=20;
 if($_SESSION['alegere5']='noLight')
	  $noFear=$noFear+1;
  if($_SESSION['alegere5']='indif')
	  $noFear=$noFear+1;

  
 if($_SESSION['alegere6']='lanterns')
	 $dark=$dark+10;
 if($_SESSION['alegere6']='spray')
	 $spider=$spider+10;
 if($_SESSION['alegere6']='height')
	 $heights=$heights+10;
 if($_SESSION['alegere6']='enjoy')
	  $noFear=$noFear+1;

 
 
  
 if($_SESSION['alegere7']='leave')
	 $spider=$spider+10;
  if($_SESSION['alegere7']='noFear')
	  $noFear=$noFear+1;
  if($_SESSION['alegere7']='no')
	  $noFear=$noFear+1;

 
  
 if($_SESSION['alegere8']='swim')
	 $snake=10;
 if($_SESSION['alegere8']='photo')
	  $noFear=$noFear+1;
  if($_SESSION['alegere8']='race')
	  $noFear=$noFear+1;
 
	if($noFear!=6)
		$noFear=0;
	else
		$noFear=100;
	
?>

<!DOCTYPE html>
<html>
<title>Phobia-Free</title>
<meta charset="UTF-8">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/styleScrollImag.css">
<link rel="stylesheet" href="css/footer.css">
<link rel="stylesheet" href="css/toparticles.css">
<link rel="stylesheet" href="css/articole_layout.css">
<link rel="stylesheet" href="css/footer.css">
<link rel="stylesheet" href="css/form_no_click.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
#myProgress {
  width: 100%;
  background-color: #ddd;
}

#myBar,#myBar2,#myBar3,#myBar4 {
  width: 1%;
  height: 30px;
  background-color: green ;
  text-align: center;
  line-height: 30px;
  color: white;
  margin-bottom:30px;
}



</style>

<body>


<div class="nav">
  <div class="box" > 
    <img src="photos/FREE-PHOBIA.png" style="width:200px; padding-left:20px;">
	
    <div class="right menu-large">
      <a href="http://localhost/site/home.php" class=" item button "><i class="icon home_icon" ></i>ABOUT</a>
      <a href="http://localhost/site/articles.php" class=" item button"><i class="icon art_icon"></i>ARTICLES</a>
      <a href="http://localhost/site/phobias.php" class=" item button"><i class="icon art_icon"></i> PHOBIAS</a>
      <a onclick="document.getElementById('quizpart1').style.display='block'" class=" item button"><i class="icon  quiz_icon"></i> PHOBIA QUIZ</a>
      <a onclick="document.getElementById('form').style.display='block'" class=" item button"><i class="icon user_icon"></i> LOGIN/SINGUP</a>
    </div>
	
    <a href="#" class="item button right hide-menu" onclick="open_menu()">
      <i class="icon menu_icon"></i>
    </a>
  </div>
</div>

<nav class="small_menu bar-block black box animation hide-menu" style="display:none" id="menu">
  <a href=""        onclick="close_menu()" class=" item button ">×</a>
  <a href="http://localhost/site/home.php"   onclick="close_menu()" class=" item button">ABOUT</a>
  <a href="http://localhost/site/articles.php" onclick="close_menu()" class=" item button">ARTICLES</a>
  <a href="http://localhost/site/phobias.php" onclick="close_menu()" class=" item button">PHOBIAS</a>
  <a onclick="document.getElementById('quizpart1').style.display='block';close_menu()" class=" item button">PHOBIA QUIZ</a>
  <a  class=" item button">LOGIN/SINGUP</a>
</nav>



 <div id="quizpart1" class="form">
    <div class="form-content" style="max-width:600px">

      <div style="text-align:center!important"><br>
        <span onclick="redirect_home()" class="button" style="position:absolute;right:0;top:0;color:red!important;background-color:white!important;font-size:24px!important;">&times;</span>
      </div>

      <form style="padding:0.01em 16px" action="quizpart8.php" method='post'>
        <div style="margin-top:16px!important;margin-bottom:16px!important">
       
	   
	   <h2>What Phobia Do You Have?</h2>
		
		<h3>Your Result: Achluophobia- Fear of darkness.</h3>
	   <div id='myProgress'>
       <div id='myBar'>0%</div>
       </div>
	   <p>
	   The Unknown and the Dark is what surrounds you at night.
	   Do you find yourself closing doors around you, or avoiding hallways that are deep in the shadows?
	   Maybe you don't go into deep waters for fear of what's below? Maybe you don't go into fields of corn and grain,
	   because there just might be something lurking inside. 
	   </p>
<h3>Arachnophobia</h3>  
<div id='myProgress'>
  <div id='myBar2'>0%</div>
</div>
<p>Spiders or Things that Crawl is what you fear the most. Snakes and Spiders make you scream, 
and you cannot escape their whim. Don't sleep with your mouth open for your eight legged friends might find 
their way inside, or so I've heard.So be careful my friend, or your fear might swallow you alive...</p>

<h3>Acrophobia</h3>  
<div id='myProgress'>
  <div id='myBar3'>0%</div>
</div>
<p>
You are terrified of heights! Emotionally and physically, the response to acrophobia is similar to 
the response to any other phobia. You may begin to shake, sweat, experience heart palpitations and 
even cry or yell out. You may feel terrified and paralyzed. It might become difficult to think.
You are a very grounded person, you like to be in control of your whereabouts and keep your feet on solid ground,
 but maybe the only way to overcome your fears is to climb that mountain and reach for the top!
</p>

<h3>Phobialess</h3>  
<div id='myProgress'>
  <div id='myBar4'>0%</div>
</div>


    </form>


    </div>
  </div>
</div>

<div class="recent_art content">

<?php

$query='select * from ( select * from myarticles order by months_between(sysdate,date_art)/12) where rownum <= 4 ';
$results = oci_parse($conn, $query);
(oci_execute($results)); 
	
while($row1 = oci_fetch_array($results, OCI_RETURN_NULLS+OCI_ASSOC)){

print "<div class='content mySlides'>
		<img class='change' src='".$row1['IMG_PATH']."' style='width:100%'>
        <div class='title'>".$row1['TITLE_ART']."
		</div></div>";
}
?>

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
  <img src="photos/bestarticles.png" style="width:30%;padding-left:35%;">
  <div class="container " style="margin-top:64px">  
  
  <?php

$query='select * from ( select * from myarticles order by nr_reads) where rownum <= 4 ';
$results = oci_parse($conn, $query);
(oci_execute($results)); 
	
while($row1 = oci_fetch_array($results, OCI_RETURN_NULLS+OCI_ASSOC)){
	 
	print "<div class='individual_art '>
      <div class='bottomarticol'>
        <img src='".$row1['IMG_PATH']."' style='width:100%' class='change2'>
        <div class='bestart'>
          <a href='".$row1['ART_PATH']."' style='color:#b3ff66'><h3>".$row1['TITLE_ART']."</h3></a>
          <p class='opacitate'>".$row1['DATE_ART']."</p>
          <p>".$row1['RESUME_ART']."</p>
          <p><button class='likebutton '><i class='icon like'></i>Like</button></p>
        </div>
      </div>
</div>";}
    ?>
  </div>
</div>


<div class="_articol color" style="padding:20px 16px">
  <div class="row_padding" >
    <div class="continut_articol" >  
	
      <h3>What Is Anxiety?</h3>
	  

      <p><b><i>"But do not distress yourself with imaginings. Many fears are born of fatigue and loneliness.
					Beyond a wholesome discipline, be gentle with yourself." </i>Max Ehrmann</b></p>
		<p >You can better understand the nature of anxiety by looking at both what it is and what it is not. 
		For example, anxiety can be distinguished from fear in several ways. When you are afraid, your fear 
		is usually directed toward some concrete external object or situation. The event that you fear usually 
		is within the bounds of possibility. You might fear not meeting a deadline, failing an exam, 
		being unable to pay your bills, or being rejected by someone you want to please. When you experience 
		anxiety, on the other hand, you often can't specify what it is you're anxious about. </p>
					
    </div>
    <div class="continut_articol" style="margin-top:80px;">
      <img class="image " src="photos/relax.gif" alt="Buildings" width="700" height="394">
    </div>
	<div style="float:left ;padding-right:25px;">
	
									
	<p>The focus of anxiety 
		is more internal than external. It seems to be a response to a vague, distant, or even unrecognized danger. 
		You might be anxious about "losing control" of yourself or some situation. Or you might feel a vague anxiety 
		about "something bad happening".Anxiety affects your whole being. It is a physiological, behavioral, and psychological reaction all at once. On a physiological level, anxiety may include bodily reactions such as rapid heartbeat, muscle tension, queasiness, dry mouth, or sweating. On a behavioral level, it can sabotage your ability to act, express yourself, or deal with certain everyday situations.</p>
	<p >Anxiety can appear in different forms and at different levels of intensity. It can range in
	severity from a mere twinge of uneasiness to a full-blown panic attack marked by heart palpitations,
	disorientation, and terror. Anxiety that is not connected with any particular situation, that
	comes "out of the blue", is called free-floating anxiety or, in more severe instances, a spontaneous
	panic attack. The difference between an episode of free-floating anxiety and a spontaneous panic
	attack can be defined by whether you experience four or more of the following symptoms at the
	same time (the occurrence of four or more symptoms defines a panic attack):</p>
	<ul>
	<li>Shortness of breath</li>
	<li>Heart palpitations</li>
	<li>Trembling or shaking</li>
	<li>Sweating</li>
	<li>Numbness</li>
	<li>Dizziness </li>
	</ul>
	<p>If your anxiety arises only in response to a specific situation, it is called situational anxiety
	or phobic anxiety. Situational anxiety is different from everyday fear in that it tends to be out
	of proportion or unrealistic. If you have a disproportionate apprehension about driving on
	freeways, going to the doctor, or confronting your spouse, this may qualify as situational
	anxiety. Situational anxiety becomes phobic when you actually start to avoid the situation: if
	you give up driving on freeways, going to doctors, or confronting your spouse altogether. In
	other words, phobic anxiety is situational anxiety that includes persistent avoidance of the
	situation.</p>
	<p>There is an important difference between spontaneous anxiety (or panic) and anticipatory
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
        menu.style.display = 'none';
    } else {
        menu.style.display = 'block';
    }
}

function close_menu() { 
    menu.style.display = "none";
}

function redirect_home(){
	window.location.href="http://localhost/site/home.php";
}

var index = 1;
change_pic(index);

function next(n) {
  change_pic(index += n);
}

function change_pic(n) {
  var i;
  var x = document.getElementsByClassName("mySlides"); 
  if (n > x.length) {index = 1}    
  if (n < 1) {index = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[index-1].style.display = "block";  
  
}


document.body.onload=function () {
  var elem  = document.getElementById("myBar");  
  var elem2 = document.getElementById("myBar2");  
  var elem3  = document.getElementById("myBar3");  
  var elem4 = document.getElementById("myBar4"); 
  var width = 0;
  var width2 = 0;
  var width3 = 0;
  var width4 = 0;

  var id  = setInterval(frame, 50);
  var id2 = setInterval(frame, 50);
  var id3  = setInterval(frame, 50);
  var id4 = setInterval(frame, 50);
  function frame() {
   var value=<?php echo $dark; ?>;
   if (width >= value) {
      clearInterval(id);
    } else{
      width++; 
      elem.style.width = width+ '%'; 
      elem.innerHTML = width * 1  + '%';
    }
	
var value2=<?php echo $spider; ?>;
if (width2 >= value2) {
clearInterval(id2);
    } else{
      width2++; 
      elem2.style.width = width + '%'; 
      elem2.innerHTML = width * 1  + '%';
    }		

var value3=<?php echo $heights; ?>;
if (width3 >= value3) {
clearInterval(id3);
    } else{
      width3++; 
      elem3.style.width = width + '%'; 
      elem3.innerHTML = width * 1  + '%';
    }		

var value4=<?php echo $noFear; ?>;
if (width4 >= value4) {
clearInterval(id4);
    } else{
      width4++; 
      elem4.style.width = width + '%'; 
      elem4.innerHTML = width * 1  + '%';
    }		
}

}
 


 
</script>

<?php

unset($_SESSION['alegere1']);
unset($_SESSION['alegere2']);
unset($_SESSION['alegere3']);
unset($_SESSION['alegere4']);
unset($_SESSION['alegere5']);
unset($_SESSION['alegere6']);
unset($_SESSION['alegere7']);
unset($_SESSION['alegere8']);
unset($dark);
unset($heights);
unset($spider);
unset($noFear);

  
?>

</body>
</html>
