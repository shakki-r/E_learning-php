<?php include 'connection.php' ?>
<?php


if ($_SERVER['REQUEST_METHOD'] == 'POST') {


  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $password = $_POST['password'];

  $hash_password = password_hash($password, PASSWORD_DEFAULT);

  $query = "select * from users where email='$email'";
  $result = mysqli_query($connect, $query);
  if (mysqli_num_rows($result) > 0) {

  

  } else {
    
    $query = "INSERT INTO users(name,email,phone,password) VALUES('$name','$email',$phone,'$hash_password')";

    $result = mysqli_query($connect, $query);
  }

}



?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration Form</title>
  <!-- Bootstrap CSS -->
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->

</head>

<body>

  <div class="container-fluid d-flex justify-content-center align-items-center" style="min-height: 100vh;"
    id='register'>
    <div class="container mt-5">
      <div class="row">
        <div class="col-md-6 mb-3">
          <img src="assets/img/regimg.jpg" class="w-100 img-fluid" alt="Registration Image">
        </div>
        <div class="col-md-6">
          <div class="card rounded">
            <div class="card-header">
              <h2 class="text-center">Registration Form</h2>
            </div>
            <div class="card-body">
              <form action="" method="post" id='form'>
                <div class="form-group mb-3">
                  <input type="text" class="form-control rounded-pill" id="name" placeholder="Full Name" name="name"
                    required>
                </div>
                <div class="form-group mb-3" id='email_box'>
                  <input type="email" class="form-control rounded-pill" id="email" placeholder="Email" name="email"required
                    >
                    <p id="error" class="ps-3  fs"></p>


                      <script>
                        const xhr = new XMLHttpRequest();
                        let error=document.getElementById('error');
                        let email=document.querySelector('#email')
                        form_submission = false;
                        email.addEventListener('keyup', ()=>{
                          xhr.open('GET','fetch_data.php',true)
                          xhr.send();
                          xhr.onreadystatechange =()=>{
                            if(xhr.readyState==4 && xhr.status==200){
                              let restext = JSON.parse(xhr.responseText);
                              error.innerHTML='';
                              form_submission = true
                              restext.forEach(element => {
                               
                                if(email.value===''){
                                  error.innerHTML='email must be required';
                                  form_submission = false
                                }
                                else if(element.email===email.value){
                                  error.innerHTML='already exists';
                                  form_submission = false
                                }
                              
                                  
                                
                              });
                            
                                
                            }
                          } 
                        })
                        let form = document.getElementById('form')

          form.addEventListener('submit', (event) => {

              if (!form_submission) {
                event.preventDefault();
              }
            
          })
                      
                      </script>
                


                </div>
                <div class="form-group mb-3">
                  <input type="tel" class="form-control rounded-pill" id="phone" placeholder="Phone" name="phone"
                    required>
                </div>
                <div class="form-group mb-3">
                  <input type="password" class="form-control rounded-pill" id="password" placeholder="Password"
                    name="password" required>
                </div>
                <button type="submit" class="btn btn-success rounded-pill btn-block w-100 ">Submit</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



  <!-- Bootstrap JS -->
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->

</body>

</html>