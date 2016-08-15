<?php
		include("inc/validasi-login.php");
		include("inc/anti-injection.php");
		include("inc/connection.php");
		$error = "";
		error_reporting(0);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin :: List Tour</title>
</head>
<body>
<!-- Header -->
<div class="row">
		<?php include("inc/header.php"); ?>
</div>
<!-- Header -->
<br /> <br /> <br />
<!-- Content -->
<div class="row">
		<!-- Nav-Bar -->
		<div class="col-md-2">
       		<?php include("inc/nav-bar.php"); ?>
		</div>
       <!-- Nav-Bar -->
       
       <!-- Content -->
       <div class="col-md-6">
       		<div class="container">
            		<div class="jumbotron">
                    <legend>List Tour</legend>
<div class="datagrid">
<table class="CSSTableGenerator">
                          <tr>
                            <td><strong>No.</strong></td>
                            <td><strong>Name Tour</strong></td>
                            <!--<td><strong>Post Date</strong></td>-->
                            <td></td>
                          </tr>                
                          <?php
						  		$no=0;
								include("pagination/pagination-one.php");
						  		$sql = mysql_query("select * from tour order by post_date DESC, post_time DESC LIMIT $offset, $limit") or die (mysql_error());
								while($tour=mysql_fetch_array($sql)){
									$no++;
						  ?>
                          <tr>
                          	<td id="tdnomer"><?php echo $no; ?></td>
                            <td><?php echo $tour['name_tour']; ?></td>
                            <!--<td><?php //echo $tour['post_date']; ?></td>-->
                            <td id="tdact" ><a href="edit-tour.php?id=<?php echo $tour['id_tour']; ?>">Edit</a> || <a onclick="return confirm('Are You Sure Delete This Users ?')" href="delete-tour.php?id=<?php echo $tour['id_tour']; ?>">Delete</a></td>
                          </tr>
                          <?php
								}
								$query  = "SELECT COUNT(*) AS jumData FROM tour";
						  ?>
    <tfoot>
                        <tr>
                            <td colspan="6">
                                <div id="paging">
                                    <ul>
                                        <li><?php include("pagination/prev.php"); ?></li>
                                        <li><?php include("pagination/number-pages.php"); ?></li>
                                        <li><?php include("pagination/next.php"); ?></li>
                                    </ul>
                                </div>
                        </tr>         
    </tfoot>                    
</table>
</div>
                        <br/>
                       <a href="add-new-tour.php" class="list">Add New Tour</a>
                    </div>
            </div>
       </div>
       <!-- Content -->
</div>
<!-- Content -->
<!-- Footer -->
<div class="row">
		
		<?php include("inc/footer.php"); ?>
        
</div>
<!-- Footer -->
</body>
</html>