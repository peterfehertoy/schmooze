$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 1000, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});


$(document).ready(function(){

	$('.poszthivas').click(function(){
		var page_name = $(this).attr('page_name');
		

setTimeout(function() {
$( ".cikk" ).fadeTo( "fast" , 0, function() {});
}, 0);	
		
setTimeout(function() {
$('.cikkcontent').mCustomScrollbar('scrollTo','top','fast');
}, 0);				

setTimeout(function() {
      $('#cikk').load('loadcikkek.php?cikkid='+page_name);
}, 900);
			

setTimeout(function() {
      $( ".cikk" ).fadeTo( "normal" , 1, function() {});
}, 1000);
		 
	});	
	
});




$(document).ready(function(){

	$(".hamburger_menu_gomb").click(function(){
		$(".sidebar_menu").addClass("hide_menu");
		$(".toggle_menu").addClass("opacity_one");
		$(".hamburger_menu_gomb").addClass("opacity_null");
	});	
		$(".x").click(function(){
		$(".sidebar_menu").removeClass("hide_menu");
		$(".toggle_menu").removeClass("opacity_one");
		$(".hamburger_menu_gomb").removeClass("opacity_null");
	});	
	$(".sidebar_menu_item").click(function(){
		$(".sidebar_menu").removeClass("hide_menu");
		$(".toggle_menu").removeClass("opacity_one");
		$(".hamburger_menu_gomb").removeClass("opacity_null");
	});		
	
});