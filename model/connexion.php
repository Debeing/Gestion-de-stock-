<?php
// Connexion à la base de donnée
session_start();

$nom_serveur = "localhost";
$nom_utilisateur = "root";
$nom_base_de_donnees = "gestion_stock_garage";
$mot_de_passe = "";
 try {
    $connexion = new PDO("mysql:host=$nom_serveur;dbname=$nom_base_de_donnees", $nom_utilisateur, $mot_de_passe);
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $connexion;
 } catch (Exception $e) {
    die("Erreur de connexion : " . $e->getMessage());
 }

?>

