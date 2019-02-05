<?php
if( isset($_POST['n']) && isset($_POST['i']) && isset($_POST['e']) && isset($_POST['m']) ){
	$n = $_POST['n']; // HINT: use preg_replace() to filter the data
	$i = $_POST['i'];
	$e = $_POST['e'];
	$m = nl2br($_POST['m']);
	$to = "petyata15@gmail.com";	
	$from = $e;
	$subject = 'Tréning időpont';
	$message = '<b>Name:</b> '.$n. '<b>Időpont:</b> '.$i.' <br><b>Email:</b> '.$e.' <p>'.$m.'</p>';
	$headers = "From: $from\n";
	$headers .= "MIME-Version: 1.0\n";
	$headers .= "Content-type: text/html; charset=iso-8859-1\n";
	if( mail($to, $subject, $message, $headers) ){
		echo "success";
	} else {
		echo "A szever, nem tudta elküldeni az üzeneted. Kérjük később próbálja újra.";
	}
}
?>