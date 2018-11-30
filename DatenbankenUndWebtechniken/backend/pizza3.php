<?php

	$htmlContent = file_get_contents("https://www.pizza-taxi-garching.de/index.php/menue/gratins-sandwiches");
		
	$DOM = new DOMDocument();
	$DOM->loadHTML($htmlContent);
	
	$Detail = $DOM->getElementsByTagName("td");
	//print_r ($Detail[0]);
	
		foreach($Detail as $NodeHeader) 
	{
		$aDataTableHeaderHTML[] = trim($NodeHeader->textContent);
	}
	
	$i = 0;
	$j = 0;
	foreach($Detail as $sNodeDetail) 
	{
		$aDataTableDetailHTML[$j][] = trim($sNodeDetail->textContent);
		$i = $i + 1;
		$j = $i % count($aDataTableHeaderHTML) == 0 ? $j + 1 : $j;
	}
	//print_r($aDataTableDetailHTML); die();
	
	//print_r($aDataTableDetailHTML[0][1]);
	//echo($speise1);
	
	$speise1 = ($aDataTableDetailHTML[0][31]);
	$speise2 = ($aDataTableDetailHTML[0][34]);
	$speise3 = ($aDataTableDetailHTML[0][37]);
	$speise4 = ($aDataTableDetailHTML[0][40]);
	$speise5 = ($aDataTableDetailHTML[0][43]);
	$speise6 = ($aDataTableDetailHTML[0][46]);
	$speise7 = ($aDataTableDetailHTML[0][49]);
	$speise8 = ($aDataTableDetailHTML[0][52]);
	$speise9 = ($aDataTableDetailHTML[0][55]);
	$speise10 = ($aDataTableDetailHTML[0][58]);
	
	
	$preis1 = ($aDataTableDetailHTML[0][32]);
	$preis2 = ($aDataTableDetailHTML[0][35]);
	$preis3 = ($aDataTableDetailHTML[0][38]);
	$preis4 = ($aDataTableDetailHTML[0][41]);
	$preis5 = ($aDataTableDetailHTML[0][44]);
	$preis6 = ($aDataTableDetailHTML[0][47]);
	$preis7 = ($aDataTableDetailHTML[0][50]);
	$preis8 = ($aDataTableDetailHTML[0][53]);
	$preis9 = ($aDataTableDetailHTML[0][56]);
	$preis10 = ($aDataTableDetailHTML[0][59]);
	
	
	echo "<br>";
	//DATENBANK
	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "beleg";

	// herstellung verbindung
	$conn = new mysqli($servername, $username, $password, $database);

	// überprüfen verbindung
	if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
	}
	echo "Connected successfully";
	
	echo "<br>";

	$sql = "INSERT INTO beleg_pizza3 (ID, Name, Preis, Zutatenliste, RestaurantName, Adresse, Telefonnummer)
	VALUES ('1', '$speise1', '$preis1', 'Tomaten Gurken Salat', 'Pizza-Taxi','Garching','089 3262175')";
	$sql1 = "INSERT INTO beleg_pizza3 (ID, Name, Preis, Zutatenliste, RestaurantName, Adresse, Telefonnummer)
	VALUES ('2', '$speise2', '$preis2', 'Mozarella', 'Pizza-Taxi','Garching','089 3262175')";
	$sql2 = "INSERT INTO beleg_pizza3 (ID, Name, Preis, Zutatenliste, RestaurantName, Adresse, Telefonnummer)
	VALUES ('3', '$speise3', '$preis3', 'Schinken', 'Pizza-Taxi','Garching','089 3262175')";
	$sql3 = "INSERT INTO beleg_pizza3 (ID, Name, Preis, Zutatenliste, RestaurantName, Adresse, Telefonnummer)
	VALUES ('4', '$speise4', '$preis4', 'Hühnchenbrust', 'Pizza-Taxi','Garching','089 3262175')";
	$sql4 = "INSERT INTO beleg_pizza3 (ID, Name, Preis, Zutatenliste, RestaurantName, Adresse, Telefonnummer)
	VALUES ('5', '$speise5', '$preis5', 'Zwiebel', 'Pizza-Taxi','Garching','089 3262175')";
	$sql5 = "INSERT INTO beleg_pizza3 (ID, Name, Preis, Zutatenliste, RestaurantName, Adresse, Telefonnummer)
	VALUES ('6', '$speise6', '$preis6', 'Salami', 'Pizza-Taxi','Garching','089 3262175')";
	$sql6 = "INSERT INTO beleg_pizza3 (ID, Name, Preis, Zutatenliste, RestaurantName, Adresse, Telefonnummer)
	VALUES ('7', '$speise7', '$preis7', 'Schnitzel', 'Pizza-Taxi','Garching','089 3262175')";
	$sql7 = "INSERT INTO beleg_pizza3 (ID, Name, Preis, Zutatenliste, RestaurantName, Adresse, Telefonnummer)
	VALUES ('8', '$speise8', '$preis8', 'Rindfleisch', 'Pizza-Taxi','Garching','089 3262175')";
	$sql8 = "INSERT INTO beleg_pizza3 (ID, Name, Preis, Zutatenliste, RestaurantName, Adresse, Telefonnummer)
	VALUES ('9', '$speise9', '$preis9', 'Double', 'Pizza-Taxi','Garching','089 3262175')";
	$sql9 = "INSERT INTO beleg_pizza3 (ID, Name, Preis, Zutatenliste, RestaurantName, Adresse, Telefonnummer)
	VALUES ('10', '$speise10', '$preis10', 'Chicken', 'Pizza-Taxi','Garching','089 3262175')";
	

	if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
		} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	if ($conn->query($sql1) === TRUE) {
		echo "New record created successfully";
		} else {
		echo "Error: " . $sql1 . "<br>" . $conn->error;
	}
	if ($conn->query($sql2) === TRUE) {
		echo "New record created successfully";
		} else {
		echo "Error: " . $sql2 . "<br>" . $conn->error;
	}
	if ($conn->query($sql3) === TRUE) {
		echo "New record created successfully";
		} else {
		echo "Error: " . $sql3 . "<br>" . $conn->error;
	}
	if ($conn->query($sql4) === TRUE) {
		echo "New record created successfully";
		} else {
		echo "Error: " . $sql4 . "<br>" . $conn->error;
	}
	if ($conn->query($sql5) === TRUE) {
		echo "New record created successfully";
		} else {
		echo "Error: " . $sql5 . "<br>" . $conn->error;
	}
	if ($conn->query($sql6) === TRUE) {
		echo "New record created successfully";
		} else {
		echo "Error: " . $sql6 . "<br>" . $conn->error;
	}
	if ($conn->query($sql7) === TRUE) {
		echo "New record created successfully";
		} else {
		echo "Error: " . $sql7 . "<br>" . $conn->error;
	}
	if ($conn->query($sql8) === TRUE) {
		echo "New record created successfully";
		} else {
		echo "Error: " . $sql8 . "<br>" . $conn->error;
	}
	if ($conn->query($sql9) === TRUE) {
		echo "New record created successfully";
		} else {
		echo "Error: " . $sql9 . "<br>" . $conn->error;
	}
	
	mysqli_close($conn);

?>