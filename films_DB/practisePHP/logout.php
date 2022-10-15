<?php
session_destroy();  // data regarding log/pass is not stored anymore ane we are redirected into login page
header('location: ./login.php');
?>