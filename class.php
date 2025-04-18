
       <?php 


    
       require "../Conn.php";
       
       
       
        
    
    function insertUser($name,$email,$phone,$dob,$gender,$address,$country,$city,$region,$postal,$password){
  //  $connection=  mysqli("localhost","detsconl_projectdb","detsconl_projectdb","detsconl_projectdb");
       
       
       require "../Conn.php";
       
       
    
       $insert=mysqli_query($conn,"INSERT INTO users 
        
(`name`,`email`,`phone`, `date_of_birth`,`gender`,`address`,`country`,`city`,`region`, `postal_code`,`password`) 
           VALUES('$name','$email','$phone','$dob','$gender','$address','$country','$city','$region','$postal','$password')");
   if($insert){
    $response=["Response"=>"Registration Successful","password"=>$password];
    echo json_encode($response);
    // echo 1;
   }
}
function Login($email,$password,$table){

//$connection= new mysqli("localhost","detsconl_projectdb","detsconl_projectdb","detsconl_projectdb");
       
       require "../Conn.php";
       
       


  $login=mysqli_query($conn,"SELECT * FROM $table WHERE email='$email' AND password='$password'");
  if(mysqli_num_rows($login)>0){
    session_start();
    $_SESSION['email']=$email;
   
  echo 1;
  }else{
    echo 0;
  }
}
function FeedBack($email){

$connection= new mysqli("localhost","detsconl_projectdb","detsconl_projectdb","detsconl_projectdb");
       
       require "../Conn.php";
       
       

global $conn;
  $feed=mysqli_query($conn,"SELECT * FROM feed_back WHERE email='$email'");
  if(mysqli_num_rows($feed)>0){

  return $feed;
}else{
  echo "<h2 class='text-danger text-center'>No Review Found For You</h2>";
}
}
function AddFeedBack($email,$review){

global $connection;
$connection= new mysqli("localhost","detsconl_projectdb","detsconl_projectdb","detsconl_projectdb");
       
       require "../Conn.php";
       
       
  $i=mysqli_query($conn,"INSERT INTO feed_back (email,request) VALUES('$email','$review')");
if($i){
  echo 1;
}
echo $connection->error;
}
function Logout($url){

  session_unset();
  session_destroy();
  echo "<script>window.location='$url';</script>";
}
function getReview($table){
$connection= new mysqli("localhost","detsconl_projectdb","detsconl_projectdb","detsconl_projectdb");
       
       require "../Conn.php";
       
       

$q= mysqli_query($conn,"SELECT * FROM $table");
if(mysqli_num_rows($q)>0){
  return $q;
}else{
  echo "<h1 class='text-center'>No Record Found</h1>";
}
}
function getUsers($table){

$connection= new mysqli("localhost","detsconl_projectdb","detsconl_projectdb","detsconl_projectdb");
       
       
       require "../Conn.php";
       


global $connection;
  $t=mysqli_query($conn,"SELECT * FROM users");
  if(mysqli_num_rows($t)>0){
    return $t;
  }
  else{
  echo "<h1 class='text-center'>No Record Found</h1>";
}
}
function sendResponse($id,$response){

$connection= new mysqli("localhost","detsconl_projectdb","detsconl_projectdb","detsconl_projectdb");
       
       
       require "../Conn.php";
       


  $send=mysqli_query($conn,"UPDATE feed_back SET response='$response' WHERE id='$id' AND response IS NULL");
  if($send){
    echo 1;
  }else{
    echo mysqli_connect_error($conn);
  }
}
