
<?php

include('connection.php');    //include can work without exception handling while require on finding error will stop file's execution





if(isset($_POST['btn'])){
  $firstName=$_POST['fName'];
  $lastName=$_POST['lName'];
  $email=$_POST['email'];
  $password=$_POST['password'];
  $password=md5($password);

   $checkEmail="SELECT * From users where email='$email'";
   $result=$con->query($checkEmail);
   if($result->num_rows>0){
      echo "Email Address Already Exists !";
   }
   else{
      $insertQuery="INSERT INTO users(firstName,lastName,email,password)
                     VALUES ('$firstName','$lastName','$email','$password')";
          if($con->query($insertQuery)==TRUE){
              header("location: login.php");
          }
          else{
              echo "Error:".$con->error;
          }
   }

}




// if(isset($_POST['btn']))
// {
//   $firstName=$_POST['fName'];
//     $lastName=$_POST['lName'];
//     $email=$_POST['email'];
//     $password= password_hash($_POST['password'],PASSWORD_BCRYPT); 

// $q= "insert into users (firstName,lastName,email,password) values ('$firstName','$lastName','$email','$password')";

// if ($con->query($q) === TRUE) {
//   echo "Registration successful!";
// } else {
//   echo "Error: " . $q . "<br>" . $con->error;
// }

// $con->close();

?>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registeration Page</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/register.css">
    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/jquery.js"></script>
  
</head>
<body>
 
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card">
          <div class="card-body">
          <form action="register.php" method="post">
            <h3 class="card-title text-center">Register Now!</h3>
            <form id="signupForm">
              <div class="form-group">
                <label for="name">First Name</label>
                <input type="text" class="form-control" id="name" name="fName" placeholder="First Name" required>
              </div>
              <div class="form-group">
                <label for="name">Last Name</label>
                <input type="text" class="form-control" id="name" name="lName" placeholder="Last Name" required>
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
              </div>
              <input type="submit" name="btn" value="Sign Up"  class="btn btn-primary btn-block" >
              <!-- <button type="submit" class="btn btn-primary btn-block">Sign Up</button> -->
              <p>Already have an account? <button type="button" class="btn btn-secondary" onclick="redirectTologin()">Login</button></p>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>


  <script>
    
    function redirectTologin() {

      window.location.href = "login.php";
    }
    $(document).ready(function() {
      $('#signupForm').submit(function(event) {
        event.preventDefault();
        var Username = $('#name').val();
        var email = $('#email').val();
        var password = $('#password').val();
        var confirmPassword = $('#confirmPassword').val();
        
        if (password !== confirmPassword) {
          alert("Passwords do not match!");
          return;
        }
        
        // Perform further actions like AJAX request for signup
        
        alert("Sign up successful!\nUsername: " + username + "\nEmail: " + email);
      });
    });
  </script>
</body>
</html>
