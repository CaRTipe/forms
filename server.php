<?php
session_start();
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
function assignHouses($houseid, $tenantid)
{
    global $conn;
    $query = "update houses set tenant_id = $tenantid where id = $houseid";
    if ($conn->query($query)) {
        return true;
    } else {
        return false;
    }
}
function createHouses($houseno)
{
    global $conn;
    $house = "insert into houses (house_number) values($houseno)";
    if ($conn->query($house)) {
        return true;
    } else {
        return false;
    }
}
function addTenants($firstname, $lastname, $email, $phoneno, $dateofbirth, $password)
{
    global $conn;

    $tenant = "INSERT INTO `tenants`(`first_name`, `last_name`, `email`, `phone`,`date_of_birth`, `password`) VALUES ('$firstname','$lastname', '$email','$phoneno','$dateofbirth', '$password')";
    if ($conn->query($tenant)) {
        $_SESSION['signup'] = true;
        header("Location: signin.php");
    } else {
        $_SESSION['signup'] = false;
        header("Location: index.php");
    }
}
function checkTenants($email, $password)
{
    global $conn;
    $check = "SELECT `email`, `password` FROM `tenants` WHERE email = '$email' AND password = '$password' LIMIT 1";
    $result = $conn->query($check);
    if ($result->num_rows > 0) {
        $_SESSION['login'] = true;
        header("Location: houses.php");
    } else {
        $_SESSION['login'] = false;
        header("Location: signin.php");
    }
}
