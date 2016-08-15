<?php	
		include("inc/anti-injection.php");
		include("inc/connection.php");
		
		$id   = abs(antiinjection($_GET['id']));
		
		$sql = mysql_query("select * from tour where id_tour='$id'") or die (mysql_error());
		$tour = mysql_fetch_array($sql);
		$img = $tour['img_tour'];
		unlink("../images/tour/$img");
			
		$sql = mysql_query("delete from tour where id_tour='$id'") or die (mysql_error());
		header("location:list-tour.php");
?>