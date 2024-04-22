<?php include 'connection.php' ?>

<?php 
session_start();

// if(isset($_SESSION['email'])){
//   $email=$_SESSION['email'];
//   $query="SELECT * FROM users WHERE email='$email'";

//   $query_run=mysqli_query($connect,$query);
  
//   while($row=mysqli_fetch_array($query_run)){
//     echo $row['name'];
//   }
//   $row = mysqli_fetch_array($query_run);
//   if ($row) {
//     // Access the 'name' column directly
//     echo $row['name'];
//   }
// }




?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>

<header id="header" class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <!-- Navbar toggler for mobile (moved to the start) -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <a class="navbar-brand" href="home.php">
      <img src="assets/img/LOGOTRY.jpg" alt="Logo" class="img-fluid" style="max-height: 50px;">
    </a>

    <!-- Navbar items -->
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="home.php#courses">Courses</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="home.php#about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#footer">Contact</a>
        </li>
      </ul>
    </div>

    <!-- Button group -->

   <?php 
   if(isset($_SESSION['email'])){
    
    ?>
   <div class="ms-auto d-flex align-items-center">
      <a href="logout.php" class="btn btn-outline-success me-2">Logout</a>
      <a href="user/profile.php" class="btn btn-success">Profile</a>
    </div>
   
   
   <?php
    

    }
    else{


  
   ?>
  <div class="ms-auto d-flex align-items-center">
      <a href="login.php" class="btn btn-outline-success me-2">Login</a>
      <a href="#register" class="btn btn-success">Register</a>
    </div>
<?php 

}
?>
   



   
  </div>
</header>

<!-- Bootstrap 5 JavaScript and dependencies -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/edu.js"></script>
</body>
</html>
