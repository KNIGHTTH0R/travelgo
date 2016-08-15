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
<title>Kristal Tour  Admin :: List News</title>
</head>

<body>
<!-- Header -->
<div class="row">
		<?php include("inc/header.php"); ?>
</div>
<!-- Header -->

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
                    <legend>List News</legend>
<div class="datagrid">
<table class="CSSTableGenerator">

                          <tr>
                            <td id="tdnomer"><strong>No.</strong></td>
                            <td><strong>News Name</strong></td>
                            <td><strong>Short Desc</strong></td>
                            <td><strong>Post Date</strong></td>
                            <td id="idact"><strong></strong></td>
                          </tr>
                          
                          <?php
						  		include("pagination/pagination-one.php");
						  		$no=0;
						  		$sql = mysql_query("select * from news order by post_date DESC, post_time DESC LIMIT $offset, $limit ") or die (mysql_error());
								while($news=mysql_fetch_array($sql)){
									$no++;
									
						  ?>
                          <tr>
                          	<td id="tdnomer"><?php echo $no; ?></td>
                            <td><?php echo $news['heading']; ?></td>
                            <td><?php echo substr($news['short_description'],0,40); ?></td>
                            <td><?php echo $news['post_date']; ?></td>
                            <td id="tdact"><a href="edit-news.php?id=<?php echo $news['id_news']; ?>">Edit</a> || <a onclick="return confirm('Are You Sure Delete This News ?')" href="delete-news.php?id=<?php echo $news['id_news']; ?>">Delete</a></td>
                          </tr>
                          <?php
								}
								$query  = "SELECT COUNT(*) AS jumData FROM news";
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
                       <a href="add-new-news.php" class="list">Add New News</a>
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
</div>    
</body>
</html>