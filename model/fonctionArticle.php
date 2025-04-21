
<?php
include '../model/connexion.php';

// une fonction qui recupère les articles
function getArticle()
{
    //une requette qui permet de selectionner tout les articles saisis dans le formulaire et de les affichés dans notre tableau
    $sql = "SELECT * FROM article";
    $req = $GLOBALS['connexion'] -> prepare($sql);
    $req -> execute();
//fetchAll permet de retourner tout les resultat de la requête 
    return $req -> fetchAll();
}
?>

