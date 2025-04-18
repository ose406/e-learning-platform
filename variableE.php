<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="bootstrap.min.css">
  <title>Learning Variables</title>
  
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  
  <style>
    body {
      font-family: Arial, sans-serif;
    }
    .exercise {
      margin-bottom: 20px;
    }
    .hidden {
    display:none;
    }
    pre{
      background-color: black;color: white;
    }
  </style>
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
    <h3>Exercise 1</h3>
    <p id="result1"></p>
    <p>Declare a variable x and assign it the value 10.</p>
    <div class="form-group">
      
    <textarea id="exercise1" class="form-control"></textarea><br/>
    </div>
    <div class="form-group d-flex">
      
    <button onclick="checkExercise1()" class="btn btn-primary">Submit</button>
    <a href="variableE2.php" class="btn btn-success next hidden">Next</a>
    </div>
  </div>
 
 
 
 
</div>
  <script>
    function checkExercise1() {
      var answer = document.getElementById("exercise1").value;
      if (answer.trim() === "x = 10;") {
        document.getElementById("result1").innerHTML = "Correct!";
        setTimeout(function(){
        // document.querySelector(".exercise").classList.add("hidden");
       document.querySelector(".next").classList.remove("hidden"); 
        },5000);
      } else {
        document.getElementById("result1").innerHTML = "Incorrect. The correct answer is x = 10;";
      }
    }

   

  


    
  </script>
</body>
</html>
