
<?php
include '../model/connexion.php';
include '../model/ajoutArticle.php';
function getajoutArticle()
{
    $sql = "SELECT * FROM article";
    $req = $GLOBALS['connexion'] -> prepare($sql);
    $req -> execute();

    return $req -> fetchAll();
}
?>

