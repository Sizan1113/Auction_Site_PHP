<?php
require 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="GET">
        <input type="text" name = "ID" id= "" >
        <input type="text" name = "username" id = "">
        <input type="text" name = "email" id ="">
        <input type="submit" name = "submit" value = "Submit">
    </form>

    <? php

    //Inserting using prepare statement
       if(isset($_GET["submit"])){
         $In_que = $pdo->prepare("INSERT into user(ID,USERNAME,Email)
                                Values(:id,:username,:email)");
       
                                

            $In_que->execute([
            ':id' => $_GET['ID'],
            ':username' => $_GET['username'],
            ':email' => $_GET['email']
         ]); 
         
         //Inserting via a array
        //  $array =[
        //     ':id' => $_GET['ID'],
        //     ':username' => $_GET['username'],
        //     ':email' => $_GET['email']
        //  ];
        // $In_que->execute($array);


        //Inserting directly
        //  $In_que = $pdo->prepare("INSERT into user(ID,USERNAME,Email)
        //                         Values(111,'Hari','hari@gmail.com')");
        //  $In_que->execute();
  
      

       } 
    ?>
</body>
</html>