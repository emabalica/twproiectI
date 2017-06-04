<?php  //userOption.php
	  if(isset($_SESSION['login_user'])){
		 $id=(int)$_SESSION['login_user'];

		  $query=oci_parse($conn,'select * from userstw where user_id=:id');
		  oci_bind_by_name($query,':id',$id);
	      oci_execute($query);
		  $row1 = oci_fetch_array($query);
		  $role=$row1['ROLE'];

		  
		  
		  if(strcmp($role,"user")==0){
	  print "<a onclick=\"document.getElementById('quizpart1').style.display='block'\" class='item button'><i class='icon quiz_icon'></i>PHOBIA QUIZ</a>";
      print "<a href='http://localhost/siteFinal/account.php' class='item button '><i class='icon user_icon' ></i>ACCOUNT</a>";
	  print "<a href='http://localhost/siteFinal/phpDocs/logout.php' class='item button '><i class='icon user_icon' ></i>LOGOUT</a>";}
		 
		 if(strcmp($role,"admin")==0){
		  print"
		  <a href='http://localhost/siteFinal/admin/charts.php' class='item button'><i class='icon user_icon'></i>CHARTS</a>
		  <a onclick=\"document.getElementById('delete').style.display='block'\" class='item button'><i class='icon quiz_icon'></i>DELETE POST</a>
          <a onclick=\"document.getElementById('post').style.display='block'\" class='item button'><i class='icon user_icon'></i>ADD POST</a>
		  <a href='http://localhost/siteFinal/phpDocs/logout.php' class='item button '><i class='icon user_icon' ></i>LOGOUT</a>";}}
	
	else
	
	  print "<a onclick=\"document.getElementById('quizpart1').style.display='block'\" class='item button'><i class='icon quiz_icon'></i>PHOBIA QUIZ</a>
			 <a onclick=\"document.getElementById('form').style.display='block'\" class='item button'><i class='icon user_icon'></i>LOGIN/SINGUP</a>'";
	  ?>