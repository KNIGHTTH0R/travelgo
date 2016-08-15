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
<title>Kristal Tour Admin :: Add New Tips</title>
</head>
<?php
if(isset($_POST['submit'])) 
{
		$content 		= mysql_real_escape_string($_POST['content']);
		$post_date		= date("y-m-d");
		$post_time		= date("H:i:s");
		$error = "";
		
		if(empty($content)){
			$error = "<div class='alert alert-danger'>Tips is empty !</div>";
		}
		else{
			$sql = mysql_query("insert into tips values ('','$content','$post_date','$post_time')") or die(mysql_error());
			$error = "<div class='alert alert-success'>Tips Has Been Changed. <a href='list-tips.php'>Click Here</a> For List Tips</div>"; 	
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
                    	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="form" role="form">
                            <div class="row">
                                <div class="col-xs-6">
                                    <legend>Add New Tips</legend>
                                    <?php echo $error; ?>
                                  	<lebel>Tips</lebel>
                                    <textarea name="content" reqiured></textarea>
                                </div>
                            </div>
                            <br />	
                            <input class="btn btn-success" type="submit" name="submit" value="Save"  /> <input class="btn btn-success" type="button" name="cancel" value="Back" onclick="window.location='list-tips.php'"  />
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