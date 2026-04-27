<?php
require 'connection.php'
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
<?php
    $Up_que = $pdo->prepare("UPDATE  user SET USERNAME=:username,email=:email where ID=:id");
                               
       
                                

            $Up_que->execute([
            ':id' => $_GET['ID'],
            ':username' => $_GET['username'],
            ':email' => $_GET['email']]);
?>
</body>
</html>