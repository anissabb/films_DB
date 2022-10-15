<?php
//Connecting to DB
include "./connection/db.php";

try{
    $cnx = new PDO(DBDRIVER . ':host=' . DBHOST . ';port=' . DBPORT . ';dbname=' . DBNAME . ';charset=' . DBCHARSET, DBUSER, DBPASS);
}

catch(Exception $e)
{
echo $e->getMessage();      //   gets type of error in detail.php file

die(); 

}

$id = $_GET['id'];
$sql = "DELETE FROM film WHERE :id = id";

$stmt = $cnx->prepare($sql);
$stmt->bindValue(":id", $id, PDO::PARAM_INT);
$stmt->execute();

//after the movie is removed we are redirected to the page with movie list

header('location: ./index.php?p=films');


?>