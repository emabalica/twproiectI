

<script>


function createCookie(name,value,days) {
    var expires = "";
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days*24*60*60*1000));
        expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + value + expires + "; path=/";
}



	createCookie('unu','1',-3600);

	createCookie('doi','1',-3600);

    createCookie('trei','1',-3600);

	createCookie('patru','1',-3600);
	  
	 window.location="http://localhost/siteFinal/darkFear/raiseChallenge.php";
	
	  
</script>

