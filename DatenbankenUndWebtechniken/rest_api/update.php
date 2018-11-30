	<?php

	$htmlContent = file_get_contents("http://www.stehpizzeria-napoli.de/index.php/pizzabroetchen-pizzaroellchen.html");
		
	$DOM = new DOMDocument();
	$DOM->loadHTML($htmlContent);
	
	$Detail = $DOM->getElementsByTagName("td");
	
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
	
	$speise1 = ($aDataTableDetailHTML[0][3]);
	$speise2 = ($aDataTableDetailHTML[0][6]);
	$preis1 = ($aDataTableDetailHTML[0][4]);
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

	$sql = "UPDATE beleg_pizza1 
	SET Name = '$speise1', Preis = '$preis1', Zutatenliste = 'Kräuterbutter', RestaurantName = 'Stehpizzeria Napoli', Adresse='Zschopau', Telefonnummer = '03725 84398'
	WHERE ID = 1";
	$sql1 = "UPDATE beleg_pizza1 
	SET Name = '$speise2', Preis = '$preis2', Zutatenliste = 'Kräuterbutter', RestaurantName = 'Stehpizzeria Napoli', Adresse='Zschopau', Telefonnummer = '03725 84398'
	WHERE ID = 2";

	if ($conn->query($sql) === TRUE) {
		echo "Update 1 erfolgreich";
		} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	mysqli_close($conn);


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

	echo "<br>";	
	echo "<br>";
	echo "<br>";
	
	$speise1 = ($aDataTableDetailHTML[0][2]);
	$speise2 = ($aDataTableDetailHTML[0][4]);
	$speise3 = ($aDataTableDetailHTML[0][6]);
	$speise4 = ($aDataTableDetailHTML[0][8]);
	
	$preis1 = ($aDataTableDetailHTML[0][3]);
	$preis2 = ($aDataTableDetailHTML[0][5]);
	$preis3 = ($aDataTableDetailHTML[0][7]);
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
	
	$sql2 = "UPDATE beleg_pizza2 
	SET Name = '$speise1', Preis = '$preis1', Zutatenliste = 'Hackfleisch', RestaurantName = 'QuickPizza', Adresse='Bremen', Telefonnummer = '+49 (0) 421 498213'
	WHERE ID = 1";
	$sql3 = "UPDATE beleg_pizza2 
	SET Name = '$speise2', Preis = '$preis2', Zutatenliste = 'Thunfisch', RestaurantName = 'QuickPizza', Adresse='Bremen', Telefonnummer = '+49 (0) 421 498213'
	WHERE ID = 2";
	$sql4 = "UPDATE beleg_pizza2 
	SET Name = '$speise3', Preis = '$preis3', Zutatenliste = 'Schinken', RestaurantName = 'QuickPizza', Adresse='Bremen', Telefonnummer = '+49 (0) 421 498213'
	WHERE ID = 3";
	$sql5 = "UPDATE beleg_pizza2 
	SET Name = '$speise4', Preis = '$preis4', Zutatenliste = 'Spinat', RestaurantName = 'QuickPizza', Adresse='Bremen', Telefonnummer = '+49 (0) 421 498213'
	WHERE ID = 4";
	

	if ($conn->query($sql3) === TRUE) {
		echo "Update 2 erfolgreich";
		} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
		echo "<br>";
		}
	mysqli_close($conn);
	
	
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
	
	$sql6 = "UPDATE beleg_pizza3 
	SET Name = '$speise1', Preis = '$preis1', Zutatenliste = 'Tomaten Gurken Salat', RestaurantName = 'Pizza-Taxi', Adresse='Garching', Telefonnummer = '089 3262175'
	WHERE ID = 1";
	$sql7 = "UPDATE beleg_pizza3 
	SET Name = '$speise2', Preis = '$preis2', Zutatenliste = 'Mozarella', RestaurantName = 'Pizza-Taxi', Adresse='Garching', Telefonnummer = '089 3262175'
	WHERE ID = 2";
	$sql8 = "UPDATE beleg_pizza3 
	SET Name = '$speise3', Preis = '$preis3', Zutatenliste = 'Schinken', RestaurantName = 'Pizza-Taxi', Adresse='Garching', Telefonnummer = '089 3262175'
	WHERE ID = 3";
	$sql9 = "UPDATE beleg_pizza3 
	SET Name = '$speise4', Preis = '$preis4', Zutatenliste = 'Hühnchenbrust', RestaurantName = 'Pizza-Taxi', Adresse='Garching', Telefonnummer = '089 3262175'
	WHERE ID = 4";
	$sql10 = "UPDATE beleg_pizza3 
	SET Name = '$speise5', Preis = '$preis5', Zutatenliste = 'Zwiebel', RestaurantName = 'Pizza-Taxi', Adresse='Garching', Telefonnummer = '089 3262175'
	WHERE ID = 5";
	$sql11 = "UPDATE beleg_pizza3 
	SET Name = '$speise6', Preis = '$preis6', Zutatenliste = 'Salami', RestaurantName = 'Pizza-Taxi', Adresse='Garching', Telefonnummer = '089 3262175'
	WHERE ID = 6";
	$sql12 = "UPDATE beleg_pizza3 
	SET Name = '$speise7', Preis = '$preis7', Zutatenliste = 'Schnitzel', RestaurantName = 'Pizza-Taxi', Adresse='Garching', Telefonnummer = '089 3262175'
	WHERE ID = 7";
	$sql13 = "UPDATE beleg_pizza3 
	SET Name = '$speise8', Preis = '$preis8', Zutatenliste = 'Rindfleisch', RestaurantName = 'Pizza-Taxi', Adresse='Garching', Telefonnummer = '089 3262175'
	WHERE ID = 8";
	$sql14 = "UPDATE beleg_pizza3 
	SET Name = '$speise9', Preis = '$preis9', Zutatenliste = 'Double', RestaurantName = 'Pizza-Taxi', Adresse='Garching', Telefonnummer = '089 3262175'
	WHERE ID = 9";
	$sql15 = "UPDATE beleg_pizza3 
	SET Name = '$speise10', Preis = '$preis10', Zutatenliste = 'Chicken', RestaurantName = 'Pizza-Taxi', Adresse='Garching', Telefonnummer = '089 3262175'
	WHERE ID = 10";

	if ($conn->query($sql15) === TRUE) {
		echo "Update 3 erfolgreich";
		} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	
	mysqli_close($conn);

?>