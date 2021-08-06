<!DOCTYPE html>
<html lang="en">
<head>
<title>ADD METRO STATIONS</title>
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
<form action="insertmetro.php" method="post">
<p>
	<label for="Sno">Serial number</label>
	<input type="text" name="sno" id="Sno">
</p>		
<p>
	<label for="Name">Name of metro station:</label>
	<input type="text" name="name" id="Mname">
</p>
<p>
	<label for="Address">Important places covered:</label>
	<input style="width:300px;" type="text" name="address" id="Address">
</p>
	<input type="submit" value="Submit">
</form>
</center>
</body>
</html>
