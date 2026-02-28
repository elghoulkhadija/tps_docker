<?php 
$host = 'db';          // Nom du service MySQL dans docker-compose 
$dbname = 'produits_db'; 
$user = 'user'; 
$password = 'password'; 
 
// Connexion à MySQL 
$conn = new mysqli($host, $user, $password, $dbname); 
 
if ($conn->connect_error) { 
    die("Connexion échouée: " . $conn->connect_error); 
} 
?> 