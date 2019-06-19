<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Aptech_php_18_4";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// sql to create table
$sql = "CREATE TABLE $dbname.Users (
id INT(6) AUTO_INCREMENT PRIMARY KEY, 
name VARCHAR(50) NOT NULL, 
email VARCHAR(100) NOT NULL,
password VARCHAR(50)
)";

if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>