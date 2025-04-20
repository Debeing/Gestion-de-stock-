
<?php
include '../model/connexion.php';
function getClient()
{
    //une requette qui permet de selectionner tout les articles saisis dans le formulaire et de les affichés dans notre tableau
    $sql = "SELECT * FROM client";
    $req = $GLOBALS['connexion'] -> prepare($sql);
    $req -> execute();
//fetchAll permet de retourner tout les resultat de la requête 
    return $req -> fetchAll();
}
?>

