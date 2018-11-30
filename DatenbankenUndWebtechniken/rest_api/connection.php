<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "beleg";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


//echo "Erfolg: es wurde ordnungsgemäß mit MySQL verbunden! Die Datenbank \"$dbname\" ist toll." . PHP_EOL;
//echo "Host-Informationen: " . mysqli_get_host_info($conn) . PHP_EOL;


?> 