<!-- <?php
// require 'connection.php';
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
        <input type="text" name = "ID" id= "" >
        <input type="text" name = "username" id = "">
        <input type="text" name = "email" id ="">
        <input type  = "password" name = "password">
        <input type="submit" name = "submit" value = "Submit">
    </form>
    <!-- <?php 


        if(isset($_POST["submit"])){
         $In_que = $pdo->prepare("INSERT into registers(ID,Full_name,Email, Password)
                                Values(:id,:username,:email,:pass)");}
       
                                

            $In_que->execute([
            ':id' => $_POST['ID'],
            ':username' => $_POST['username'],
            ':email' => $_POST['email'],
            ':pass' => $_POST['password']
         ]); 

         echo "Data inserted successfully";
        //  ?>
<!-- </body> -->

<!-- </html> -->