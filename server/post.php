<?php

print_r($_POST);

$servername = "#";
$database = "#";

$username = "#";
$password = "#";
$sql = "mysql:host=$servername;dbname=$database;";
$dsn_Options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
// Create a new connection to the MySQL database using PDO, $my_Db_Connection is an object
try { 
  $my_Db_Connection = new PDO($sql, $username, $password, $dsn_Options);
  echo "Connected successfully";
} catch (PDOException $error) {
  echo 'Connection error' . $error->getMessage();
  die();
}

$email = $_POST['email'];
$my_Insert_Statement = $my_Db_Connection->prepare("INSERT INTO clients (email) VALUES (:email)");
$my_Insert_Statement->bindParam(':email', $email);

header('http://localhost:8888/3seis9group/');

?>