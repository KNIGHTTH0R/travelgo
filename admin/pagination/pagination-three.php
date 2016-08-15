<?php
	//menampilkan urutan paging
	for($i = 1; $i <= $jumPage; $i++){
	//mengurutkan agar yang tampil i+3 dan i-3
			 if ((($i >= $page - 3) && ($i <= $page + 3)) || ($i == 1) || ($i == $jumPage))
			 {
				if($i==$jumPage && $page <= $jumPage-5);
				if ($i == $page) echo " <b>".$i."</b> ";
				else echo " <a class='list' href='".$_SERVER['PHP_SELF']."?page=".$i."'>".$i."</a> ";
				if($i==1 && $page >= 6);
			 }
	}
	//menampilkan link Next >>
	if ($page < $jumPage){
	echo "<a href='".$_SERVER['PHP_SELF']."?page=".($page+1)."' class='list'>Next >></a>";
	}
?>