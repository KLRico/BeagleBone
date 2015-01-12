
<html>
<head>
<title>BeagleBone LED Changer</title>
<style type="text/css">
p { display: table-cell; }
button { width: 400px; margin: 2px auto; }
</style>
<?php
if (isset($_GET['led']) && isset($_GET['onOff']))
{
$led = $_GET['led'];
$onOff = $_GET['onOff'];
 
exec( " ./ledctl $led $onOff" );
}
?>
</head>
	<body>
	<div style="width: 500px; margin: 100px auto;">
		<div style="width: 100px; margin-left:0px;">
			<p>LED #1:</p>
			<button type="button" onclick="location.href='ledCtl.php?led=0&onOff=1'">ON</button>
			<button type="button" onclick="location.href='ledCtl.php?led=0&onOff=0'">OFF</button>
			</div>
		<div sytle="width: 100px; margin-left: 200px;">
			<p>LED #2:</p>
			<button type="button" onclick="location.href='ledCtl.php?led=1&onOff=1'">ON</button>
			<button type="button" onclick="location.href='ledCtl.php?led=1&onOff=0'">OFF</button>
			</div>
		<div sytle="width: 100px; margin-left: 300px;">
			<p>LED #3:</p>
			<button type="button" onclick="location.href='ledCtl.php?led=2&onOff=1'">ON</button>
			<button type="button" onclick="location.href='ledCtl.php?led=2&onOff=0'">OFF</button>
			</div>
		<div sytle="width: 100px; margin-left: 400px;">
			<p>LED #3:</p>
			<button type="button" onclick="location.href='ledCtl.php?led=3&onOff=1'">ON</button>
			<button type="button" onclick="location.href='ledCtl.php?led=3&onOff=0'">OFF</button>
			</div>
</div>
</body>
</html>
