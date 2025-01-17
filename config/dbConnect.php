<?php
$user = "root";
$pass = "senac123";
try {
    $dbh = new PDO('mysql:host=localhost;dbname=mencoes', $user, $pass);
} catch (PDOException $e) {
    echo $e;
}