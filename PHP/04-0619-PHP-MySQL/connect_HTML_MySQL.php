<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Aptech_php_18_4";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "INSERT INTO users(name,email,password) 
value ('$name','$email','$password')";



if(mysqli_query($conn,$sql)){
    echo "Success Sign";
} else {
    echo "Error creating table: ". mysqli_error($conn);
}
    
$conn->close();
?>
  
