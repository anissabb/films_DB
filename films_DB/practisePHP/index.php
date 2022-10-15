<html>

<head>
<link rel="stylesheet" href="./style/style.css" type="text/css">

</head>

<body>
<h1 id="title"> _________My Video Organizer_______ </h1> 
<h2>

<?php
//print_r (new DateTime());   //print the date of the server but displays as an array?
?>
</h2>


<script> 

document.write (new Date().toString());
</script>

<?php

include "./incude/navbar.php";

?>

<main>


<?php

if(isset($_GET['p'])){
    include "./" . $_GET['p'] . ".php";   // the page with this url will be displayed ????? together ????with what is in the index.php
}
else {
    include "home.php";
}

?>



 </main>


 

 </body>


 </html>