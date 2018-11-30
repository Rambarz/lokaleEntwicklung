<?php 
try{
	include 'connection.php';
	$method_name=$_SERVER["REQUEST_METHOD"];
	if($_SERVER["REQUEST_METHOD"])
	{
 
		switch ($method_name) 
		{
		  case 'GET':
			$qry="SELECT * from beleg_pizza1";
			$result=mysqli_query($conn, $qry) or die (mysqli_error($conn));
			
			while ($row=mysqli_fetch_row($result))
			{
				$temp_cat[] = array("ID"=>$row[0], "Name"=>$row[1],"Preis"=>$row[2],"Zutatenliste"=>$row[3],"RestaurantName"=>$row[4],"Adresse"=>$row[5],"Telefonnummer"=>$row[6]);
			}
			
			$myJSON = json_encode($temp_cat);
			$data=($temp_cat);
			
			/*$data=array("status"=>"1","message"=>"success","result"=>$temp_cat);*/
			break;
			
		  case 'POST';
		}
		
		echo $myJSON;
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