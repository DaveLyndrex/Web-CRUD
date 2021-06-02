<?php
$servername = "192.168.0.14";
$username = "justine"; 
$password = "justineambrad"; 
$dbname = "crud-to-dave"; 



$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


?> 