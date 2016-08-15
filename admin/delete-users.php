<?php
		include("inc/anti-injection.php");
		include("inc/connection.php");					

		$id = abs(antiinjection($_GET['id']));
		$sql = mysql_query("delete from db_user where id_user='$id'");
		header("location:list-users.php");

?>