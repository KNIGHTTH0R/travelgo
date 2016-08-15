<?php	
		include("inc/anti-injection.php");
		include("inc/connection.php");
		
		$id   = abs(antiinjection($_GET['id']));
		
		/*$sql = mysql_query("select * from news where id_news='$id'") or die (mysql_error());
		$news = mysql_fetch_array($sql);
		$img = $news['img_tour'];
		unlink("../images/tour/$img");*/
		
		$sql = mysql_query("delete from news where id_news='$id'") or die (mysql_error());
		header("location:list-news.php");
?>