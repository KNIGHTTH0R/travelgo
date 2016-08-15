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
<title>Kristal Tour Admin :: Add New News</title>
</head>
<?php
if(isset($_POST['submit'])) 
{
		//$direcfolder				= "../images/news/";
		//$directory = $direcfolder . basename($_FILES['img-news']['name']);
		
		$heading		= antiinjection($_POST['heading']);
		$img_news		= ($_FILES['img-news']['name']);
		$img_type		= ($_FILES['img-news']['type']);
		$short_desc		= antiinjection($_POST['short-desc']);
		$content 		= $_POST['content'];
		$post_date		= date("y-m-d");
		$post_time		= date("H:i:s");
		$error = "";
		
		
		/*if($img_type == "image/jpg" || $img_type == "image/jpeg" || $img_type == "image/png"){
			
			if(move_uploaded_file($_FILES['img-news']['tmp_name'], $directory)){
				
				$sql = mysql_query("insert into news values ('','$heading','$img_news','$short_desc','$content','$post_date','$post_time')") or die (mysql_error());
				$error = "<div class='alert alert-success'>News Has Been Added. <a href='list-news.php'>Click Here </a> For View List News</div>";
				
			}
			else{
					
				$error = "<div class='alert alert-danger'>Upload Image Failed. Please cek and try again.</div>";
			}
		}
		else{*/
			
				if(empty($heading)){
					$error = "<div class='alert alert-danger'>Heading is empty !</div>";		
				}
				elseif(empty($short_desc)){
					$error = "<div class='alert alert-danger'>Short Description is empty !</div>";
				}
				elseif(empty($content)){
					$error = "<div class='alert alert-danger'>Content is empty</div>";
				}
				else{
					$sql = mysql_query("insert into news values ('','$heading','','$short_desc','$content','$post_date','$post_time')") or die (mysql_error());
					$error = "<div class='alert alert-success'>News Has Been Added. <a href='list-news.php'>Click Here </a> For View List News</div>";
					//$error = "<div class='alert alert-danger'>Image Must jpg/jpeg/png. Please cek and try again.</div>";
				}
		//}
}
?>
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
                    	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="form" role="form" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-xs-6">
                                    <legend>Add New News</legend>
                                    <?php echo $error; ?>
                                    <lebel>Heading</lebel>
                                    <input class="form-control" name="heading" placeholder="Heading" type="text" required/>
                                    <!--<lebel>Image</lebel>
                                    <input type="file" name="img-news" class="form-control" />-->
                                    <lebel>Short Description</lebel> 
                                    <input class="form-control" name="short-desc" placeholder="Short Description" type="text" required/>
                                    <lebel>Description</lebel>
                                    <textarea name="content" class="form-control" reqiured></textarea>
                                </div>
                            </div>
                            <br />	
                            <input class="btn btn-success" type="submit" name="submit" value="Save"  /> <input class="btn btn-success" type="button" name="cancel" value="Back" onclick="window.location='list-news.php'"  />
            			</form>
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