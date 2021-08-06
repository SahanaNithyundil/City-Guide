<!DOCTYPE html>
<html lang="en">
<head>
<title>Add Restaurants </title>
	<style>
    body{
        background-color: powderblue;
        padding:50px;
		}
    p{
    padding:30px;
    height:30px
    }
	</style>
</head>
<body>
<center>
<form action="insertrestaurant.php" method="post">
<p>
	<label for="Sno">Serial number</label>
	<input type="text" name="sno" id="Sno">
</p>		
<p>
	<label for="Name">Name of restaurant:</label>
	<input type="text" name="name" id="rname">
</p>
<p>
	<label for="Address">Address:</label>
	<input style="width:300px;" type="text" name="address" id="Address">
</p>
<p>
	<label for="contactnumber">Restaurant type:</label>
	<input  type="text" name="restauranttype" id="restauranttype">
</p>
<input type="submit" value="Submit">
</form>
</center>
</body>
</html>
