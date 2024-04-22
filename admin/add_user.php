<?php include '../connection.php' ?>
<?php 


?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>User Registration Form</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
    }
    .container {
        max-width: 500px;
        margin: 50px auto;
        background: #fff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    .form-group {
        margin-bottom: 20px;
    }
    label {
        display: block;
        font-weight: bold;
    }
    input[type="text"],
    input[type="email"],
    input[type="tel"],
    input[type="password"],
    select {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }
    input[type="checkbox"] {
        margin-top: 5px;
    }
    button {
        padding: 10px 20px;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }
    button:hover {
        background-color: #0056b3;
    }
</style>
</head>
<body>

<div class="container">
    <h2>User Registration Form</h2>
    <form action="#" method="post">
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name"  required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email"  required>
        </div>
        <div class="form-group">
            <label for="phone">Phone:</label>
            <input type="tel" id="phone" name="phone"   required>
        </div>
        <div class="form-group">
            <label for="user_login">User_Login:</label>
 
            <select name="user_login">
            <option  value="0" >No</option>
                <option value="1" >yes</option>
            </select>
        </div>
        <div class="form-group">
            <label for="is_admin">Admin:</label>
            <select name="is_admin">
            <option  value="0" >No</option>
                <option value="1" >yes</option>
               
            </select>
        </div>
        <button type="submit" name="submit">Register</button>
    </form>
</div>

</body>
</html>

<?php
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $is_admin=$_POST['is_admin'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $user_login=$_POST['user_login'];

    
    

    $query="INSERT INTO  users (name,email,phone,user_login,is_admin) VALUES('$name','$email',$phone,'$user_login','$is_admin') ";
    $query_run=mysqli_query($connect,$query);
    if($query_run){
        header('Location:manage_user.php');
    }
    
}


?>