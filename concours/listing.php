<?php
$servername = 'localhost';
$username = 'pycaste';
$password = 'root';

try {
    $connexion = new PDO("mysql:host=$servername;dbname=concoursChant", $username, $password);
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
echo "Erreur : " . $e->getMessage();}

$email = "py.cast@gmail.com";

$stmt = $connexion->prepare("SELECT * FROM users WHERE email=?");
$stmt->execute([$email]); 
$user = $stmt->fetch();
if ($user) {
    echo "email found";
} else {
    echo "c ok";
}

?>