<?php
		include("inc/connection.php");
		include("inc/anti-injection.php");
		
		$id = antiinjection($_GET['img']);
		$status = antiinjection($_GET['stat']);
		
		if($status == "nws"){
		
			$sql = mysql_query("select * from news where id_news='$id'") or die (mysql_error());
			$news = mysql_fetch_array($sql);
			$img = $news['img_news'];
			unlink("../images/news/$img");
			
			$sql1 = mysql_query("update news set img_news='' where id_news='$id'") or die (mysql_error());
			header("location:edit-news.php?id=$id");
		}else{
			
			$sql = mysql_query("select * from tour where id_tour='$id'") or die (mysql_error());
			$tour = mysql_fetch_array($sql);
			$img = $tour['img_tour'];
			unlink("../images/tour/$img");
			
			$sql1 = mysql_query("update tour set img_tour='' where id_tour='$id'") or die (mysql_error());
			header("location:edit-tour.php?id=$id");
		}
?>