<?php include '../phpDocs/dbcon.php'?>

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
	<link rel="stylesheet" href="../css/form_no_click.css">
	<link rel="stylesheet" href="../css/phobia_groups.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>




<div class="nav">
  <div class="box" > 
    <img src="../photos/FREE-PHOBIA.png" style="width:200px; padding-left:20px;">
	
		<div class="right menu-large">
		<a href="http://localhost/siteFinal/home.php" class=" item button "><i class="icon home_icon" ></i>ABOUT</a>
		<a href="http://localhost/siteFinal/articles.php" class=" item button"><i class="icon art_icon"></i>ARTICLES</a>
		<a href="http://localhost/siteFinal/phobias.php" class=" item button"><i class="icon art_icon"></i> PHOBIAS</a>
	  
		<?php include '../phpDocs/userOption.php'?>
		  
		</div>
	
		<a href="#" class="item button right hide-menu" onclick="open_menu()">
		<i class="icon menu_icon"></i> </a>
  </div>
</div>

<nav class="small_menu bar-block black box animation hide-menu" style="display:none" id="menu">
  <a href="" onclick="close_menu()" class=" item button ">×</a>
  <a href="http://localhost/siteFinal/home.php"   onclick="close_menu()" class=" item button">ABOUT</a>
  <a href="http://localhost/siteFinal/articles.php" onclick="close_menu()" class=" item button">ARTICLES</a>
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
				<a href='http://localhost/siteFinal/logout.php' onclick=\'close_menu()\' class='item button'>LOGOUT</a>";}

  if(strcmp($role,'admin')==0){
		print"	<a onclick=\'document.getElementById('delete').style.display='block';\' onclick=\'close_menu()\' class='item button'>DELETE POST</a>
				<a onclick=\'document.getElementById('post').style.display='block';\' onclick=\'close_menu()\' class='item button'>ADD POST</a>";}
   }
   
  else{
	    print" <a onclick=\'document.getElementById('quizpart1').style.display='block';' onclick=\'close_menu()\' class='item button'>PHOBIA QUIZ</a>
               <a onclick=\'document.getElementById('form').style.display='block';' onclick=\'close_menu()\' class='item button'>LOGIN/LOGOUT</a>";}

?>
 
 </nav>






 <!--QUIZ PART 1-->
<div id="challenge" class="form" style="padding-top:10px">
    <div class="form-content" style="max-width:600px">

      <div style="text-align:center!important">
        <span onclick="location.href = 'http://localhost/siteFinal/spiderFear/FearSpiderStart.php'" class="button" style="position:absolute;right:0;top:0;color:red!important;background-color:white!important;font-size:24px!important;">&times;</span>
        <img src="../photos/congrat.gif" style="width:70%;">
      </div>

      <form style="padding:0.01em 16px" action='FearSpiderStart.php' method='post'>
        <div style="margin-top:16px!important;margin-bottom:16px!important">
		<fieldset class="group1"style="border-radius: 5px; background-color: #b3ff66; padding-bottom:4px;  ">
         <p> Congratulations!</br>
			 You completed this challenge.You're one step closer to overcome your fear.</br>One more thing: 
			 Don’t be ashamed about your fear. Many adults have admitted to being afraid of the spider.Everyone has one fear or another, and you should be proud of yourself 
			 for being honest and open about yours. 
			 Feel proud of yourself for admitting that you have a fear and that you want to take steps to tackle it.
		</fieldset >
		</p>
		<button class="button decorate " type="submit">Finish</button>
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

<!-- Most read art -->
<div class="bestart" style="padding:40px 16px" >
	<img src="../photos/bestarticles.png" style="width:30%;padding-left:35%;">
		<div class="container " style="margin-top:64px">  
			<?php include '../phpDocs/mostReadArticles.php' ?>
		</div>
</div>


<!--Phobia groups!-->

	<?php include '../phpDocs/phobiGroups.php'?>
  

	<div class="bestart" style="padding:40px 16px" >
		<img src="../photos/spiderFearpresentation.png" style="width:30%;padding-left:35%;">
		<button onclick="document.getElementById('challenge').style.display='block'" onclick=\"close_menu()\" class=' item button '> PHOBIA QUIZ</button>
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


	function crossElem(){
	document.addEventListener('change', function(e) {
			 
      updateItem();
    });
}



 function updateItem()
  {

    if (document.getElementById("step1").checked)
    {
		 
		
      document.getElementById("1").style.textDecoration="line-through";
	  createCookie('unu','1',10);
	   
    }
	
	if (document.getElementById("step2").checked)
    {
		
      document.getElementById("2").style.textDecoration="line-through";
	  createCookie('doi','2',10);
    }
	
	if (document.getElementById("step3").checked)
    {
		
      document.getElementById("3").style.textDecoration="line-through";
	  createCookie('trei','2',10);
    }
	
	if (document.getElementById("step4").checked)
    {
		
      document.getElementById("4").style.textDecoration="line-through";
	  createCookie('patru','2',10);
    }
	
	
  }
  function createCookie(name,value,days) {
    var expires = "";
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days*24*60*60*1000));
        expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + value + expires + "; path=/";
}

	function readCookie(name) {
		var nameEQ = name + "=";
		var ca = document.cookie.split(';');
		for(var i=0;i < ca.length;i++) {
			var c = ca[i];
			while (c.charAt(0)==' ') c = c.substring(1,c.length);
				if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length); }
    return null;
}
  
	var x = readCookie('unu')
	if(x) {
		document.getElementById("1").style.textDecoration="line-through";
		//createCookie('first','1',-3600);
		document.getElementById("step1").style.visibility="hidden";
		}
 
	var x = readCookie('doi')
	if(x) {
		document.getElementById("2").style.textDecoration="line-through";
		//createCookie('second','1',-3600);
		document.getElementById("step2").style.visibility="hidden";
		}

	var x = readCookie('trei')
	if(x) {
		document.getElementById("3").style.textDecoration="line-through";
		// createCookie('third','1',-3600);
		document.getElementById("step3").style.visibility="hidden";
		}

	var x = readCookie('patru')
	if(x) {
		document.getElementById("4").style.textDecoration="line-through";
		//  createCookie('forth','1',-3600);
		document.getElementById("step4").style.visibility="hidden";
		}
	

	</script>


</body>
</html>


