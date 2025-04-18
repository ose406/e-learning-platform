
<?php 
require "header.php";
if(isset($_GET['id'])){
	$id=$_GET['id'];
}



?>
<link rel="stylesheet" href="../bootstrap.min.css">
<div class="col-md-10 m-auto">
<form action="send.php" method="post">
	<div class="form-group">
		<input type="hidden" name="email" id="email" value="<?php echo $id;?>">
	</div>
	<div class="form-group">
		<textarea name="review" id="review" cols="50" rows="5"></textarea>
	</div>
	<div class="form-group">
		<button class="btn btn-primary" type="submit">Send</button>
	</div>
	</form>
	<script src="../jquery.min.js"></script>
	<script>
		document.querySelector(".btn").addEventListener("click",function(){
setTimeout(function(){
	$.ajax({
		url:"send.php",
		type:"POST",
		data:"id="+$("#email").val()+ "&response="+$("#review").val(),
		success:function(r){
			console.log(r);
		},
		error:function(re){
			console.log(re);
		}
	})
});
		});
	</script>
</div>