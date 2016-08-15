<?php
		include("inc/validasi-login.php");
		if($_SESSION['level'] == "users"){header("location:slide.php");}
		include("inc/anti-injection.php");
		include("inc/connection.php");
		$error = "";
		error_reporting(0);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin :: List Users</title>
</head>
<body>
<!-- Header -->
<div class="row">
		<?php include("inc/header.php"); ?>
</div>
<!-- Header -->
<br /> <br /> <br /> 
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
                  <legend>List Users</legend>
<div class="datagrid">
<table class="CSSTableGenerator">
                        <tr>
                            <td><strong>No.</strong></td>
                            <td><strong>Name</strong></td>
                            <td><strong>Email</strong></td>
                            <td><strong>Username</strong></td>
                            <td><strong>Level</strong></td>
                            <td></td>
                        </tr>
	
			<?php
						  		$no=0;
						  		$sql = mysql_query("select * from db_user") or die (mysql_error());
								while($users=mysql_fetch_array($sql)){
									$no++;
						  ?>
                          <tr>
                          	<td id="tdnomer"><?php echo $no; ?></td>
                            <td><?php echo $users['name_user']; ?></td>
                            <td><?php echo $users['email']; ?></td>
                            <td><?php echo $users['username']; ?></td>
                            <td><?php echo $users['level']; ?></td>
                            <td id="tdact"><a href="edit-users.php?id=<?php echo $users['id_user']; ?>">Edit</a> || <a onclick="return confirm('Are You Sure Delete This Users ?')" href="delete-users.php?id=<?php echo $users['id_user']; ?>">Delete</a></td>
                          </tr>
                          <?php
								}
						  ?>
</table>
</div>                   
                       <br/>   
                       <a href="add-new-users.php" class="list">Add New Users</a>
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