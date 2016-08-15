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
<title>Kristal Tour Admin :: Edit Tour</title>
</head>
<?php
if(isset($_POST['submit'])) 
{
		$id	  = abs(antiinjection($_GET['id']));
		
		$sql = mysql_query("select * from tour where id_tour='$id'");
		$tour = mysql_fetch_array($sql);
		$img = $tour['img_tour'];
	
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
			$error = "<div class='alert alert-danger'>Something wrong ! Please cek and try again.</div>";		
		}
		/*elseif(empty($tour_desti)){
			$error = "<div class='alert alert-danger'>Something wrong ! Please cek and try again.</div>";
		}*/
		elseif(empty($post_date)){
			$error = "<div class='alert alert-danger'>Something wrong ! Please cek and try again.</div>";
		}
		
		if($img_tour == ""){
			$sql = mysql_query("update tour set name_tour='$heading', tour_description='$tour_desc' where id_tour='$id' ");
			$error = "<div class='alert alert-success'>Tour Has Been Changed. <a href='list-tour.php'>Click Here </a> For View List Tour</div>"; 		
		}
		
		if($img_tour != ""){
			
			if($img_type == "image/jpg" || $img_type == "image/jpeg" || $img_type == "image/png"){
					unlink("../images/tour/$img");
					move_uploaded_file($_FILES['img-tour']['tmp_name'], $directory);
								
					$sql = mysql_query("update tour set name_tour='$heading', img_tour='$img_tour', tour_destination='$tour_desti', tour_description='$tour_desc', post_date='$post_date', post_time='$post_time' where id_tour='$id' ");
					$error = "<div class='alert alert-success'>Tour Has Been Changed.</div>";	
			}
			else{
					$error = "<div class='alert alert-danger'>Image Must jpg/jpeg/png. Please cek and try again.</div>";				
			}
			
		}	
}
?>
<?php
		$id	  = abs(antiinjection($_GET['id']));
		$sql1 = mysql_query("select * from tour where id_tour='$id'") or die (mysql_error());
		$tour = mysql_fetch_array($sql1);
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
               	    <form action="<?php echo $_SERVER['PHP_SELF']."?id=".$tour['id_tour']; ?>" method="post" class="form" role="form" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-xs-6">
                                    <legend>Edit Tour</legend>
                                    <?php echo $error; ?>
                                    <lebel>Destination Name</lebel>
                                    <input class="form-control" name="heading" placeholder="Destination Name" type="text" required value="<?php echo $tour['name_tour']; ?>"/>
                                    <lebel>Image</lebel> <br/>
                                    <?php if($tour['img_tour'] != ""){ ?>
                                    <img src="../images/tour/<?php echo $tour['img_tour']; ?>" width="300" height="100" class="space" /> <br />
                                     <a href="delete-image.php?img=<?php echo $tour['id_tour']; ?>&stat=tur" class="list" onclick="return confirm('Are You Sure Delete This Images ?')">Delete Image</a>
                                    <?php }else{} ?>
                                    <input type="file" name="img-tour" class="form-control" />
                                    <!--<lebel>Tour Destination </lebel>
                                     <textarea name="tour-destination" class="form-control" reqiured><?php //echo $tour['tour_destination']; ?></textarea>-->
                                    <lebel>Description</lebel>
                                    <textarea name="tour-description" class="form-control" reqiured><?php echo $tour['tour_description']; ?></textarea>
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