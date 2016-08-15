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
<title>Kristal Tour Admin :: Edit News</title>
</head>
<?php
if(isset($_POST['submit'])) 
{
		$id	  = abs(antiinjection($_GET['id']));
		
		//$sql1 = mysql_query("select * from news where id_news='$id'");
		//$news = mysql_fetch_array($sql1);
		//$img = $news['img_news'];
		
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
		
		if(empty($heading)){
			$error = "<div class='alert alert-danger'>Something wrong ! Please cek and try again.</div>";		
		}
		elseif(empty($short_desc)){
			$error = "<div class='alert alert-danger'>Something wrong ! Please cek and try again.</div>";
		}
		elseif(empty($content)){
			$error = "<div class='alert alert-danger'>Something wrong ! Please cek and try again.</div>";
		}else{

			$sql = mysql_query("update news set heading='$heading', short_description='$short_desc', description='$content' where id_news='$id' ");
			$error = "<div class='alert alert-success'>News Has Been Changed. <a href='list-news.php'>Click Here </a> For View List News</div>"; 		
		}
		
		/*if($img_news != ""){
			
			if($img_type == "image/jpg" || $img_type == "image/jpeg" || $img_type == "image/png"){
					unlink("../images/news/$img");
					move_uploaded_file($_FILES['img-news']['tmp_name'], $directory);
								
					$sql = mysql_query("update news set heading='$heading', img_news='$img_news', short_description='$short_desc', description='$content', post_date='$post_date', post_time='$post_time' where id_news='$id' ");
					$error = "<div class='alert alert-success'>News Has Been Changed. <a href='list-news.php'>Click Here </a> For View List News</div>";	
			}
			else{
					$error = "<div class='alert alert-danger'>Image Must jpg/jpeg/png. Please cek and try again.</div>";				
			}
			
		}*/			
}
?>
<?php
		$id	  = abs(antiinjection($_GET['id']));
		$sql1 = mysql_query("select * from news where id_news='$id'") or die (mysql_error());
		$news = mysql_fetch_array($sql1);
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
               	    <form action="<?php echo $_SERVER['PHP_SELF']."?id=".$news['id_news']; ?>" method="post" class="form" role="form" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-xs-6">
                                    <legend>Edit New News</legend>
                                    <?php echo $error; ?>
                                    <lebel>Heading</lebel>
                                    <input class="form-control" name="heading" placeholder="Heading" type="text" required value="<?php echo $news['heading']; ?>"/>
                                   <!-- <lebel>Image</lebel> <br/>
                                    <?php //if($news['img_news'] != ""){ ?>
                                    <img src="../images/news/<?php //echo $news['img_news']; ?>" width="150" height="150" class="space" /> <br />
                                    <a href="delete-image.php?img=<?php //echo $news['id_news']; ?>&stat=nws" class="list" onclick="return confirm('Are You Sure Delete This Images ?')">Delete Image</a>
                                    <?php //}else{} ?>
                                    <input type="file" name="img-news" class="form-control" />  -->
                                    <lebel>Short Description</lebel>
                                    <input class="form-control" name="short-desc" placeholder="Short Description" type="text" required value="<?php echo $news['short_description']; ?>"/>
                                    <lebel>Description</lebel>
                                    <textarea name="content" class="form-control" reqiured><?php echo $news['description']; ?></textarea>
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