<?php
include 'connexion.php';

if (
    !empty($_POST['id_article'])
   && !empty($_POST['id_client'])
   && !empty($_POST['quantite'])
   && !empty($_POST['prix'])
   ){
    $sql = "INSERT INTO vente(id_article, id_client, quantite, prix)
            VALUES (?, ?, ?, ?)";
    $req = $connexion->prepare($sql);
    $req->execute([
        $_POST['id_article'],
        $_POST['id_client'],
        $_POST['quantite'],
        $_POST['prix']
    ]);

    //On veut afficher le message de succès ou d'erreur dans le formulaire lors de l'ajout d'un article
    if ($req->rowCount()!=0) {
        $_SESSION['message']['text'] = "article ajouté avec succès";
        $_SESSION['message']['type'] = "success";
       // echo "article ajouté avec succès"; 
    }
        else {
            $_SESSION['message']['text'] = "Erreur lors de l'ajout de l'article";
            $_SESSION['message']['type'] = "Danger";
            //echo "Erreur lors de l'ajout de l'article";
        }
   } else {
    $_SESSION['message']['text'] = "Une information obligatoire non renseignée";
    $_SESSION['message']['type'] = "Danger";
   }

   header('Location: ../vue/article.php');
?>

