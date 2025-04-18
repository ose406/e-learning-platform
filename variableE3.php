<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="bootstrap.min.css">
<style>
	.hidden{
		display: none;
	}
	pre{
		color: white;
		background-color: black;
	}
</style>
	<title>Document</title>
</head>
<body>
	<div class="container">
		<h1>Learning Variables</h1>
  <p>A variable is a container that holds a value. You can think of it as a labeled box where you can store a value.</p>
  <p>In programming, variables are used to store and manipulate data. You can assign a value to a variable using the assignment operator (=).</p>
  <p>For example:</p>
  <pre>
    x = 5;
    y = "Hello";
  </pre>
  <p>In this example, we assign the value 5 to the variable x and the string "Hello" to the variable y.</p>

  <h2>Exercises</h2>
	 <div class="form-group">
    <h3>Exercise 3</h3>
    <p>Assign the value of y to x.</p>
    <p id="result3"></p>
  </div>
	<div class="container">
		<div class="form-group">
    <textarea id="exercise3" class="form-control"></textarea><br/>
			
		</div>
		<div class="form-group d-flex">
    <button onclick="checkExercise3()" class="btn btn-primary">Submit</button>
    <a href="variableE4.php" class="btn btn-success next hidden ml-5">Next</a>
			
		</div>
	</div>
	</div>
	<script>
		  function checkExercise3() {
      var answer = document.getElementById("exercise3").value;
      if (answer.trim() === "x = y;") {
        document.getElementById("result3").innerHTML = "Correct!";
        
    setTimeout(function(){
        // document.querySelector(".next").classList.add("hidden");
       document.querySelector(".next").classList.remove("hidden"); 
        },5000);      
      } else {
        document.getElementById("result3").innerHTML = "Incorrect. The correct answer is x = y;";
      }
    }
	</script>
</body>
</html>