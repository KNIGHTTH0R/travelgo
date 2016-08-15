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
<title>Kristal Tour Admin :: Add New User</title>
</head>
<?php
if(isset($_POST['submit'])) 
{
			$name		= antiinjection($_POST['name']);
			$email		= antiinjection($_POST['email']);
			$username	= antiinjection($_POST['username']);
			$pass1		= antiinjection(md5(md5(sha1($_POST['password1']))));
			$pass2		= antiinjection(md5(md5(sha1($_POST['password2']))));
			$level		= "users";
			$error 		= "";
			
			
			$sql = "SELECT * FROM db_user";
			$q   = mysql_query($sql);
			$data = mysql_fetch_array($q);
			
			
			$email_exp = "/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/";
			if(!preg_match($email_exp,$email)) {
					$error = "<div class='alert alert-danger'>The Email Address you entered does not appear to be valid.</div>";
			}else{
				
				$string_exp = "/^[A-Za-z .'-]+$/";
				if(!preg_match($string_exp,$name)) {
						$error = "<div class='alert alert-danger'>The Name you entered does not appear to be valid.</div>";
				}else{
											
					if($username == $data['username']){
						$error = "<div class='alert alert-danger'>Please Input Another Username</div>";						
					}
					else{
							if(empty($name)){
								$error = "<div class='alert alert-danger'>Something wrong ! Please cek and try again.</div>";		
							}
							elseif(empty($email)){
									$error = "<div class='alert alert-danger'>Something wrong ! Please cek and try again.</div>";	
							}
							elseif(empty($pass1)){
									$error = "<div class='alert alert-danger'>Something wrong ! Please cek and try again.</div>";	
							}
							elseif(empty($pass2)){
									$error = "<div class='alert alert-danger'>Something wrong ! Please cek and try again.</div>";	
							}
							elseif(empty($username)){
									$error = "<div class='alert alert-danger'>Something wrong ! Please cek and try again.</div>";	
							}
							elseif($pass1 != $pass2){
									$error = "<div class='alert alert-danger'>Password and Re-Type Password Not Same</div>";		
							}
							else{
									$sql = mysql_query("insert into db_user values ('','$name','$email','$username','$pass1','$level')") or die (mysql_error());
									$error = "<div class='alert alert-success'>User Has Been Added. <a href='list-users.php'>Click Here </a> To Show List Users  </div>";
							}
			}
					
				
				}
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
                                <legend>Add New User</legend>
                                <?php echo $error; ?>
                                <lebel>Name</lebel> 
                                <input class="form-control" name="name" placeholder="Your Name" type="text" required />
                                <lebel>E-mail</lebel>
                                <input class="form-control" name="email" placeholder="E-mail" type="text" required />
                                <lebel>Username</lebel>
                                <input class="form-control" name="username" placeholder="Username" type="text"  required/>
                                <lebel>Password</lebel>
                                <input class="form-control" name="password1" placeholder="Password" type="password" required />
                                <lebel>Re-type Password</lebel>
                                <input class="form-control" name="password2" placeholder=" Re-type Password" type="password" required/>
                            </div>
                        </div>
                        <br />	
                        <input class="btn btn-success" type="submit" name="submit" value="Save"  /> <input class="btn btn-success" type="button" name="cancel" value="Back" onclick="window.location='list-users.php'"  />
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