<?php


//var_dump ($_POST);    //displays title location and date from insert.php file.... stuff to POST!

//1. Create a connection with DB connection
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
$sql = "INSERT INTO film (id, title, location, date, pic)";
$sql .= "VALUES (NULL, :title, :location, :date, :pic)";
//$sql .= " VALUES (" .$_POST['title'] . "," .$_POST['location'] . "," .$_POST['date'] . ");
 //insted of doing what is above we can do "PLACEHOLDER" :

 $stmt = $cnx->prepare($sql);



$stmt->bindValue(":title",$_POST['title']); 
$stmt->bindValue(":location",$_POST['location']); 
$stmt->bindValue(":date",$_POST['date']); 
$stmt->bindValue(":pic", " "); 



 $stmt->execute();

 var_dump ($stmt->errorInfo());


header("location ./index.php?p=films.php");









?>
