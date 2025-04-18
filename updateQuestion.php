


<?php
//require "Conn.php";



$nconn= new mysqli("localhost","detsconl_projectdb","detsconl_projectdb","detsconl_projectdb");



if(isset ($_POST['update'])){


extract ($_POST);


$update=$nconn->query(" UPDATE $table SET question='$question', option_a='$optionA', option_b='$optionB',option_c='$optionC',option_d='$optionD' ,correct_answer='$correctAnswer' WHERE id=$id");

if($update){

header("location:dashboard.php?url=tables");
}else{
echo $nconn->error;


}
}
?>