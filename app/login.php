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
    <form action="" method = "POST">
    <input type="text" name = "Email">
    <input type="password" name = "password">
    <input type="submit" name ="login">
</form>
    <?php
    if(isset($_POST['login'])){

    $email = $_POST['Email'];
    $password = $_POST['password'];

    // Get user from database
    $stmt = $pdo->prepare("SELECT * FROM registers WHERE Email = :email");
    $stmt->execute([':email' => $email]);

    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    
    if($user){
        
        if(password_verify($password, $user['Password'])){
            echo "Login successful!";
            
        } else {
            echo "Wrong password!";
        }
    } else {
        echo "User not found!";
    }
    }
    ?>
</body>
</html>