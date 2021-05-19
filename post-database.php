<?php
session_start();

$server = 'localhost';
$username = 'root';
$password = 'TheDarkProdigy78'; 
$database = 'publicaciones'; 

$connection = mysqli_connect($server, $username, $password, $database);

if(!$connection){
    die("Connection failed: ".mysqli_connect_error());
}

?>