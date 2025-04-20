
<?php
include '../model/connexion.php';
function getArticle()
{
    $sql = "SELECT * FROM article";
    $req = $GLOBALS['connexion'] -> prepare($sql);
    $req -> execute();
//fetchAll permet de retourner tout les resultat de la requête 
    return $req -> fetchAll();
}
?>

