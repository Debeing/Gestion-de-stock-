<?php
include 'connexion.php';

if (
    !empty($_POST['nom_article'])
   && !empty($_POST['categorie'])
   && !empty($_POST['quantite'])
   && !empty($_POST['prix_unitaire'])
   && !empty($_POST['date_fabrication'])
   && !empty($_POST['date_expiration'])
   ){
    $sql = "INSERT INTO article(nom_article, categorie, quantite, prix_unitaire, date_fabrication, date_expiration)
            VALUES (?, ?, ?, ?, ?, ?)";
    $req = $connexion->prepare($sql);
    $req->execute([
        $_POST['nom_article'],
        $_POST['categorie'],
        $_POST['quantite'],
        $_POST['prix_unitaire'],
        $_POST['date_fabrication'],
        $_POST['date_expiration']
    ]);

    //On veut afficher le message de succès ou d'erreur dans le formulaire lors de l'ajout d'un article
    if ($req->rowCount()!=0) {
        $_SESSION['message']['text'] = "article ajouté avec succès";
        $_SESSION['message']['type'] = "success";
       // echo "article ajouté avec succès"; 
    }
        else {
            $_SESSION['message']['text'] = "Erreur lors de l'ajout de l'article";
            $_SESSION['message']['type'] = "danger";
            //echo "Erreur lors de l'ajout de l'article";
        }
   } else {
    $_SESSION['message']['text'] = "Erreur lors de l'ajout de l'article";
    $_SESSION['message']['type'] = "danger";
   }
  
   header('Location: ../vue/article.php');
?>

