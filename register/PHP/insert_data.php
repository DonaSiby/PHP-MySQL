<?php
include 'index.html';
include 'config.php';
if(isset($_POST["submit"])){
  $first_name = $_POST['firstname'];
  $last_name = $_POST['lastname'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $confirm_password = $_POST['confirmpass'];

  $sql = "INSERT INTO register (first_name,last_name,email,password,confirm_pass) VALUES ('$first_name','$last_name','$email','$password','$confirm_password')";
  $res = mysqli_query($conn, $sql);

  if($res){
    echo '<script>alert("Detailes added")</script>';
  }
  else{
    die("Error: " . mysqli_error($conn));
  }
  mysqli_close($conn);
}
?>