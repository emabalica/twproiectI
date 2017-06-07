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
	<link rel="stylesheet" href="../css/chartBars.css">
	<link rel="stylesheet" href="../phobia_groups.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="Chart.js"></script>
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
   <a href="http://localhost/siteFinal/quiz2/test.php" class=" item button"><i class="icon art_icon"></i> PHOBIA KNOWLEDGE TEST</a>
  
 
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
<div id="form" class="form" style='z-index:15;'>
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
 <div id="quizpart1" class="form" style='z-index:15;'>
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
<div id="post" class="form" style='z-index:15;'>
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
<div id="delete" class="form" style='z-index:15;'>
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

<!--Valori pentru chart-->
<?php

//dark
$id=1;
$stmt=oci_parse($conn,'BEGIN count_phobi_age(:id,:dark1,:dark2,:dark3);END;');
		oci_bind_by_name($stmt,':id',$id);
		oci_bind_by_name($stmt,':dark1',$dark1);
		oci_bind_by_name($stmt,':dark2',$dark2);
		oci_bind_by_name($stmt,':dark3',$dark3);
		oci_execute($stmt);

//spiders
$id=2;
$stmt=oci_parse($conn,'BEGIN count_phobi_age(:id,:spiders1,:spiders2,:spiders3);END;');
		oci_bind_by_name($stmt,':id',$id);
		oci_bind_by_name($stmt,':spiders1',$spiders1);
		oci_bind_by_name($stmt,':spiders2',$spiders2);
		oci_bind_by_name($stmt,':spiders3',$spiders3);
		oci_execute($stmt);
		
//heights
$id=3;
$stmt=oci_parse($conn,'BEGIN count_phobi_age(:id,:heights1,:heights2,:heights3);END;');
		oci_bind_by_name($stmt,':id',$id);
		oci_bind_by_name($stmt,':heights1',$heights1);
		oci_bind_by_name($stmt,':heights2',$heights2);
		oci_bind_by_name($stmt,':heights3',$heights3);

		oci_execute($stmt);
		
?>



<div class="media_contact" style='margin-top:90px';>
	<div class="social_media">
		<i class="icon fa-facebook-official  "></i>
		<i class="icon fa-instagram"></i>
		<i class="icon fa-pinterest-p "></i>
		<i class="icon fa-twitter "></i> 
  </div>
</div>

<div class="bestart" style="padding:40px 16px" >
	<img src="../photos/phobiasAge.png" style="width:30%;padding-left:35%;">
</div>

<div class="_articol color" style="padding:20px 16px;margin-top:10px;">
	<div class="row_padding borduraPhobiGroups" style="border-top:1px solid #ccc" >
		
				
		<table id="q-graph">
<caption>Common Phobias According to Age</caption>
<thead>
<tr>

<th class="under18"> 31 to 40 Years </th>
<th class="to24"> 18 to 24 Years </th>
<th class="to30"> 25 to 30 Years </th>
<th class="to40"> under 18 years </th>
</tr>
</thead>

<tbody>

<tr class="qtr" id="q1">
<th scope="row">Dark</th>
<td class="under18 bar" style="height: <?php echo $dark1.'px' ?>;"><p><?php echo $dark1 ?></p></td>
<td class="to24 bar" style="height: <?php echo $dark2.'px'; ?>"><p><?php echo $dark2 ?></p></td>
<td class="to30 bar" style="height: <?php echo $dark3.'px'; ?>;"><p><?php echo $dark3 ?></p></td>
<td class="to40 bar" style="height: 150px;"><p>150</p></td>

</tr>
<tr class="qtr" id="q2">
<th scope="row">Spiders</th>
<td class="under18 bar" style="height: <?php echo $spiders1.'px';?>;"><p><?php echo $spiders1?></p></td>
<td class="to24 bar" style="height: <?php echo $spiders2.'px';2?>;"><p><?php echo $spiders2?></p></td>
<td class="to30 bar" style="height: <?php echo $spiders3.'px';?>;"><p><?php echo $spiders3?></p></td>
<td class="to40 bar" style="height: 190px;"><p>190</p></td>
</tr>
<tr class="qtr" id="q3">
<th scope="row">Heights</th>
<td class="under18 bar" style="height: <?php echo $heights1.'px';?>;"><p><?php echo $heights1?></p></td>
<td class="to24 bar" style="height:  <?php echo $heights2.'px';?>"><p><?php echo $heights2?></p></td>
<td class="to30 bar" style="height: <?php echo $heights3.'px';?>;"><p><?php echo $heights3?></p></td>
<td class="to40 bar" style="height: 175px;"><p>175</p></td>
</tr>

</tbody>
</table>

<!--Values-->
<div id="ticks">
<div class="tick" style="height: 59px;"><p>200</p></div>
<div class="tick" style="height: 59px;"><p>150</p></div>
<div class="tick" style="height: 59px;"><p>100</p></div>
<div class="tick" style="height: 59px;"><p>50</p></div>
<div class="tick" style="height: 59px;"><p>0</p></div>
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