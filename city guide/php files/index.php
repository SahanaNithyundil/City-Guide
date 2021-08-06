<!DOCTYPE html>
<html>
<head>
<style>
ul {
  list-style-type: none;
  margin: 40px;
  padding: 20px;
  width: 200px;
  background-color: powderblue;
  align-items: center;
}
li a {
  display: block;
  color: #000;
  padding: 15px 50px;
  text-decoration: none;
}
li a:hover {
  background-color: #555;
  color: red;
}
.bg-img {
  background-image: url("bg-img.jpg");
  min-height: 700px;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}
</style>
</head>
<body class="bg-img">
<div class="bg-img">
<ul>
  <li><a href="home.php">Admin Login</a></li>
  <li><a href="tourist.php">Tourist</a></li>
</ul>
</div>
</body>
</html>