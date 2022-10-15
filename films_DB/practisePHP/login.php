<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/style.css" type="text/css">
</head>
<body>
    






<form action="./loginProcess.php" method="POST">
    Login : <input type="text" name="login">
    Password: <input type="text" name="password">
    <input type="submit">        <!-- still not quite sure how this works... after the data is submited where??>  -->
</form>




<?php

// Processing incorrecr credentials   //Not sure why this isn t placed in the login processing part?(''')
if (isset ($_GET['error']))
{
    switch ($_GET['error'])
    {
        case "badPass":
        echo "<h4>Bad PASS</h4>";
        break;
    }
    
}

//IDK why it has to be on the login process page not here?? optional???
?>




</body>
</html>