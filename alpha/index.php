<?php
$servername = "localhost";
$username = "root";
$password = "example";

echo "Canale alpha!";

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>