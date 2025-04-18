
<link rel="stylesheet" href="bootstrap.min.css">


<?php 

require "../system/class.php";

extract($_POST);


// var_dump($_POST);

require "../Conn.php";
       


  $send=mysqli_query($conn,"UPDATE feed_back SET response='$response' WHERE id='$id' AND response IS NULL");
  if($send){
   // header("location:dashboard.php?url=review");
 
 echo "<p class='text-center fs-1'>Review Sent <br/><a href='profile.php?url=feedback' class='text-center'>Click here to go back</a></p>";
 
 
  }else{
   header("location: dashboard.php?url=review");
  }





?>


<style>
p{
padding:30px;
font-size:28px;

}

</style>