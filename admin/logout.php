<?php
session_start();

session_destroy();
setcookie("username", "", time()-1000);

header("location:index.php");

?>