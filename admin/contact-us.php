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
<title>Kristal Tour Admin :: Contact Us</title>
</head>
<?php
if(isset($_POST['submit'])) 
{
		$id 			= abs(antiinjection($_GET['id']));
		$subject 		= antiinjection($_POST['subject']);
		$email		 	= antiinjection($_POST['email']);
		$error = "";
		
		
		$email_exp = "/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/";
		if(!preg_match($email_exp,$email)) {
			$error = "<div class='alert alert-danger'>The Email Address you entered does not appear to be valid.</div>";
		}else{
				
				if(empty($subject)){
				$error = "<div class='alert alert-danger'>Something wrong ! Please cek and try again.</div>";
				}
				elseif(empty($email)){
					$error = "<div class='alert alert-danger'>Something wrong ! Please cek and try again.</div>";
				}
				else{
				$sql = mysql_query("update mail_to set subject='$subject', mail_to='$email' where id_mail_to='$id'") or die(mysql_error());
					$error = "<div class='alert alert-success'>Contact Us Has Been Changed.</div>";
				}	
		}		
}
?>
<?php			
		$sql1 = mysql_query("select * from mail_to ORDER BY id_mail_to DESC limit 1") or die (mysql_error());
		$contact=mysql_fetch_array($sql1);
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
                    	<form action="<?php echo $_SERVER['PHP_SELF']."?id=".$contact['id_mail_to']; ?>" method="post" class="form" role="form">
                            <div class="row">
                                <div class="col-xs-6">
                                    <legend>Contact Us</legend>
                                    <?php echo $error; ?>
                                    <lebel>Subject</lebel> 
                                    <input class="form-control" name="subject" placeholder="Subject" type="text" value="<?php echo $contact['subject']; ?>" required />
                                    <lebel>To E-mail</lebel>
                                    <input class="form-control" name="email" placeholder="E-mail" type="text" value="<?php echo $contact['mail_to']; ?>" required/>
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