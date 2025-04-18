
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="bootstrap.min.css">

  <title>Learning Loops</title>
  <style>
    pre{
      background-color:black;color:white;
    }
    body {
      font-family: Arial, sans-serif;
    }
    .exercise {
      margin-bottom: 20px;
    }
  .hidden{
    display:none;
  }
  button{
    padding:10px;
    margin-top:10x;
  }
  </style>
</head>
<body>
  <div class="container">

  <!-- </div> -->
  <h1>Learning Loops</h1>
  <p>Loops are a fundamental concept in programming that allow you to execute a block of code repeatedly. There are two main types of loops: <code>for</code> loops and <code>while</code> loops.</p>
  
  <h2>For Loops</h2>
  <p>A <code>for</code> loop is used to execute a block of code for a specified number of times. The syntax for a <code>for</code> loop is as follows:</p>
  <pre style="background-color:blak;color:white;">
    for (var i = 0; i < 10; i++) {
      // code to be executed
    }
  </pre>
  
  <h2>While Loops</h2>
  <p>A <code>while</code> loop is used to execute a block of code as long as a certain condition is true. The syntax for a <code>while</code> loop is as follows:</p>
  <pre style="background-color:blak;color:white;">
    var i = 0;
    while (i < 10) {
      // code to be executed
      i++;
    }
  </pre>
  
  <h2>Exercises</h2>
  <div class="exercise_1">
  <h3>Exercise 5</h3>
    <p>Write a <code>for</code> loop that prints the numbers 1 to 10, and also prints the sum of the numbers.</p>
 <div id="output"></div>
 <div class="form-group">
  <textarea id="user-code" class="form-control"></textarea>
  
  </div>
  <div class="form-group d-flex">
  <button id="run-code" class="btn btn-primary">Run Code</button>
<p class="p-5 tanks hidden">Thanx for taking our exercise see you soon
  <a href="profile.php" class="btn btn-secondary ml-5 next hidden">Home</a>
</p>
</div>

<script>
// JavaScript
const outputDiv = document.getElementById('output');
const userCodeTextarea = document.getElementById('user-code');
const runCodeButton = document.getElementById('run-code');

runCodeButton.addEventListener('click', () => {
    var userCode = userCodeTextarea.value;
    var expectedOutput='';
    var sum = 0; for (var i = 1; i <= 10; i++) { 
        console.log(i); sum += i;
     } console.log('Sum:', sum);
    for (let i = 1; i <= 10; i++) {
        expectedOutput += `${i}\n`;
    }

    // Run the user's code
    try {
        eval(userCode);
    } catch (error) {
        outputDiv.innerText = `Error: ${error.message}`;
        return;
    }
const tanks= document.querySelector("tanks")
    // Check if the output matches the expected output
    const actualOutput = outputDiv.innerText;
    if (actualOutput === expectedOutput) {
        outputDiv.innerText = 'Correct!';
        setTimeout(function(){
// location.href="loopexercise5.php";
next.classList.remove("hidden");
tanks.classList.remove("hidden");
        },5000);
    } else {
        outputDiv.innerText = `Incorrect. Expected:\n${expectedOutput}`;
    }
});

// Function to log output to the div
function logOutput(message) {
    outputDiv.innerText += `${message}\n`;
}

// Override console.log to log to the div
console.log = logOutput;
</script>
</body>
</html>

