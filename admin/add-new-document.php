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
<title>Admin ::  Add New Document</title>
</head>
<?php
if(isset($_POST['submit'])) 
{
		
		$heading		= antiinjection($_POST['heading']);
		$short_desc		= antiinjection($_POST['short-desc']);
		$content 		= ($_POST['content']);
		$note 			= ($_POST['note']);
		$post_date		= date("y-m-d");
		$post_time		= date("H:i:s");
		$error = "";
		
		if(empty($heading)){
			$error = "<div class='alert alert-danger'>Document name is empty !</div>";		
		}
		elseif(empty($content)){
			$error = "<div class='alert alert-danger'>Content is empty !</div>";
		}
		else{	
			$sql = mysql_query("insert into d_information values ('','$heading','$short_desc','$content','$note','$post_date','$post_time')") or die (mysql_error());
			$error = "<div class='alert alert-success'>Document Has Been Added. <a href='list-dInformation.php'>Click Here </a> For View List Document Informations</div>";
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
                                    <legend>Add New Document</legend>
                                    <?php echo $error; ?>
                                    <lebel>Document Name</lebel>
                                    <input class="form-control" name="heading" placeholder="Heading" type="text" required/>
                                    <lebel>Short Description</lebel>
                                    <input class="form-control" name="short-desc" placeholder="Short Description" type="text"/>
                                    <lebel>Description</lebel>
                                    <textarea name="content" class="form-control" reqiured></textarea>
                                    <lebel>Note</lebel>
                                    <textarea name="note" class="form-control"></textarea>
                                </div>
                            </div>
                            <br />	
                            <input class="btn btn-success" type="submit" name="submit" value="Save"  /> <input class="btn btn-success" type="button" name="cancel" value="Back" onclick="window.location='list-dInformation.php'"  />
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