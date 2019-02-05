<!DOCTYPE html> 
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">  
		<meta name="author" content="Fehértóy Péter">
		<meta name="keywords" content="HTML,CSS demo">
		<meta name="description" content="Schmoose">	
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="viewport" content="height=device-height, initial-scale=1">
		<link rel="stylesheet"  href="css/style.css"> 
		<title>SCHMOOZE</title>
		<link rel="shortcut icon" type="image/png" href="img/schmooze-icon.png"/>
		<link rel="stylesheet" href="plugins/scrollbar/jquery.mCustomScrollbar.css" />	
		<link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
		<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script> 
		<script type="text/javascript" src="js/scripts.js"></script> 
		<script type="text/javascript" src="js/animation.js"></script> 
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="plugins/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>

		<script>
		$(window).load(function() {
			// Animate loader off screen
			$(".se-pre-con").fadeOut("slow");;
		});
		</script>

		<script>
			(function($){
				$(window).on("load",function(){
					$(".content").mCustomScrollbar();
				});
			})(jQuery);
		</script>

		<script>
		(function($){

		$('.cim-content').first().click();
		});
		</script>

</head>

<body>
	<div class="se-pre-con"></div>

	<div id="topmenu" class="top-menu">
		<script src="js/topmenu.js"></script>
	</div>
  
	<div class="content-window">
		<div class="baloldal"  >
				<img src="img/menu-write.png" data-scrollreveal="enter left over 0.5s after 0.2s">
			<div class="cikk-menu-container" data-scrollreveal="enter left over 0.5s after 0.4s">
					<div class="cim" ><h1>cikkek</h1></div>				
					<div class="cikk-nav mCustomScrollbar" data-mcs-theme="dark-thin">
						<div class="cim-nav" >
							<div class="cim-content">
								<?php
								require "cikkek.php";
								loadCikksDesktop($cikkek);
								?>
							</div>
						</div>
					</div>
			</div>
		</div>
	  
		<div class="jobboldal">		
	  	<div class="right-content">
		  			<div id="myDIV" class="cikkcontent mCustomScrollbar" data-mcs-theme="dark-thin" data-scrollreveal="enter right over 0.5s after 0.4s">	
				  		<div id="cikk" class="cikk">		
				  		</div>
				  	</div>	
			</div> 	
	  	</div>

  	</div>

<script>
function myFunction() {
    var elmnt = document.getElementById("myDIV");
    elmnt.scrollLeft = 0;
    elmnt.scrollTop = 0;
}
</script>
</body>