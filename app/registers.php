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
      <form action="" method="POST">
        ID:<input type="text" name = "ID" id= "" ><br><br>
        Username:<input type="text" name = "username" id = ""><br><br>
        Email:<input type="text" name = "email" id =""><br><br>
        Password:<input type  = "password" name = "password"><br><br>
        <label for="Role">Choose a role:</label><br><br>
        <select name="Role" id="roles">
        <option value="admin">Admin</option>
        <option value="user">User</option>
  
        </select>
        <input type="submit" name = "submit" value = "Submit">
    </form>
     <?php 


        if(isset($_POST["submit"])){
         $In_que = $pdo->prepare("INSERT into registers(ID,Full_name,Email, Password,role)
                                Values(:id,:username,:email,:pass,:role)");
       
                                

            $In_que->execute([
            ':id' => $_POST['ID'],
            ':username' => $_POST['username'],
            ':email' => $_POST['email'],
            ':pass' => $_POST['password'],
            ':role' => $_POST['Role']
         ]); 

         echo "Data inserted successfully";
        }
         ?>
 </body> 

 </html> 