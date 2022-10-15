<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

<?php
session_start();
?>

  
    <nav>
        
        <a href="./index.php?p=home">Home</a>
        <a href="./about.php?p=about">About</a>
        <a href="./contact.php?p=contact">Contact</a>
        <a href="./login.php?p=login">Login</a>
        <a href="./films.php?p=films">Films</a>
        <a href="./search.php?p=search">Search by title</a>
        <a href="./insert.php?p=insert">Insert new movie</a>
   
    </nav>
  

    <?php 
//if logged in the user name will be displayed // If not message 'u r not connected' will be displayed
if(isset($_SESSION['loginOk'])){
    echo "You are logged in as: " .$_SESSION['loginOk'];
echo "<a href='./index.php?p=logout'> LOGOUT </a>";  //logout possible only if connected
}
else {
    echo "You are not connetcted";   //Same as if(!isset($_SESSION['loginOk']))  --if not set
}

    

    ?>

</body>

</html>