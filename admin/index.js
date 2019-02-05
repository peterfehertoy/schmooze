jQuery(document).ready(function(){
	$('#home').css('background', '#333333').css('color', '#b19b86');
	$('#content-1').load('cikk.php');
	
	$('.poszthivas').click(function(){
		$('.poszthivas').css('background', '#333333').css('color', '#b19b86');
		$(this).css('background', '#e1c5a9').css('color','#333');
		var page_name = $(this).attr('page_name');
		$('#content-1').html('');
		$('#content-1').load(page_name);
	});
	
	
});