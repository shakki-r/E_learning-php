<?php include '../connection.php' ?>
<?php
session_start();

if(isset($_SESSION['email'])){
    $email=$_SESSION['email'];

    $query="SELECT * FROM users WHERE email='$email'";
    $query_run=mysqli_query($connect,$query);

    $value=mysqli_fetch_array($query_run);

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <style>
        /* Your CSS styles here */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 400px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
        }

        form {
            margin-top: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="email"],
        input[type="number"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            width: 100%;
            background-color: #007bff;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Edit User</h1>
    <form action="" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="<?php echo $value['name']; ?>" required><br>
       
        <label for="phone">Phone:</label>
        <input type="text" id="phone" name="phone" value="<?php echo $value['phone']; ?>" required><br>

        <input type="submit" name="submit" value="Save Changes">
    </form>
</div>

</body>
</html>
<?php 

if(isset($_POST['submit'])){
$name=$_POST['name'];
$phone=$_POST['phone'];

$query="UPDATE users SET name='$name',phone='$phone' where email='$email' ";
$query_run=mysqli_query($connect,$query);
if($query_run){
    header('Location:profile.php');
}

}

?>