<!DOCTYPE html>
<html lang="en">

<head>
	<title>PLACES TO VISIT</title>
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
	<form action="insert.php" method="post">
	<p>
	<label for="Sno">Serial number</label>
	<input type="text" name="sno" id="Sno">
	</p>		
	<p>
	<label for="Name">Name of place:</label>
	<input type="text" name="name" id="PName">
	</p>
	<p>
	<label for="Address">Address:</label>
	<input style="width:300px;" type="text" name="address" id="Address">
	</p>
	<p>
	<label for="Description">Description</label>
	<input type="text" name="desc" id="desc">
	</p>
	<input type="submit" value="Submit">
	</form>
</center>
</body>
</html>
