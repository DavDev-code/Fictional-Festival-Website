<?php
$host = 'localhost'; 
$username = 'root';  
$password = ''; 
$dbname = 'festival_tickets';  

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection Error: " . $conn->connect_error);
}
?>