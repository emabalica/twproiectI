

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



	createCookie('unuSpider','1',-3600);

	createCookie('doiSpider','1',-3600);

    createCookie('treiSpider','1',-3600);

	createCookie('patruSpider','1',-3600);
	  
	 window.location="http://localhost/siteFinal/SpiderFear/raiseChallenge.php";
	
	  
</script>

