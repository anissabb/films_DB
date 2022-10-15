<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
<?php
 // not sure why it is required...
 // this file is linked to films.php in order to establish connection
 
    define('DBDRIVER','mysql');
    define('DBHOST','localhost');
    define('DBPORT',3306);    //3306 is the port of localhost.phpmyadmin
    define('DBNAME','films');   //here goes the name of DB we want to connect to
    define('DBCHARSET','utf8');
    define('DBUSER','root');
    define('DBPASS','');   // or 'root'??
    
 ?>

</body>
</html>
