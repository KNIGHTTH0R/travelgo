<?php
		//session_start();
		if($_SESSION['level'] == "users"){
			include("nav-bar-user.php");
		}else{
			include("nav-bar-admin.php");
			}		
?> 