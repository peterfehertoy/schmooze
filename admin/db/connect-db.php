<?php
// server info

/*

$server = 'mysql.hostinger.hu';

$user = 'u175136655_dam'
$pass = 'alexiroope12';

$db = 'u175136655_and';

*/


$server = 'localhost';

$user = 'schmooze_varga';

$pass = 'Varga123varga321';

$db = 'schmooze_schmooze';


/*
// server info
$server = 'localhost';
$user = 'root';
$pass = '';
$db = 'schmooze';
*/
// csatlakozás az adatbázishoz
$mysqli = new mysqli($server, $user, $pass, $db);

// Megmutatja a hibákat (live siteon eltávolítani)
mysqli_report(MYSQLI_REPORT_ERROR);

?>