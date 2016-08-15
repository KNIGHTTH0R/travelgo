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
<title>Kristal Tour Admin :: Office Address</title>
</head>
<?php
if(isset($_POST['submit'])) 
{
		$id				= antiinjection($_GET['id']);
		$content 		= ($_POST['content']);
		$post_date		= date("y-m-d");
		$post_time		= date("H:i:s");
		$error = "";
		
		if(empty($content)){
			$error = "<div class='alert alert-danger'>Something wrong ! Please check and try again.</div>";
		}
		else{
			$sql = mysql_query("update base_address set content='$content' where id_baseaddress='$id'") or die(mysql_error());
			$error = "<div class='alert alert-success'>Base Address Have Been Changed</div>"; 	
		}		
}
?>
<?php
			$sql1 = mysql_query("select * from base_address ORDER BY id_baseaddress DESC limit 1") or die(mysql_error());
			$address=mysql_fetch_array($sql1);
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
                    	<form action="<?php echo $_SERVER['PHP_SELF']."?id=".$address['id_baseaddress']; ?>" method="post" class="form" role="form">
                            <div class="row">
                                <div class="col-xs-6">
                                    <legend>Office Address</legend>
                                    <?php echo $error; ?>
                                    <textarea name="content" reqiured><?php echo $address['content']; ?></textarea>
                                </div>
                            </div>
                            <br />	
                            <input class="btn btn-success" type="submit" name="submit" value="Save"  /> <input class="btn btn-success" type="button" name="cancel" value="Back" onclick="window.location='welcome-admin.php'"  />
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