

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



	createCookie('unuHeights','1',-3600);

	createCookie('doiHeights','1',-3600);

    createCookie('treiHeights','1',-3600);

	createCookie('patruHeights','1',-3600);
	  
	 window.location="http://localhost/siteFinal/heightsFear/raiseChallenge.php";
	
	  
</script>

