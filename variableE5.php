<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="bootstrap.min.css">
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
		 <div class="exercise">
    <h3>Exercise 5</h3>
    <div class="form-group">
    	
    <p id="result5"></p>
    </div>
    <p>Assign the value of name to a new variable called greeting.</p>
    <textarea id="exercise5" class="form-control" placeholder="Enter Your Code Here"></textarea><br/>
    <div class="form-group d-flex">
    	
    <button onclick="checkExercise5()" class="btn btn-primary">Submit</button>
    <a href="profile.php" class="btn btn-success next hidden">Hme</a>
    </div>
  </div>
	</div>
	<script>
		function checkExercise5() {
      var answer = document.getElementById("exercise5").value;
      if (answer.trim() === "greeting = name;") {
        document.getElementById("result5").innerHTML = "Correct! Good Job";  
      } else {
     document.getElementById("result5").innerHTML = "Incorrect. The correct answer is greeting = name;";
      }
    }
	</script>
</body>
</html>