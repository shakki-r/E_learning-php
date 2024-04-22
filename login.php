
<?php include 'connection.php' ?>
<?php 
session_start();
    // Assuming $connect is your database connection

if(isset($_SESSION['email'])){
    header('Location:home.php');
}


    $password_error=true;
    $email_error=true;
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $email=$_POST['email'];
        $user_password=$_POST['password'];
        
        
       

       
        $query="SELECT * FROM users WHERE email='$email'";
        $query_run=mysqli_query($connect, $query);
        
        // Check if any rows were returned
        $number=mysqli_num_rows($query_run);
        
        if($number > 0){
            // Loop through the results (assuming you expect multiple rows)
            while($row = mysqli_fetch_array($query_run)){
                // Retrieve hashed password from the database
                $hashed_password = $row['password'];

                // Verify the entered password against the hashed password
                if(password_verify($user_password, $hashed_password)){
                    // Update user_login to true for the user with the correct password
                    $update_query = "UPDATE users SET user_login=true WHERE id={$row['id']}";
                    $update_query_run = mysqli_query($connect, $update_query);
                    $_SESSION['email']=$row['email'];

                    if($update_query_run){
                        if($row['is_admin']){
                            header('Location:admin/admin.php');
                        }else{
                            header('Location: home.php');
                        }
                        // Redirect user to home page after successful login
                       
                        exit; // Make sure to exit after redirecting
                    } else {
                        echo "Error updating user_login status.";
                    }
                } else {
                    $password_error=false;
                   
                }
            }
        } else {
            $email_error=false;
          
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .login-container {
            width: 300px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .login-container h2 {
            text-align: center;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
        }

        .form-group input {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        .form-group input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            cursor: pointer;
        }
    </style>
</head>

<body>

    <div class="login-container">
        <h2>Login</h2>
        <form action="login.php" method="POST" id="form">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="email" id="username" name="email">
                <div id="content"></div>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password">
            </div>
            <?php 
            
            if(!$email_error){
                echo "  <p>email does not exists</p>";
            }
            elseif(!$password_error){
                echo "  <p>password is incorrect</p>";
               }
           
            ?>
           
            <div class="form-group">
                <input type="submit" value="Login">
            </div>
        </form>

       <p>Forgot Password? <a href=""> click here</a></p> 
    </div>


   

    <!-- <script>
        let xhr = new XMLHttpRequest()

        username = document.querySelector('#username')
        form_submission = false;
        // console.log(username);

        username.addEventListener('keyup', () => {
            xhr.open('GET', 'fetch_data.php', true);
            xhr.send();
            xhr.onreadystatechange = () => {
                if (xhr.readyState == 4) {
                    if (xhr.status == 200) {
                        let restext = JSON.parse(xhr.responseText);
                        // console.log(restext);
                        content.innerHTML = ''
                        restext.forEach(element => {
                            if (username.value == "") {
                                content.innerHTML = "required";
                                form_submission = false
                            }

                            else if (element.username == username.value) {
                                content.innerHTML = "username already exists";
                                form_submission = false
                            }
                            else {
                                form_submission = true
                            }


                            // content.appendChild(para)

                        });



                    }

                }
            }
        })


        let form = document.getElementById('form')

        form.addEventListener('submit', (event) => {
            event.preventDefault();
            if (form_submission) {
                console.log('work your way');
                if (event.target.password.value) {
                    window.location.href = 'home.html';
                }

            }
        })

    </script> -->
</body>

</html>