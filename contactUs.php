<?php
  $con = mysqli_connect('localhost','root','');
  if($con){
    echo 'connected successfully';
  }else{
    echo 'connected failed';
  }
  mysqli_select_db($con, 'photograph');

  $name = $_POST['form-names'];
  $email = $_POST['form-emails'];
  $phone = $_POST['form-phones'];
  $message = $_POST['form-message'];

  $query = "INSERT INTO contacts(email,names,phone,message) VALUES ('$name','$email','$phone','$message')";
  mysqli_query($con, $query);
  header('LOCATION:index.php#contact');
 ?>