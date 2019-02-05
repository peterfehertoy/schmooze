<!DOCTYPE html> 
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">  
		<meta name="author" content="Fehértóy Péter">
		<meta name="copyright" content="Fehértóy Péter">
		<meta name="keywords" content="HTML,CSS demo">
		<meta name="description" content="Schmoose">	
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="viewport" content="height=device-height, initial-scale=1">
		<link rel="stylesheet"  href="css/style.css"> 
		<title>SCHMOOZE</title>
		<link rel="shortcut icon" type="image/png" href="img/schmooze-icon.png"/>
		<link rel="stylesheet" href="plugins/scrollbar/jquery.mCustomScrollbar.css" />	
		<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script> 
		<script type="text/javascript" src="js/scripts.js"></script> 
		<script type="text/javascript" src="js/animation.js"></script> 

		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="plugins/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>

<link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">

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




</head>

<body>
<div class="se-pre-con"></div>
	<div id="topmenu" class="top-menu">
		<script src="js/topmenu.js"></script>
	</div>

  <div class="content-window">

  	<div class="baloldal"  >
	  		<img src="img/menu-kapcsolat.png" data-scrollreveal="enter left over 0.5s after 0.2s">
  	</div>

  	<div class="jobboldal">
  		<div class="right-content">
		  	<div id="myDIV" class="cikkcontent mCustomScrollbar" data-mcs-theme="dark-thin" data-scrollreveal="enter right over 0.5s after 0.4s">	
		  			
				<div class="kapcsolat">
				<div class="levelkuldes">
					<h1>kapcsolat</h1><br>
						<ul id="gform_fields_1" class="">
							<li id="field_1_1" class="">
									
									  	
							<div class="" id=""> 
								<label for="input_1_1_3">Név</label> 
								<span id="" class=""> <input type="text" name="input_1.3" id="input_1_1_3" value="" aria-label="First name" tabindex="1" aria-required="true" aria-invalid="false" placeholder="Név"> 
								</span> 								  			
							</div>
								<br>
							</li>
							<li id="" class="">
								<label class="" for="">Email cím</label>
								<div class=""> <input name="" id="" type="email" value="" class="medium" tabindex="3" placeholder="Email Cím"></div>
							</li>
								<br>
							<li id="" class="">
								<label class="" for="">Telefonszám</label>
								<div class=""><input name="" id="" type="tel" value="" class="medium" tabindex="4" placeholder="Telefonszám" aria-invalid="false"></div>
							</li>
								<br>
							<li id="" class="">
								<label class="" for="">Üzenet</label>
								<div class="">
								  	<textarea name="" id="" class="" tabindex="5" placeholder="Üzenet" aria-required="true" aria-invalid="false" rows="10" cols="50">	
								  	</textarea>
								</div>
							</li>
								<br>
						</ul>
							
						<input type="submit" id="gform_submit_button_1" class="gform_button button" value="Küldés" tabindex="6" >

								</div>
						  	<br><br><br>
						  	
								<p>Telefon: +36 30 665 9122<br>
								E-mail: info@schmooze.hu <br>
								Facebook: <a href="https://www.facebook.com/schmooze.hu/">https://www.facebook.com/schmooze.hu</a><br><br>

								Kérdését vagy a tréningekre való jelentkezését az alábbi űrlap kitöltésével is megküldheti nekünk. 
								Érdeklődését előre is köszönjük! </p>				
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





