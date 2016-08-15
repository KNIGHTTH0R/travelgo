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
<title>Kristal Tour Admin :: Change Password</title>
</head>
<?php
if(isset($_POST['submit'])) 
{
			$oldpass	= antiinjection(md5(md5(sha1($_POST['oldpass']))));
			$newpas1	= antiinjection(md5(md5(sha1($_POST['newpass1']))));
			$newpas2	= antiinjection(md5(md5(sha1($_POST['newpass2']))));
			
			
			$userdb		= $_SESSION['username'];
			$passdb		= $_SESSION['password'];
			$sql = mysql_query("select * from db_user where username='$userdb' AND password='$passdb'");
			$changepass=mysql_fetch_array($sql);
			
			
			if(empty($oldpass)){
				$error = "<div class='alert alert-danger'>Something wrong ! Please cek and try again.</div>";
			}
			elseif(empty($newpas1)){
				$error = "<div class='alert alert-danger'>Something wrong ! Please cek and try again.</div>";		
			}
			elseif(empty($newpas2)){
				$error = "<div class='alert alert-danger'>Something wrong ! Please cek and try again.</div>";		
			}
			elseif($newpas1 != $newpas2){
				$error = "<div class='alert alert-danger'>New Password and Re-type Password not same.</div>";	
			}
			elseif($oldpass != $changepass['password']){
				$error = "<div class='alert alert-danger'>Old Password you type Invailed.</div>";	
			}
			else{
					$sql1 = mysql_query("update db_user set password='$newpas1' where username='$userdb'");
					$error = "<div class='alert alert-success'>Your Password Has Been Changed</div>";
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
                                <div class="col-xs-5">
                                    <legend>Change Password</legend>
                                    <?php echo $error; ?>
                                    <lebel>Old Password</lebel> 
                                    <input class="form-control" name="oldpass" placeholder="Old Password" type="password" required />
                                    <lebel>New Password</lebel>
                                    <input class="form-control" name="newpass1" placeholder="New Password" type="password" required />
                                    <lebel>Re-type Password</lebel>
                                    <input class="form-control" name="newpass2" placeholder="Re-type Password" type="password" required/>
                                </div>
                            </div>
                            <br />	
                            <input class="btn btn-success" type="submit" name="submit" value="Change"  /> <input class="btn btn-success" type="button" name="cancel" value="Back" onclick="window.location='welcome-admin.php'"  />
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