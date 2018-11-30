 <?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "beleg";

$conn1 = new mysqli($servername, $username, $password, $dbname);

if ($conn1->connect_error) {
    die("Connection failed: " . $conn1->connect_error);
}

$sql1 = "CREATE TABLE beleg_pizza1 ( 
ID INT(2) NOT NULL,
Name CHAR(255) NOT NULL ,
Preis CHAR(255) NOT NULL ,
Zutatenliste CHAR(255) NOT NULL ,
RestaurantName CHAR(255) NOT NULL ,
Adresse CHAR(255) NOT NULL ,
Telefonnummer CHAR(255) NOT NULL 
)";

if ($conn1->query($sql1) === TRUE) {
    echo "Table pizza1 created successfully";
	echo "<br>";
} else {
    echo "Error creating table: " . $conn1->error;
	echo "<br>";
}

$sql2 = "CREATE TABLE beleg_pizza2 ( 
ID INT(2) NOT NULL,
Name CHAR(255) NOT NULL ,
Preis CHAR(255) NOT NULL ,
Zutatenliste CHAR(255) NOT NULL ,
RestaurantName CHAR(255) NOT NULL ,
Adresse CHAR(255) NOT NULL ,
Telefonnummer CHAR(255) NOT NULL 
)";

if ($conn1->query($sql2) === TRUE) {
    echo "Table pizza2 created successfully";
	echo "<br>";
} else {
    echo "Error creating table: " . $conn1->error;
	echo "<br>";
}

$sql3 = "CREATE TABLE beleg_pizza3 ( 
ID INT(2) NOT NULL,
Name CHAR(255) NOT NULL ,
Preis CHAR(255) NOT NULL ,
Zutatenliste CHAR(255) NOT NULL ,
RestaurantName CHAR(255) NOT NULL ,
Adresse CHAR(255) NOT NULL ,
Telefonnummer CHAR(255) NOT NULL 
)";

if ($conn1->query($sql3) === TRUE) {
    echo "Table pizza3 created successfully";
	echo "<br>";
} else {
    echo "Error creating table: " . $conn1->error;
	echo "<br>";
}

//$sql4 = "CREATE TABLE beleg_komplett ( 
//ID INT(2) NOT NULL,
//Name CHAR(255) NOT NULL ,
//Preis CHAR(255) NOT NULL ,
//Zutatenliste CHAR(255) NOT NULL ,
//RestaurantName CHAR(255) NOT NULL ,
//Telefonnummer CHAR(255) NOT NULL,
//Adresse CHAR(255) NOT NULL  )
//CHARACTER SET utf8mb4 
//COLLATE utf8mb4_unicode_ci";

//if ($conn1->query($sql4) === TRUE) {
//    echo "Table komplett created successfully";
//	echo "<br>";
//} else {
//    echo "Error creating table: " . $conn1->error;
//	echo "<br>";
//}


mysqli_close($conn);

?> 