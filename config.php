<?php

// $servername = "localhost";

// $username = "root"; 

// $password = ""; 

// $dbname = "nyundoox"; 


$servername = "localhost";

$username = "imevolim_nyundoox"; 

$password = "Sifed32365042?"; 

$dbname = "imevolim_nyundoox"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {

    die("Connection failed: " . $conn->connect_error);

}

?> 