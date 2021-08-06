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
$sql = "SELECT * FROM metro  ";
$result = $mysqli->query($sql);
$mysqli->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Metro Stations</title>
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
		<h1>Metro stations in Bengaluru</h1>
		<table>
			<tr>
				<th>Sno</th>
				<th>Name of the station</th>
				<th>Important places covered</th>
				
			</tr>
			<?php 
				while($rows=$result->fetch_assoc())
				{
			?>
			<tr>
				<td><?php echo $rows['sno'];?></td>
				<td><?php echo $rows['Mname'];?></td>
				<td><?php echo $rows['address'];?></td>
			</tr>
			<?php
				}
			?>
		</table>
	</section>
</body>
</html>
