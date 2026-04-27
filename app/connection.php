<?php 
$host = "mysql";
$dbname = "testdb";
$username = "user";
$password = "password";

try{
    $pdo = new PDO("mysql:host=$host;dbname=$dbname",$username,$password);
    
    //set error code 
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Connected to DATABASE successfully";
}catch(PDOEXCEPTION $e){
    echo "Connection Failed:" . $e->getMessage();
}
?>