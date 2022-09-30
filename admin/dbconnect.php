<?php
  $con = mysqli_connect('localhost','root','');
  if($con){
    echo 'connected successfully';
  }else{
    echo 'connected failed';
  }
  mysqli_select_db($con,'photograph');
 ?>