<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="bootstrap.min.css">
	<title>Document</title>
	<style>pre{background-color: black;color: white;}.hidden{display: hidden;}</style>
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
		 <div class="exercise">
    <h3>Exercise 4</h3>
    <p>Declare a variable name and assign it your name as a string.</p>
    <div class="form-group">
    	
    <p id="result4"></p>
    </div>
    <div class="form-group">
    	
    <textarea id="exercise4" class="form-control"></textarea><br/>
    </div>
    <div class="form-group d-flex">
    <button onclick="checkExercise4()" class="btn btn-primary">Submit</button>
    	<a href="variableE5.php" class="btn btn-primary hidden next">Next</a>
    </div>
  </div>
	</div>
	<script>
		
    function checkExercise4() {
      var answer = document.getElementById("exercise4").value;
      if (answer.trim().startsWith("name = ")) {
        document.getElementById("result4").innerHTML = "Correct!";
        
    setTimeout(function(){
        // document.querySelector(".exercise_4").classList.add("hidden");
       document.querySelector(".next").classList.remove("hidden"); 
        },5000);          
      } else {
        document.getElementById("result4").innerHTML = "Incorrect. The correct answer starts with 'name = '";
      }
    }
	</script>
</body>
</html>