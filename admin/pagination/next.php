<?php
	//menampilkan link Next >>
	if ($page < $jumPage){
	echo "<a href='".$_SERVER['PHP_SELF']."?page=".($page+1)."' class='list'>Next</a>";
	}
?>