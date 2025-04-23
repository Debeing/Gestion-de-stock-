
<?php
include '../model/connexion.php';

// une fonction qui recupère les ventes
function getVente()
{
    //une requette qui permet de selectionner tout les ventes saisis dans le formulaire et de les affichés dans notre tableau
    $sql = "SELECT * FROM vente";
    $req = $GLOBALS['connexion'] -> prepare($sql);
    $req -> execute();
//fetchAll permet de retourner tout les resultat de la requête 
    return $req -> fetchAll();
}
?>

