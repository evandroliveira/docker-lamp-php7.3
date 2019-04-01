<?php

#Obs verifique o ip do container do banco
//  Configure DB Parameters
$host = "172.19.0.3";
$dbname = "labs";
$dbuser = "postgres";
$userpass = "123456";
$port = "5432";

$dsn = "pgsql:host=$host;port=$port;dbname=$dbname;user=$dbuser;password=$userpass";

try{
 // create a PostgreSQL database connection
 $conn = new PDO($dsn);

 // display a message if connected to the PostgreSQL successfully
 if($conn){
 echo "Connected to the $dbname database successfully!";
 echo "\n";
 }
}catch (PDOException $e){
 // report error message
 echo $e->getMessage();
}