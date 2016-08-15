<?php 
		session_start();		
		if (!isset($_SESSION['username']) || empty($_SESSION['username'])) { // cek session login
    	//redirect to login form
    	header('location:index.php');
		}
?>		