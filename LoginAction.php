<?php

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

if($username === "Adi Kurniawan" && $email === "kurniawan@email.com" && $password === "robot"){
    echo "<h1>LOGIN BERHASIL</h1>";
}else{
    echo "<h2>DATA TIDAK DITEMUKAN</h2>";
    echo "<a href='Login.php'>back</a>";
}

?>