<?php
include 'connexion.php';

if (
    !empty($_POST['nom'])
   && !empty($_POST['prenom'])
   && !empty($_POST['telephone'])
   && !empty($_POST['adresse'])
   ){
    $sql = "INSERT INTO fournisseur(nom, prenom, telephone, adresse)
            VALUES (?, ?, ?, ?)";
    $req = $connexion->prepare($sql);
    $req->execute([
        $_POST['nom'],
        $_POST['prenom'],
        $_POST['telephone'],
        $_POST['adresse']
    ]);

    //On veut afficher le message de succès ou d'erreur dans le formulaire lors de l'ajout d'un article
    if ($req->rowCount()!=0) {
        $_SESSION['message']['text'] = "Client ajouté avec succès";
        $_SESSION['message']['type'] = "success";
       // echo "article ajouté avec succès"; 
    }
        else {
            $_SESSION['message']['text'] = "Erreur lors de l'ajout du client";
            $_SESSION['message']['type'] = "danger";
            //echo "Erreur lors de l'ajout de l'article";
        }
   } else {
    $_SESSION['message']['text'] = "Erreur lors de l'ajout du client";
    $_SESSION['message']['type'] = "danger";
   }
  
  
   header('Location: ../vue/client.php');
?>

