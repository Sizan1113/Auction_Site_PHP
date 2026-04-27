<?php
require 'connection.php'
?>
<?php
$query=  $pdo->prepare("SELECT * FROM user");
$query ->execute();
$result = $query->fetchALL(PDO::FETCH_ASSOC);
foreach($result as $rows){
    echo "ID:".$rows['ID']." "."Name:".$rows['USERNAME']." "."Email".$rows['Email'].'<br>';
}

?>