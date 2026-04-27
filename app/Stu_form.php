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
        <input type="text" name = "address" id ="">
        <input type="text" name = "mobile_no" id ="">
        <input type="submit" name = "Insert" value = "Insert">
        <input type="submit" name = "View" value = "View">
        <input type="submit" name = "Update" value = "Update">
        <input type="submit" name = "Delete" value = "Delete">
    </form>

    <?php

    //Inserting using prepare statement
       if(isset($_GET["Insert"])){
         $In_que = $pdo->prepare("INSERT into student(ID,name   ,address)
                                Values(:id,:username,:email)");}
       
                                

            $In_que->execute([
            ':id' => $_GET['ID'],
            ':username' => $_GET['username'],
            ':email' => $_GET['email']
         ]);
         
          if(isset($_GET["View"])){
         $In_que = $pdo->prepare("Select * from student");}
       
                                

            $In_que->execute([
            ':id' => $_GET['ID'],
            ':username' => $_GET['username'],
            ':email' => $_GET['email']
         ]);

          if(isset($_GET["Update"])){
         $In_que = $pdo->prepare("Update table student
                                Set username = ""
                                Where id = 1");
                                
        
       
                                

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