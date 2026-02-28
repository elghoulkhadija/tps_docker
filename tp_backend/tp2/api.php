<?php
header('Content-Type: application/json'); 
 
// Inclure la configuration 
include 'config.php'; 
 
// Requête SQL pour récupérer tous les produits 
$sql = "SELECT * FROM produits"; 
$result = $conn->query($sql); 
 
$produits = []; 
 
if ($result->num_rows > 0) { 
    while($row = $result->fetch_assoc()) { 
        $produits[] = $row; 
    } 
} 
 
// Retourner les produits en JSON 
echo json_encode($produits); 
 
// Fermer la connexion 
$conn->close(); 
?> 
