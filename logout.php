<?php include 'connection.php' ?>
<?php 
session_start();

$_SESSION = array();


session_destroy();

// Redirect to the login page or any other page after logging out
header("Location:home.php");
exit;

?>