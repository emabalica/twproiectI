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
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="../css/styleScrollImag.css">
<link rel="stylesheet" href="../css/footer.css">
<link rel="stylesheet" href="../css/toparticles.css">
<link rel="stylesheet" href="../css/articole_layout.css">
<link rel="stylesheet" href="../css/footer.css">
<link rel="stylesheet" href="../css/form.css">
<link rel="stylesheet" href="../css/phobia_groups.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>




<div class="nav">
  <div class="box" > 
    <img src="../photos/FREE-PHOBIA.png" style="width:200px; padding-left:20px;">
	
    <div class="right menu-large">
      <a href="http://localhost/siteFinal/home/home.php" class=" item button "><i class="icon home_icon" ></i>ABOUT</a>
      <a href="http://localhost/siteFinal/articles/articles.php" class=" item button"><i class="icon art_icon"></i>ARTICLES</a>
      <a href="http://localhost/siteFinal/phobias/phobias.php" class=" item button"><i class="icon art_icon"></i> PHOBIAS</a>
	   <a href="http://localhost/siteFinal/quiz2/test.php" class=" item button"><i class="icon art_icon"></i> PHOBIA KNOWLEDGE TEST</a>
	  
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
      print "<a href='http://localhost/siteFinal/account/account.php' class=' item button '><i class='icon user_icon' ></i>ACCOUNT</a>";
	  print "<a href='http://localhost/siteFinal/phpDocs/logout.php' class=' item button '><i class='icon user_icon' ></i>LOGOUT</a>";
		  }
		  if(strcmp($role,"admin")==0){
		  print"
		  <a onclick=\"document.getElementById('delete').style.display='block'\" class=' item button'><i class='icon  quiz_icon'></i> DELETE POST</a>
          <a onclick=\"document.getElementById('post').style.display='block'\" class=' item button'><i class='icon user_icon'></i>ADD POST</a>
		  <a href='http://localhost/siteFinal/phpDocs/logout.php' onclick=\'close_menu()\' class='item button'>LOGOUT</a>";}
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
  <a href="http://localhost/siteFinal/home/home.php"   onclick="close_menu()" class=" item button">ABOUT</a>
  <a href="http://localhost/siteFinal/articles/articles.php" onclick="close_menu()" class=" item button">ARTICLES</a>
  <a href="http://localhost/siteFinal/phobias/phobias.php" onclick="close_menu()" class=" item button">PHOBIAS</a>
  
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
  <a href='http://localhost/siteFinal/account/account.php' onclick=\"close_menu()\" class='item button'>ACCOUNT</a>
  <a href='http://localhost/siteFinal/phpDocs/logout.php' onclick=\"close_menu()\" class='item button'>LOGOUT</a>";
  }

  if(strcmp($role,"admin")==0){
 print " <a onclick=\"document.getElementById('delete').style.display='block';close_menu()\" onclick=\"close_menu()\" class=' item button'>DELETE POST</a>
		 <a onclick=\"document.getElementById('post').style.display='block';close_menu()\" onclick=\"close_menu()\" class=' item button'>ADD POST</a>
		 <a href='http://localhost/siteFinal/admin/charts.php' class='item button'><i class='icon user_icon'></i>CHARTS</a>
		 <a href='http://localhost/siteFinal/phpDocs/logout.php' onclick=\'close_menu()\' class='item button'>LOGOUT</a>";}
   }
  else{
	    print" <a onclick=\"document.getElementById('quizpart1').style.display='block';close_menu()\" onclick=\"close_menu()\" class=' item button'>PHOBIA QUIZ</a>
               <a onclick=\"document.getElementById('form').style.display='block';close_menu()\" onclick=\"close_menu()\" class=' item button'>LOGIN/LOGOUT</a>";}
		

  
  ?>
  
  </nav>

<!--QUIZ FORM-->
 <div id="quizpart1" class="form">
    <div class="form-content" style="max-width:600px">

      <div style="text-align:center!important"><br>
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
					<input type="radio" name="group1" value="mature50" /> <label><label> 41 to 50 Years Old</label> </input></br>
					<input type="radio" name="group1" value="old60" /> <label><label><label> 51 to 60 Years Old</label> </input></br>
					<input type="radio" name="group1" value="old" /> <label> Over 60 Years Old </label> </input>
				</fieldset >
		</p>
		<button class="button decorate " type="submit">Next</button>
		</div>
      </form>
  </div>
</div>






<!--Phobia groups!-->

 <?php if(isset($_SESSION['login_user'])){

print "<div class=' containerPhobiGroups' >
						<h3 class='borduraPhobiGroups ' style='color:green'>Treat your phobia</h3>
						<img src='../photos/join.png' style='width:60%;padding-left:19%;'>
						<a href='http://localhost/siteFinal/darkFear/fearDarkStart.php'><img src='../photos/darkFear.png' style='width:40%;padding-left:30%;'></a>
				   </div>
				   <div class='paddingPhobi'>";
    


	$fobie='dark';
	$query=oci_parse($conn,'select * from userstw where fobie=:fobie');
	oci_bind_by_name($query,':fobie',$fobie);
	oci_execute($query);

		while($row1 = oci_fetch_array($query, OCI_RETURN_NULLS+OCI_ASSOC)){
	
				print "	<div class='singleContactDiv marginPhobi'>
							<img src='../".$row1['PROFILE_PIC']."'style='width:40%;border-radius:50%;margin-top:16px!important;'>
							<h3>".$row1['USER_NAME']."</h3>
							<p><button class='button decorate block'>Add friend</button></p>
						</div>";}
 }
 ?>
  

<!-- Challenge -->
<div class="bestart" style="padding:40px 16px" >
  <img src="../photos/darkFearpresentation.png" style="width:30%;padding-left:35%;">
  
  <?php
  //verific la stadiu provocare user
  $query=oci_parse($conn,'select * from provocari where user_id=:id');
		  oci_bind_by_name($query,':id',$_SESSION['login_user']);
	      oci_execute($query);

$row1 = oci_fetch_array($query, OCI_RETURN_NULLS+OCI_ASSOC);
$stagiu_provocare=$row1['STAGIU_PROVOCARE'];

if(strcmp($stagiu_provocare,'1')==0){
 print "<a href='http://localhost/siteFinal/darkFear/darkFear1.php'><button  class=' item button decorate ' style='width:40%;margin-left:30%' type='submit'>START</button></a>";}

if(strcmp($stagiu_provocare,'2')==0){
 print "<a href='http://localhost/siteFinal/darkFear/darkFear2.php'><button  class=' item button decorate '  style='width:40%;margin-left:30%' type='submit'>START</button></a>";}

 if(strcmp($stagiu_provocare,'3')==0){
 print "<a href='http://localhost/siteFinal/darkFear/darkFear3.php'><button  class=' item button decorate '  style='width:40%;margin-left:30%' type='submit'>START</button></a>";}

 if(strcmp($stagiu_provocare,'4')==0){
 print "<a href='http://localhost/siteFinal/darkFear/darkFear4.php'><button  class=' item button decorate '  style='width:40%;margin-left:30%' type='submit'>START</button></a>";}

 if(strcmp($stagiu_provocare,'5')==0){
 print "<a href='http://localhost/siteFinal/darkFear/darkFear5.php'><button  class=' item button decorate '  style='width:40%;margin-left:30%' type='submit'>START</button></a>";}

 if(strcmp($stagiu_provocare,'6')==0){
 print "<a href='http://localhost/siteFinal/darkFear/darkFear6.php'><button  class=' item button decorate '  style='width:40%;margin-left:30%' type='submit'>START</button></a>";}

	
?>

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