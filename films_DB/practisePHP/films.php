<h1>________Film List_______</h1>

<?php


// including the db.php file:

include "./connection/db.php";

//Establishing connection with DB
try{
    $cnx = new PDO(DBDRIVER . ':host=' . DBHOST . ';port=' . DBPORT . ';dbname=' . DBNAME . ';charset=' . DBCHARSET, DBUSER, DBPASS);
}

catch(Exception $e)
{
echo $e->getMessage();   
die();                    //   ???? not sure
}




//Create a BD request


$sql = "SELECT * FROM film"   ;


//Launch the request:

$stmt = $cnx->prepare($sql);
$stmt->execute();

// In short we can do the following:

// $result = $cnx->prepare($sql)->execute()->fetchAll();   //idk why it s not working for mev(underlines it)




//Obtain the resulat

//$result = $stmt->fetchAll();   // will return an associative array (uglyyyy)
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);   //will return neat result // I guess Xdebug would make it looking more clear

//var_dump($result);

//We can retrieve different parts of the info from the DB table  
//echo $result[1]['title'];  
//echo $result[0]['date'] ;


foreach ($result as $film){   //Iterating through all movies in the array
    echo "<br>";
    foreach ($film as $key => $value){
        echo $key . ":" .$value . "<br>";
    }
    echo "<a href ='./removeMovie.php'>Remove</a>";
}


?>
</body>
</html>