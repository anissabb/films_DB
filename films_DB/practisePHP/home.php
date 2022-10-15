<html>
<link rel="stylesheet" href="./style/style.css" type="text/css">


<h1>___________HOME PAGE ____________<h1>
<div id="div1">
<h2>hello</h2>
</div>


<button id="btn1"> Click Me </button>


<h3>What is your name? <h3>
<input id="name" type="text"> 


<script>
    let div1 = document.querySelector("div");
    //let div1 = document.GetElementById("div1");
    console.log (div1);
    div1.innerText = "Coucou";

    let name = document.getElementById("name");
    // get input and say hi on the main page!



    



    btn1.addEventListener("click", function(){
        div1.innerText= "hello, how are you?";
    });
</script>





<?php


?>



</html>