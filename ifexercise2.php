<html lang="en"><head><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">





    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    
    <title>Learning If Statements</title>
    <style>
      body {
        font-family: Arial, sans-serif;
      }
      .exercise {
        margin-bottom: 20px;
      }
      
      .hidden{
      display:none;
      
      }
      #result1{
        text-align: center;
        color:green;
        
      }
      
    </style>
  </head>
  <body>
  <div class="container">
    <h1>Learning If Statements</h1>
    <p>An if statement is a control structure that allows you to execute a block of code if a certain condition is true.</p>
    <p>Syntax:</p>
    <pre>    if (condition) {
        // code to be executed if the condition is true
      } else {
        // code to be executed if the condition is false
      }
    </pre>
    <p>Example:</p>
    <pre>    var x = 5;
      if (x &gt; 10) {
        console.log("x is greater than 10");
      } else {
        console.log("x is less than or equal to 10");
      }
    </pre>
  
    <h2>Exercises</h2>
    <div class="exercise_2 m-auto">
      <h3>Exercise 2</h3>
      <p>Write an if statement that checks if a variable y is less than or equal to 10. If it is, print "y is less than or equal to 10" to the console.</p>
      <textarea id="exercise3" class="form-control"></textarea><br><br>
      <button class="btn btn-primary b3">Submit</button>
      <div class="next hidden">
        <a href="ifexercise3.php" class="btn btn-success">Next</a>
      </div>
      <p id="result3"></p>
      <p class="response3"></p>
    </div>
   
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  
    <script>
      document.querySelector(".b3").addEventListener("click",function() {
        var answer = document.getElementById("exercise3").value;
        // var op='var x=8;if(x>5){console.log("x is greater than 5");}';
        // document.getElementById("check1").addEventListener("click",function(){

// let o=document.querySelector("#input1").value;
let outcome=eval(answer);

const  response=document.querySelector(".response3");
// result.textContent=console.log.message;
console.olog = function() {};

console.log = function(message) {
    console.olog(message);
    let response=document.querySelector(".response3");
    response.append(message);
let result= document.querySelector("#result3");
        if (response.textContent=="y is less than or equal to 10") {
        
         result.innerHTML="Correct! <br/>Good Job";
          setTimeout(function(){
          // document.querySelector(".exercise").classList.add("hidden");
          
          // document.querySelector(".exercise_2").classList.remove("hidden");
          // location.href="ifexercise2.php";
          let next=document.querySelector(".next");
          next.classList.remove("hidden");
         

          
          },5000);
          
        } else {
          document.getElementById("result1").inner="Incorrect";
  
      }
    };
      });
      
      
  </script>
  
  
  
  
  
  
  
  </body></html>