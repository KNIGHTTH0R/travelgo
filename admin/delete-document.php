<?php
		include("inc/connection.php");
		include("inc/anti-injection.php");
		
		$id = antiinjection($_GET['id']);
		$sql = mysql_query("delete from d_information where id_dinformation='$id'") or die(mysql_error());
		header("location:list-dInformation.php");	
?>