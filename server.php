<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "rental";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";

// select * from tenant
$sql = "SELECT * FROM tenants";
$result = $conn->query($sql);
$tenants = [];
if ($result->num_rows > 0) {
    $tenants = $result->fetch_all(MYSQLI_ASSOC);
} 
$sql = "SELECT * FROM houses";
$results = $conn->query($sql);
$houses = [];
if ($results->num_rows > 0) {
    $houses = $results->fetch_all(MYSQLI_ASSOC);
}

?>