<?php
$dsn = 'mysql:dbname=rehber;host=localhost';
$user = 'root';
$password = '';

try{
	$db = new PDO($dsn, $user, $password);
	} catch (PDOException $e)
{
	echo 'baglantı saglanamadı' . $e->getMessage();
}
?>