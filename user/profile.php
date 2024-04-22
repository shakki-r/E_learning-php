
<?php include '../connection.php' ?>

<?php 
session_start();
if(isset($_SESSION['email'])){
    $email = $_SESSION['email'];
   
    $get_query = "SELECT * FROM users WHERE email='$email'";
    $get_query_run = mysqli_query($connect, $get_query);
  
   
    $row = mysqli_fetch_assoc($get_query_run);
   

        // $name=$row['name'];
        // $phone=$row['phone'];
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
        }

        .profile-info {
            margin-bottom: 20px;
        }

        .profile-info p {
            margin: 10px 0;
        }

        .btn-container {
            text-align: center;
        }

        .btn {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>User Profile</h1>
    <div class="profile-info">
        <?php 
         if($row){

        echo "<p><strong>Name:</strong> {$row['name']} </p>";
        echo "<p><strong>Email:</strong> {$row['email']}</p>";
        echo "<p><strong>Age:</strong> 30</p>";
        echo "<p><strong>Phone:</strong> {$row['phone']}</p>";


      
         }
        ?>
      
    </div>

   
    <div class="btn-container">
        <a href="edit_profile.php" class="btn">Edit </a>
        <a href="../logout.php" class="btn">Logout</a>
    </div>
</div>

</body>
</html>
