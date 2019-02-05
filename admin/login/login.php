<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include '../db/admindb.php';
session_start();
if(isset($_POST["sub"]))
{
		$username=$_POST["txtuser"];
		$password=md5($_POST["txtpass"]);
		
		$query="select * from login where username='$username' and password='$password'";
		$exe_query= mysqli_query($conn, $query);
		$found_num_rows= mysqli_num_rows($exe_query);
		
		if($found_num_rows==1)
		{
			$_SESSION["login_user"]=$username;
			header("location:../adminarea.php");
		}
		else{
			header("location:../index.php?invaild=Próbáld újra");
		}
}		