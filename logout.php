<?php 
session_start();
session_unset();
session_destroy();
//$db= new System();

header("location:index.html");
?>