

// $text = "Hello World";
// echo $text;
// $hashtext = password_hash($text,PASSWORD_DEFAULT);
// echo $hashtext;
// $verifytext = password_verify($text,$hashtext);
// echo $verifytext;
// if ($verifytext){
//     echo "Password is correct!";}
// else{
//     echo "Password is incorrect";
// }

<?php
require 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>

<form action="" method="POST">
    <input type="text" name="ID" placeholder="ID"><br>
    <input type="text" name="username" placeholder="Username"><br>
    <input type="text" name="email" placeholder="Email"><br>
    <input type="password" name="password" placeholder="Password"><br>
    <input type="submit" name="submit" value="Submit">
</form>

<?php
if(isset($_POST["submit"])){

      $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $In_que = $pdo->prepare("
        INSERT INTO registers (ID, Full_name, Email, Password)
        VALUES (:id, :username, :email, :pass)
    ");

    $In_que->execute([
        ':id' => $_POST['ID'],
        ':username' => $_POST['username'],
        ':email' => $_POST['email'],
        ':pass' => $hashedPassword
    ]);

    echo "Data inserted successfully!";
}
?>

</body>
</html>