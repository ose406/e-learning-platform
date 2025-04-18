<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="../Codeonline.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link rel="stylesheet" href="../bootstrap.min.css">

</head>

<body>
<style>
	img{
		width: 30px;
		height: 30px;
		margin-left: 80px;
		margin-top: 20px;
		
	}
	div.loader{
		width: 200px;
		margin: 0 auto;
		display: none;
	}
</style>
	<div class="row">

		<div class="col-lg-3 col-md-1">

		</div>


		<div class="col-lg-6 col-md-10">

			<section class="LoginForm">
				<h5
					style="font-size:20px; font-weight:bold; font-family:sans-serif; color:#0059b3; text-align:center; margin-top:px;">
					Login Form</h5>
				<form class="LoginForm1">

					<div class="checkboxx">
						<input type="text" class="email" name="email" placeholder="Email or Phone" required><br>
					</div>

					<div class="checkboxx">
						<input type="text" class="password" name="password" placeholder="Password" required><br>
					</div>

					<label><input type="checkbox">Forgot Password?</label><br>
					<button type="button" class="btn">Login</button>
					<div class="loader">
						<img src="../img/arrows.gif" alt="">
					</div>
				<!-- 	<p>Don't have an account?<a href="registration.html">Signup now</a></p> -->
				</form>
			</section>
<div class="success">

</div>
		</div>

		<div class="col-lg-3 col-md-1">

		</div>

	</div>
	<div class="toast-container position-fixed bottom-0 end-0 p-3">
  <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-header">
      <img src="..." class="rounded me-2" alt="...">
      <strong class="me-auto">Login Response</strong>
      <!-- <small>11 mins ago</small> -->
      <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
    <div class="toast-body">
      <h1 class="text-center text-success">Login Successfull</h1>
    </div>
  </div>
</div>
<?php require "../footer.php";?>
	<script src="../jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
		crossorigin="anonymous"></script>
	<script>

		const loader = $(".loader");
		$(".btn").on("click", function (e) {
			loader.css({ "display": "block" });
			setTimeout(function () {
				$.ajax({
					type: "POST",
					url: "admin_login.php",
					data: "email="+$(".email").val()+"&password="+$(".password").val(),
					success: function (response) {
						console.log(response);
						if(response==1){
							const toastLiveExample = document.getElementById('liveToast')
			const toastBootstrap = bootstrap.Toast.getOrCreateInstance(toastLiveExample)
							// $(".success").text("Login Successful");

							// $(".success").css({"color":"green","padding":"10px"});
							toastBootstrap.show();
							setTimeout(function(){
                            window.location="dashboard.php?url=review";
							},4000)
						}
						loader.css({ "display": "none" });
					},
					error: function (error) {
						loader.css({ "display": "none" });
						console.log(error);
					}
				})
			}, 4000);
		});
	</script>
</body>

</html>