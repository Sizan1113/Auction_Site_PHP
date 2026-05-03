<?php
$a= "hello";
echo $a;
$hashtext = password_hash($a,PASSWORD_DEFAULT);
echo $hashtext;
$verifytext = password_verify($a,$hashtext);
echo $verifytext;
if ($verifytext){
    echo "Password is correct!";}
else{
    echo "Password is incorrect";
}
?>