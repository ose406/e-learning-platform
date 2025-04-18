

    <div class="editor-container" style="display: flex;flex-direction: row;">
        <textarea id="code-editor" spellcheck="false" placeholder="Practice Your Coding Skill Here"></textarea>
        <div id="output"></div>
    </div>
    <div class="r-2">
        
        <button id="run-btn">Run Code</button>
    </div>
     <div id="p"></div>

<style>
/*body {
    font-family: monospace;
}*/

/* Global Styles */

* {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}
.r-2{
    width: 600px;
    border:1px solid whitesmoke;
    margin:0 auto;
}
body {
  font-family: Arial, sans-serif;
  line-height: 1.6;
  color: #333;
  background-color: #f9f9f9;
}

/* Editor Container Styles */

.editor-container {
display: flex;
flex-direction: row;
max-width: 800px;
margin: 40px auto;
padding: 20px;
background-color: #fff;
border: 1px solid #ddd;
box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}
#p{
    width: 600px;
    border:1px solid whitesmoke;
    margin: 0 auto;
}
/* Editor Header Styles */

.editor-header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 20px;
}

.editor-header h2 {
  font-size: 24px;
  margin-right: 20px;
}

#run-btn {
  background-color: #4CAF50;
  color: #fff;
  border: none;
  padding: 10px 20px;
  font-size: 16px;
  cursor: pointer;
  margin-bottom:20px;
  
  border-radius: 50px;
}

#run-btn:hover {
  background-color: #3e8e41;
}

/* Editor Split Styles */

.editor-split {
  display: flex;
  height: 600px;
}

.editor-pane {
  width: 50%;
  padding: 20px;
}

#code-editor {
  width: 100%;
  height: 90%;
  font-size: 16px;
  padding: 10px;
  border: 1px solid #ddd;
  background-color: black;
  color: white;
}

#output-frame {
  width: 100%;
  height: 100%;
  border: 1px solid #ddd;
}
#code-editor {
    width: 50%;
    height: 200px;
    padding: 10px;
    font-size: 16px;
    border: none;
    resize: none;
}

#run-btn {
    margin-top: 10px;
    padding: 10px 20px;
    font-size: 16px;
    cursor: pointer;
}

#output {
    margin-top: 5px;
    width: 50%;
    margin-left: 10px;
    padding: 10px;
    font-size: 16px;
    border: 1px solid #ccc;
}
</style>

<script>

const codeEditor = document.getElementById('code-editor');
const runBtn = document.getElementById('run-btn');
const output = document.getElementById('output');
const copyCode=document.querySelector("#p");
codeEditor.addEventListener("input",function(){
output.innerText=this.value;
});
runBtn.addEventListener('click', () => {
    const code = codeEditor.value;
    codeEditor.value="";
    try {
        const result = eval(code);
        output.innerText = result;
    copyCode.innerText=code;
    } catch (error) {
        output.innerText = error.message;
    }
});
</script>
