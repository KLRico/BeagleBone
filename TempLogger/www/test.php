<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
<?php
$servername = "127.0.0.1";
$username = "pythonuse";
$password = "pythonuse";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
	}
echo "Connected successfully";
?>
 </body>
</html>