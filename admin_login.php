<?php 

require "../system/class.php";
extract($_POST);


Login($email,$password,"admin");
?>