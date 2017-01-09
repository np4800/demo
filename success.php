<!DOCTYPE html>
 <?php
   session_start();
   if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] == false) {
     header("Location: index.php");
   }

<html>
	<head>
		<meta charset=utf-8 />
		<title>Hello world!</title>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
		<style>
			body {
				background-color: white;
				text-align: center;
				padding: 50px;
				font-family: "Open Sans","Helvetica Neue",Helvetica,Arial,sans-serif;
			}
		</style>
	</head>
	<body>
		<h1> Hello $username</h1>
	</body>
</html>
