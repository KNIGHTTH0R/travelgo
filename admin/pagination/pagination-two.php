<?php
	$hasil  = mysql_query($query);
	$data  = mysql_fetch_array($hasil);
	$jumData = $data['jumData'];
	// menentukan jumlah halaman yang muncul berdasarkan jumlah semua data
	$jumPage = ceil($jumData/$limit);
	//menampilkan link << Previous
	if ($page > 1){
	echo  "<a class='list' href='".$_SERVER['PHP_SELF']."?page=".($page-1)."'><< Prev</a>";
	}
?>