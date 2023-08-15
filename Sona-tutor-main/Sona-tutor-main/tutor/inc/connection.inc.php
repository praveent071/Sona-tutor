<?php

$con = new mysqli('localhost', 'root', '', 'mysql');

if($con->connect_errno > 0){
    die('Unable to connect to database [' . $con->connect_error . ']');
}

?>

