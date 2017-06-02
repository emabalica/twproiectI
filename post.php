<?php


if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Username or Password is invalid";
}

// Define $username and $password

$type=$_POST['art_type'];
$date=$_POST['date'];
$img="photos/";
$img.=$_POST['img'];
$preview=$_POST['preview'];
$article=$_POST['article'];
$title=$_POST['title'];


// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$conn = oci_connect("system","STUDENT","localhost/orcl");
if (!$conn) {
   $m = oci_error();
   echo $m['message'], "\n";
   exit;
}



$query=oci_parse($conn,'BEGIN nr_art(:nr); END;');
	   oci_bind_by_name($query,':nr',$nr);
	   oci_execute($query);


$site="http://localhost/site/article";
$site.=$nr;
$site.=".php";

$reads=0;

if(strcmp($type,'Article')==0){
	
	$stmt=oci_parse($conn,'insert into myarticles values(:1,:2,:3,:4,:5,:6,:7)');

oci_bind_by_name($stmt,':1',$nr);
oci_bind_by_name($stmt,':2',$title);
oci_bind_by_name($stmt,':3',$img);
oci_bind_by_name($stmt,':4',$site);
oci_bind_by_name($stmt,':5',$date);
oci_bind_by_name($stmt,':6',$reads);
oci_bind_by_name($stmt,':7',$preview);

oci_execute($stmt);

}

$mama=nl2br(htmlspecialchars($article));

ob_start();
?>

<?php //dbcon.php
SESSION_START();
$conn = oci_connect("system","STUDENT","localhost/orcl");
if (!$conn) {
   $m = oci_error();
   echo $m['message'], "\n";
   exit;
}

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
<link rel="stylesheet" href="css/form.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
  <a onclick="document.getElementById('form').style.display='block';close_menu()" onclick="close_menu()" class=" item button">LOGIN/SINGUP</a>
</nav>


<!--LOGIN/SINGUP FORM-->
<div id="form" class="form">
    <div class="form-content" style="max-width:600px">

      <div style="text-align:center!important"><br>
        <span onclick="document.getElementById('form').style.display='none'" class="button" style="position:absolute;right:0;top:0;color:red!important;background-color:white!important;font-size:24px!important;">&times;</span>
        <img src="photos/login.png" style="width:40%;border-radius:50%;margin-top:16px!important;">
      </div>

      <form style="padding:0.01em 16px" action="login.php">
        <div style="margin-top:16px!important;margin-bottom:16px!important">
          <label><b>Username</b></label>
          <input class="text" type="text" placeholder=" Username" name="usrname" required>
          <label><b>Password</b></label>
          <input class="text" type="password" placeholder="Password" name="password" required>
		  
          <button class="button decorate " type="submit">Login</button>
		  <button onclick="register.php" type="button" class="button decorate ">Register</button>
		</div>
      </form>


    </div>
  </div>
</div>

 <div id="quizpart1" class="form">
    <div class="form-content" style="max-width:600px">

      <div style="text-align:center!important"><br>
        <span onclick="document.getElementById('quizpart1').style.display='none'" class="button" style="position:absolute;right:0;top:0;color:red!important;background-color:white!important;font-size:24px!important;">&times;</span>
        <img src="photos/age.png" style="width:40%;">
      </div>

      <form style="padding:0.01em 16px" action="quizpart2.php">
        <div style="margin-top:16px!important;margin-bottom:16px!important">
          <p > 1.What is your age?
<br />
<fieldset id="group1"style="border-radius: 5px; background-color:#bbff99;  ">
<input type="radio" name="group1" value="teen" /> <label> Under 18 Years Old </label> </input></br>
<input type="radio" name="group1" value="adult" /> <label> 18 to 24 Years Old</label> </input></br>
<input type="radio" name="group1" value="mature" /> <label> 25 to 30 Years Old</label> </input></br>
<input type="radio" name="group1" value="mature40" /> <label> 31 to 40 Years Old</label> </input></br>
<input type="radio" name="group1" value="mature50" /> <label><label> 41 to 50 Years Old</label> </input></br>
<input type="radio" name="group1" value="old60" /> <label><label><label> 51 to 60 Years Old</label> </input></br>
<input type="radio" name="group1" value="old" /> <label> Over 60 Years Old </label> </input>
</fieldset >
</p>
<button class="button decorate " type="submit">Next</button>
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


<div class="_articol color" style="padding:20px 16px; margin-top:50px">
  <div class="row_padding" >
    <div class="continut_articol" >  
	
	<?php
      print "<h3>".$title."</h3>
	  <p class='opacitate'>".$date."</p>
	  
	  <p>".nl2br(htmlspecialchars(substr($article,0,434)))."</p>
	  
	
					
    </div>
    <div class='continut_articol' style='margin-top:80px;'>
      <img class='image ' src='photos/".$img."' alt='Buildings' width='700' height='394'>
    </div>
	<div style='float:left ;padding-right:25px;'>.
	
	<p>".nl2br(htmlspecialchars(substr($article,434,strlen($article))))."</p>";
	?>

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
</script>


</body>
</html>



<?php
$save="C:/xampp/htdocs/site/article";
$save.=$nr;
$save.=".php";
file_put_contents($save,ob_get_contents());
?>

