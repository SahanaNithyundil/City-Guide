<?php
$user = 'root';
$password = '';
$database = 'cityguide';
$servername='localhost';
$mysqli = new mysqli($servername, $user,
				$password, $database);
if ($mysqli->connect_error) {
	die('Connect Error (' .
	$mysqli->connect_errno . ') '.
	$mysqli->connect_error);
}
$sql = "SELECT * FROM hotels  ";
$result = $mysqli->query($sql);
$mysqli->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Places to visit</title>
	<style>
		table {
			margin: 0 auto;
			font-size: large;
			border: 1px solid black;
		}
		h1 {
			text-align: center;
			color: red;
			font-size: xx-large;
			font-family: 'Gill Sans', 'Gill Sans MT',
			' Calibri', 'Trebuchet MS', 'sans-serif';
		}
		td {
			background-color: #E4F5D4;
			border: 1px solid black;
		}

		th,
		td {
			font-weight: bold;
			border: 1px solid black;
			padding: 10px;
			text-align: center;
		}

		td {
			font-weight: lighter;
		}
	</style>
</head>
<body>
	<section>
		<h1>Restaurants in Bengaluru</h1>
		<table>
			<tr>
				<th>Sno</th>
				<th>Name of the place</th>
				<th>Address</th>
				<th>Restaurant type</th>
                
			</tr>
			<?php
				while($rows=$result->fetch_assoc())
				{
			?>
			<tr>
				<td><?php echo $rows['sno'];?></td>
				<td><?php echo $rows['rname'];?></td>
				<td><?php echo $rows['address'];?></td>
				<td><?php echo $rows['restauranttype'];?></td>
                
			</tr>
			<?php
				}
			?>
		</table>
	</section>
</body>
</html>
