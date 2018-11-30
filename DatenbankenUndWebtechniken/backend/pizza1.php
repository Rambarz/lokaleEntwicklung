<?php

	$htmlContent = file_get_contents("http://www.stehpizzeria-napoli.de/index.php/pizzabroetchen-pizzaroellchen.html");
		
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
	
	//print_r($aDataTableDetailHTML[0][3]);
	
	$speise1 = ($aDataTableDetailHTML[0][3]);
	//echo($speise1);
	$speise2 = ($aDataTableDetailHTML[0][6]);
	$preis1 = ($aDataTableDetailHTML[0][4]);
	//echo($preis1);
	$preis2 = ($aDataTableDetailHTML[0][7]);
	
	
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

	$sql = "INSERT INTO beleg_pizza1 (ID, Name, Preis, Zutatenliste, RestaurantName, Adresse, Telefonnummer)
	VALUES ('1', '$speise1', '$preis1', 'Kräuterbutter', 'Stehpizzeria Napoli','Zschopau','03725 84398')";
	$sql1 = "INSERT INTO beleg_pizza1 (ID, Name, Preis, Zutatenliste, RestaurantName, Adresse, Telefonnummer)
	VALUES ('2', '$speise2', '$preis2', 'Schinken Käse', 'Stehpizzeria Napoli','Zschopau','03725 84398')";
	

	if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
		} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	if ($conn->query($sql1) === TRUE) {
		echo "New record created successfully";
		} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	mysqli_close($conn);

?>