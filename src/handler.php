<?php 
$value = "World";
$db = new PDO('mysql:host=database;dbname=my_db;charset=utf8mb4', 'my_user', 'my_password');

$user_name = trim($_REQUEST['name']);
$user_pass = trim($_REQUEST['password']);

$sql = "INSERT INTO registration_user_data (name, pass) VALUES('{$user_name}', '{$user_pass}');";

$databaseTest = ($db->query($sql));
?>
<html>
	<head>
		<META HTTP-EQUIV='Refresh' CONTENT='1,URL=index.html'>
	</head>
	<body>
	</body>
</html>
