<!DOCTYPE html>
<html>

<head>
	<title>Insert Places</title>
</head>

<body>
	<center>
		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
		$conn = mysqli_connect("localhost", "root", "", "cityguide");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
        $sno=$_REQUEST['sno'];
		$name = $_REQUEST['name'];
		
		
		$address = $_REQUEST['address'];
		
		$desc=$_REQUEST['desc'];
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO places VALUES ('$sno','$name',
			'$address','$desc')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>data stored in a database successfully."
				. " Please browse your localhost php my admin"
				. " to view the updated data</h3>";

			
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	</center>
</body>

</html>
