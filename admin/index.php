<?php ob_start(); ?>
<?php $error = ""; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Kristal Tour Login :: Administrator</title>
<link href="css/login.css" rel="stylesheet">
</head>
<?php
		if(isset($_POST['login']) == "submit"){
					
					include("inc/connection.php");
					include("inc/anti-injection.php");
					
					$username = antiinjection($_POST['username']);
					
					//Commented by Nathan 20150822
					//$password = antiinjection(md5(md5(sha1($_POST['password']))));
					$password = md5($_POST['password']);
					
					if(empty($username)){
							$error = "<div class='alert'>Username is empty !</div>";	
					}
					elseif(empty($password)){
							$error = "<div class='alert	'>Password is empty !</div>";			
					}	
					else
					{
							
							$sql = mysql_query("SELECT * FROM db_user WHERE username='$username' AND password='$password'") or die (mysql_error());							
							$data = mysql_fetch_array($sql);
									
							if($username == $data['username'] && $password == $data['password']){
								session_start();
								$_SESSION['username'] = $username;
								$_SESSION['password'] = $password;
								$_SESSION['level'] = $data['level'];
								header("location:welcome-admin.php");			
							}
							else{
								$error = "<div class='alert'>Username And Password Invalid.</div>";
							}		
					}	
		}
?>
<body>
<form action="<?php $_SERVER['PHP_SELF']; ?>" class="form-container" method="post">
	<div class="form-title"><h2>Administrator</h2></div>
    	<?php echo $error; ?>
		<div class="form-title">Username</div>
			<input class="form-field" type="text" name="username" /><br />
		<div class="form-title">Password</div>
			<input class="form-field" type="password" name="password" /><br />
		<div class="submit-container">
			<input class="submit-button" type="submit" value="Login" name="login" />
		</div>
</form>
</body>
</html>
<?php ob_flush(); ?>