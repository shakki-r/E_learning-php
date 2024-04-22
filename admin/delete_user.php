<?php include '../connection.php' ?>
<?php 
if(isset($_GET['id'])){
    $id=$_GET['id'];
   $query="DELETE FROM users WHERE id='$id'";
   $query_run=mysqli_query($connect,$query);

   if($query_run){
   header('Location:manage_user.php');

   }
}


?>