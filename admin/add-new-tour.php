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
		$direcfolder				= "../images/tour/";
		$directory = $direcfolder . basename($_FILES['img-tour']['name']);
		
		$heading		= antiinjection($_POST['heading']);
		$img_tour		= ($_FILES['img-tour']['name']);
		$img_type		= ($_FILES['img-tour']['type']);
		//$tour_desti		= mysql_real_escape_string($_POST['tour-destination']);
		$tour_desc 		= mysql_real_escape_string($_POST['tour-description']);
		$post_date		= date("y-m-d");
		$post_time		= date("H:i:s");
		$error = "";
		
		if(empty($heading)){
			$error = "<div class='alert alert-danger'>Destination Name is empty !</div>";		
		}
		elseif(empty($tour_desc)){
			$error = "<div class='alert alert-danger'>Tour Description is empty !</div>";
		}	
		
		if($img_type == "image/jpg" || $img_type == "image/jpeg" || $img_type == "image/png"){
			
			if(move_uploaded_file($_FILES['img-tour']['tmp_name'], $directory)){
				
				$sql = mysql_query("insert into tour values ('','$heading','$img_tour','','$tour_desc','$post_date','$post_time')") or die (mysql_error());
				$error = "<div class='alert alert-success'>Tour Has Been Added. <a href='list-tour.php'>Click Here </a> For View List tour</div>";
				
			}
			else{
					
				$error = "<div class='alert alert-danger'>Upload Image Failed. Please cek and try again.</div>";
			}
		}
		else{
			
			$error = "<div class='alert alert-danger'>Image Must jpg/jpeg/png. Please cek and try again.</div>";			
		}
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
                                    <legend>Add New Tour</legend>
                                    <?php echo $error; ?>
                                    <lebel>Destination Name</lebel>
                                    <input class="form-control" name="heading" placeholder="Destination Name" type="text" required/>
                                    <lebel>Image</lebel>
                                    <input type="file" name="img-tour" class="form-control" />
                                    <lebel>Tour Description</lebel>
                                    <textarea name="tour-description" class="form-control"></textarea>
                                </div>
                            </div>
                            <br />	
                            <input class="btn btn-success" type="submit" name="submit" value="Save"  /> <input class="btn btn-success" type="button" name="cancel" value="Back" onclick="window.location='list-tour.php'"  />
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