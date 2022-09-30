<?php
include 'dbconnect.php';
if(isset($_POST['submit'])){
  $fname = $_POST['form-fname'];
  $lname = $_POST['form-lname'];
  $email = $_POST['form-email'];
  $password = $_POST['form-password'];
  $cpassword = $_POST['form-cpassword'];

  date_default_timezone_set('Africa/Kigali');
  $date = date('y-m-d h:i:s a', time());

  if($password == $cpassword){
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($con, $sql);
    if(!$result->num_rows > 0){
        $sql = "INSERT INTO users(fname,lname,email,passwords) VALUES ('$fname','$lname','$email','$password')";
        $result = mysqli_query($con, $sql);
        if($result){
            echo " <script>alert('WOW! User successfully Registered'</script> ";
        }
        else{
            echo " <script>alert('Something went wrong')</script> ";
        }
    }
    else{
            echo " <script>alert('Email already exist')</script> ";
    }
  }
  else{
            echo " <script>alert('Password do not match')</script> ";
  }
}
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link rel="stylesheet" type="" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="./bootstrap-5.0.2-dist//bootstrap-5.0.2-dist/css">
</head>
<body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#nature">Nature</a>
          <a class="dropdown-item" href="#architecture">Architecture</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      
    </ul>

  </div>
</nav>


   <section class="my-4">
  <div class="py-4">
    <h2 class="text-center">Sign Up Here</h2>
  </div>
  <div class="w-50 m-auto">

    <form action="" method="POST">
      <div class="form-group">
        <label>First Name:</label>
        <input type="text" name="form-fname" class="form-control" required>
      </div>
      <div class="form-group">
        <label>Last Name:</label>
        <input type="text" name="form-lname" class="form-control" required>
      </div>
       <div class="form-group">
        <label>Email:</label>
        <input type="email" name="form-email" class="form-control" required>
      </div>
       <div class="form-group">
        <label>Password:</label>
        <input type="password" name="form-password" class="form-control" required>
      </div>
      <div class="form-group">
        <label>Confirm Password:</label>
        <input type="password" name="form-cpassword" class="form-control" required>
      </div>
      <button  type="submit" name="submit" class="btn btn-primary btn-lg btn-block">Login</button>
      <p>Have an account? <a href="./index.php">Sign In Here</a></p>
    </form>
    
  </div>
</section>

      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>