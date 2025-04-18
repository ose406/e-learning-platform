<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="bootstrap.min.css">
	<title>Document</title>
	<style>
		.hidden{
			display: none;
		}
	</style>
</head>
<body>
	<div class="container">
		<h1>Exercises</h1>
		 <div class="exercise_2">
    <h3>Exercise 2</h3>
    <p>Declare two variables, y and z, and assign them the values 20 and 30 respectively.</p>
    <p id="result2"></p>
    <div class="form-group">
    	
    <textarea id="exercise2" class="form-control"></textarea><br/>
    </div>
    <div class="form-group d-flex">
    	
    <button onclick="checkExercise2()" class="btn btn-primary">Submit</button>
    <a href="variableE3.php" class="btn btn-success next hidden">Next</a>
    </div>
  </div>
	</div>
	<script>
		 function checkExercise2() {
      var answer = document.getElementById("exercise2").value;
      if (answer.trim() === "y = 20; z = 30;") {
        document.getElementById("result2").innerHTML = "Correct!";
      setTimeout(function(){
        // document.querySelector(".exercise_2").classList.add("hidden");
       document.querySelector(".next").classList.remove("hidden"); 
        },5000);  
        
      } else {
        document.getElementById("result2").innerHTML = "Incorrect. The correct answer is y = 20; z = 30;";
      }
    }
	</script>
</body>
</html>