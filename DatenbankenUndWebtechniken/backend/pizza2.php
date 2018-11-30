<?php

	$htmlContent = file_get_contents("http://www.quickpizza.de/293/Pasta+%26+Auflauf+bestellen/");
		
	$DOM = new DOMDocument();
	$DOM->loadHTML($htmlContent);
	
	$Detail = $DOM->getElementsByTagName("td");
	print_r ($Detail[0]);
	
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
	//echo "<br>";
	echo "<br>";
	
	//print_r($aDataTableDetailHTML[0][3]);
	
	echo "<br>";
	echo "<br>";
	
	$speise1 = ($aDataTableDetailHTML[0][2]);
	$speise2 = ($aDataTableDetailHTML[0][4]);
	$speise3 = ($aDataTableDetailHTML[0][6]);
	//echo($speise3);
	$speise4 = ($aDataTableDetailHTML[0][8]);
	
	$preis1 = ($aDataTableDetailHTML[0][3]);
	$preis2 = ($aDataTableDetailHTML[0][5]);
	$preis3 = ($aDataTableDetailHTML[0][7]);
	//echo($preis3);
	$preis4 = ($aDataTableDetailHTML[0][9]);	
	
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
	
	$sql = "INSERT INTO beleg_pizza2 (ID, Name, Preis, Zutatenliste, RestaurantName, Adresse, Telefonnummer)
	VALUES ('1', '$speise1', '$preis1', 'Hackfleisch', 'QuickPizza','Bremen','+49 (0) 421 498213')";
	$sql1 = "INSERT INTO beleg_pizza2 (ID, Name, Preis, Zutatenliste, RestaurantName, Adresse, Telefonnummer)
	VALUES ('2', '$speise2', '$preis2', 'Thunfisch', 'QuickPizza','Bremen','+49 (0) 421 498213')";
	$sql2 = "INSERT INTO beleg_pizza2 (ID, Name, Preis, Zutatenliste, RestaurantName, Adresse, Telefonnummer)
	VALUES ('3', '$speise3', '$preis3', 'Schinken', 'QuickPizza','Bremen','+49 (0) 421 498213')";
	$sql3 = "INSERT INTO beleg_pizza2 (ID, Name, Preis, Zutatenliste, RestaurantName, Adresse, Telefonnummer)
	VALUES ('4', '$speise4', '$preis4', 'Spinat', 'QuickPizza','Bremen','+49 (0) 421 498213')";
	

	if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
		} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
		echo "<br>";
	}
	if ($conn->query($sql1) === TRUE) {
		echo "New record created successfully";
		} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
		echo "<br>";
	}
	if ($conn->query($sql2) === TRUE) {
		echo "New record created successfully";
		} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
		echo "<br>";
	}
	if ($conn->query($sql3) === TRUE) {
		echo "New record created successfully";
		} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
		echo "<br>";
	}
	
	mysqli_close($conn);

?>