<?php 

var_dump($_POST);
extract($_POST);



require "Conn.php";

$login=mysqli_query($conn,"SELECT * FROM users WHERE email='$email' AND password='$password'");
  if(mysqli_num_rows($login)>0){
    session_start();
    $_SESSION['email']=$email;
   
  header("location: profile.php");
  }else{
    header ("location: login.html");
  }
