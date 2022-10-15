<?php

include "./connection/db.php";


try{
    $cnx = new PDO(DBDRIVER . ':host=' . DBHOST . ';port=' . DBPORT . ';dbname=' . DBNAME . ';charset=' . DBCHARSET, DBUSER, DBPASS);
}

catch(Exception $e)
{
echo $e->getMessage();      //   gets type of error in detail.php file

die(); 

}



var_dump($_POST);


$titre = $_POST['titre'];

//Request:


$sql = "SELECT $ FROM film WHERE titre= :titre";
$stmt = $cnx->prepare($sql);
$stmt->bindValue (":titre", $titre);
$stmt->execute();

$res = $stmt->fetchAll(PDO::FETCH_ASSOC);


?>