<?php 
try{
	include 'connection.php';
	$method_name=$_SERVER["REQUEST_METHOD"];
	$suchfeld=$_GET['suchbegriff'];
	echo "<b>Du hast nach der Zutat: \"<u>$suchfeld</u>\" gesucht. Dadurch wurden folgende Einträge gefunden:</b> <br>Es wird dir die Speise angezeigt, in der deine Zutat enthalten ist!<br /><br />"; 
	if($_SERVER["REQUEST_METHOD"])
	{
 
		switch ($method_name) 
		{
		  case 'GET':
			$qry="SELECT * from beleg_pizza1 WHERE Zutatenliste LIKE '%$suchfeld%'";
			$qry1="SELECT * from beleg_pizza2 WHERE Zutatenliste LIKE '%$suchfeld%'";
			$qry2="SELECT * from beleg_pizza3 WHERE Zutatenliste LIKE '%$suchfeld%'";
			
			$result=mysqli_query($conn, $qry) or die (mysqli_error($conn));
			$result1=mysqli_query($conn, $qry1) or die (mysqli_error($conn));
			$result2=mysqli_query($conn, $qry2) or die (mysqli_error($conn));
			
			$temp_cat = array();
			$temp_cat1 = array();
			$temp_cat2 = array();
			while ($row=mysqli_fetch_row($result))
			{
				$temp_cat[] = array("1"=>$row[1]);
			}
			echo "Aus ersten Restaurant:  ";
			print_r ($temp_cat);
			echo "<br>";
			
			while ($row=mysqli_fetch_row($result1))
			{
				$temp_cat1[] = array("1"=>$row[1]);
			}
			echo "Aus zweiten Restaurant:  ";
			print_r ($temp_cat1);
			echo "<br>";
			
			while ($row=mysqli_fetch_row($result2))
			{
				$temp_cat2[] = array("1"=>$row[1]);
			}
			echo "Aus dritten Restaurant:  ";
			print_r ($temp_cat2);
			
		  case 'POST';
		}

		echo "<br>";
	}
	else{
		$data=array("status"=>"0","message"=>"Please enter proper request method !! ");
		echo json_encode($data);
	}
	
}
catch(Exception $e) {
	 echo 'Caught exception: ',  $e->getMessage(), "\n";
}
 
 
?>