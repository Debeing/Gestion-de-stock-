<?php
include 'connexion.php';
include_once"fonctionVente.php";

if (
    !empty($_POST['id_article'])
   && !empty($_POST['id_client'])
   && !empty($_POST['quantite'])
   && !empty($_POST['prix'])
   ){

    $article = getArticle($_POST['id_article']);
    if (!empty($article) && is_array($article)) {
        if ($_POST['quantite']>$article['quantite']) {
            $_SESSION['message']['text'] = "La quantité à vendre n'est pas disponible";
            $_SESSION['message']['type'] = "Danger";
        }else {
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

        // requette pour mettre à jour l'stock d'article
        $sql = " UPDATE article SET quantite=quantite-? WHERE id=?";
        $req = $connexion->prepare($sql);
        $req->execute([
        $_POST['quantite'],
        $_POST['id_article'],
    ]);
    if ($req->rowCount()!=0) {
        $_SESSION['message']['text'] = "vente effectuée avec succès";
        $_SESSION['message']['type'] = "success";
    } else {
        $_SESSION['message']['text'] = "Impossible de faire cette vente";
        $_SESSION['message']['type'] = "Danger";    
    }

    } else {
    $_SESSION['message']['text'] = "Une erreur s'est produite lors de la vente";
    $_SESSION['message']['type'] = "Danger";
   }
 }
}


} else {
    $_SESSION['message']['text'] = "Une information obligatoire non renseignée";
    $_SESSION['message']['type'] = "Danger";
   }
    
   header('Location: ../vue/article.php');
?>

