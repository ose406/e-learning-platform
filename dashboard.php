<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php 

require "header.php";


	?>


<link rel="stylesheet" href="bootstrap.min.css">
<style>
	ul{
		padding: 10px;
		margin-right: 10px;
	}
	ul li{
		margin: 10px;
		list-style-type: none;
	}
	ul li a{
		color: white;
	}
</style>
	<div class="container">
		
			
		
		<div class="row">

<div class="col-md-12 bordered" style="border:1px solid whitesmoke; margin-left:10px;">
<?php 
 if(isset($_GET['url'])){
      $url=$_GET['url'];
	 require $url. ".php";
 }



?>

</div>
		</div>
	</div>
</body>
</html>