jQuery(document).ready(function(){

	$('.szerkesztes').click(function(){
		
		var szerk_name = $(this).attr('szerk_name');
		$('#content-1').html('');
		$('#content-1').load(szerk_name);
	});
	
	
});