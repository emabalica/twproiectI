 
  <?php 
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
<link rel="stylesheet" href="css/form_no_click.css">
<link rel="stylesheet" href="phobia_groups.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<body>




<div class="nav">
  <div class="box" > 
    <img src="photos/FREE-PHOBIA.png" style="width:200px; padding-left:20px;">
	
    <div class="right menu-large">
      <a href="http://localhost/site/home.php" class=" item button "><i class="icon home_icon" ></i>ABOUT</a>
      <a href="http://localhost/site/articles.php" class=" item button"><i class="icon art_icon"></i>ARTICLES</a>
      <a href="http://localhost/site/phobias.php" class=" item button"><i class="icon art_icon"></i> PHOBIAS</a>
	  
	  <?php
	  if(isset($_SESSION['login_user'])){
		 $id=(int)$_SESSION['login_user'];

		  $query=oci_parse($conn,'select * from userstw where user_id=:id');
		  oci_bind_by_name($query,':id',$id);
	      oci_execute($query);
		  $row1 = oci_fetch_array($query);
		  $role=$row1['ROLE'];

		  
		  
		  if(strcmp($role,"user")==0){
	  print "<a onclick=\"document.getElementById('quizpart1').style.display='block'\" class=' item button'><i class='icon quiz_icon'></i> PHOBIA QUIZ</a>";
      print "<a href='http://localhost/site/account.php' class=' item button '><i class='icon user_icon' ></i>ACCOUNT</a>";
	  print "<a href='http://localhost/site/logout.php' class=' item button '><i class='icon user_icon' ></i>LOGOUT</a>";
		  }
		  if(strcmp($role,"admin")==0){
		  print"
		  <a onclick=\"document.getElementById('delete').style.display='block'\" class=' item button'><i class='icon  quiz_icon'></i> DELETE POST</a>
          <a onclick=\"document.getElementById('post').style.display='block'\" class=' item button'><i class='icon user_icon'></i>ADD POST</a>";
		  }
	  }
	ELSE
	
	  PRINT "<a onclick=\"document.getElementById('quizpart1').style.display='block'\" class=' item button'><i class='icon quiz_icon'></i> PHOBIA QUIZ</a>
      <a onclick=\"document.getElementById('form').style.display='block'\" class=' item button'><i class='icon user_icon'></i> LOGIN/SINGUP</a>'";
	  ?>
		  
	</div>
	
    <a href="#" class="item button right hide-menu" onclick="open_menu()">
      <i class="icon menu_icon"></i>
    </a>
  </div>
</div>

<nav class="small_menu bar-block black box animation hide-menu" style="display:none" id="menu">
  <a href="" onclick="close_menu()" class=" item button ">×</a>
  <a href="http://localhost/site/home.php"   onclick="close_menu()" class=" item button">ABOUT</a>
  <a href="http://localhost/site/articles.php" onclick="close_menu()" class=" item button">ARTICLES</a>
  <a href="http://localhost/site/phobias.php" onclick="close_menu()" class=" item button">PHOBIAS</a>
  
  <?php
   if(isset($_SESSION['login_user'])){
		 $id=(int)$_SESSION['login_user'];

		  $query=oci_parse($conn,'select * from userstw where user_id=:id');
		  oci_bind_by_name($query,':id',$id);
	      oci_execute($query);
		  $row1 = oci_fetch_array($query);
		  $role=$row1['ROLE'];
  if(strcmp($role,"user")==0){
  print" <a onclick=\"document.getElementById('quizpart1').style.display='block';close_menu()\" onclick=\"close_menu()\" class=' item button'>PHOBIA QUIZ</a>
  <a href='http://localhost/site/account.php' onclick=\"close_menu()\" class='item button'>ACCOUNT</a>
  <a href='http://localhost/site/logout.php' onclick=\"close_menu()\" class='item button'>LOGOUT</a>";
  }

  if(strcmp($role,"admin")==0){
 print " <a onclick=\"document.getElementById('delete').style.display='block';close_menu()\" onclick=\"close_menu()\" class=' item button'>DELETE POST</a>
  <a onclick=\"document.getElementById('post').style.display='block';close_menu()\" onclick=\"close_menu()\" class=' item button'>ADD POST</a>";}
   }
  else{
	    print" <a onclick=\"document.getElementById('quizpart1').style.display='block';close_menu()\" onclick=\"close_menu()\" class=' item button'>PHOBIA QUIZ</a>
               <a onclick=\"document.getElementById('form').style.display='block';close_menu()\" onclick=\"close_menu()\" class=' item button'>LOGIN/LOGOUT</a>";}
		

  
  ?>
  </nav>


<!--challenge FORM-->
<div id="challenge" class="form" style="padding-top:10px">
    <div class="form-content" style="max-width:600px">

      <div style="text-align:center!important">
        <span onclick="location.href = 'http://localhost/siteFinal/darkFear/unsetvar.php'" class="button" style="position:absolute;right:0;top:0;color:red!important;background-color:white!important;font-size:24px!important;">&times;</span>
        <img src="../photos/congrat.gif" style="width:70%;">
      </div>

      <form style="padding:0.01em 16px" action='FearDarkStart.php' method='post'>
        <div style="margin-top:16px!important;margin-bottom:16px!important">
		<fieldset class="group1"style="border-radius: 5px; background-color: #b3ff66; padding-bottom:4px;  ">
         <p> Congratulations!</br>
			 You completed this challenge.You're one step closer to overcome your fear.</br>One more thing: 
			 Don’t be ashamed about your fear. Many adults have admitted to being afraid of the dark.Everyone has one fear or another, and you should be proud of yourself 
			 for being honest and open about yours. 
			 Feel proud of yourself for admitting that you have a fear and that you want to take steps to tackle it.
		</fieldset >
		</p>
		<button class="button decorate " type="submit">Finish</button>
		</div>
	  </form>
  </div>
</div>





<!--Phobia groups!-->

 <?php if(isset($_SESSION['login_user'])){

print "<div style='margin-top:50px;'class='w3-container w3-padding-32' >
    <h3 class='w3-border-bottom w3-border-light-grey w3-padding-16' style='color:green'>Treat your phobia</h3>
    <img src='photos/join.png' style='width:60%;padding-left:19%;'>
	<a href='http://localhost/site/fearOfDark.php'><img src='photos/darkFear.png' style='width:40%;padding-left:30%;'></a>
  </div>

  <div class='w3-row-padding'>";


$fobie='dark';
$query=oci_parse($conn,'select * from userstw where fobie=:fobie');
		  oci_bind_by_name($query,':fobie',$fobie);
	      oci_execute($query);

while($row1 = oci_fetch_array($query, OCI_RETURN_NULLS+OCI_ASSOC)){
	 
	

	
 PRINT " 
    <div class='w3-col l3 m6 w3-margin-bottom'>
      <img src='".$row1['PROFILE_PIC']."'style='width:40%;border-radius:50%;margin-top:16px!important;'>
      <h3>".$row1['USER_NAME']."</h3>
      <p><button class='button decorate w3-block'>Add friend</button></p>
    </div>";
}
  print "</div>";

 }
 ?>
  

<!-- Challenge -->
<div class="bestart" style="padding:40px 16px" >
  <img src="photos/darkFearpresentation.png" style="width:30%;padding-left:35%;">
  <button onclick="document.getElementById('challenge').style.display='block'" onclick=\"close_menu()\" class=' item button '> PHOBIA QUIZ</button>


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



</script>


</body>
</html>