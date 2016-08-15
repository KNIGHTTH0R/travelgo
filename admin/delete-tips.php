<?php
		include("inc/anti-injection.php");
		include("inc/connection.php");
		
		$id   = abs(antiinjection($_GET['id']));

		$sql = mysql_query("delete from tips where id_tips='$id'") or die (mysql_error());
		header("location:list-tips.php");
?>