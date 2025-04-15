<?php
include'entete.php'  
?>
    <div class="form">
        <form action="../model/ajoutArticle.php" method="POST">
            <div class="contenu">
                <div class="input">
                    <label for="nom_article">Nom de l'article</label>
                    <input type="text" name="nom_article" id="nom_article" placeholder="Veuillez saisir le nom"><br>
                    <label for="categorie">Catégorie</label><br>
                    <select name="categorie" id="Eric">
                        <option value="Voiture">Voiture</option>
                        <option value="pneu">pneu</option>
                        <option value="chaisse">chaisse</option>
                        <option value="moteur">moteur</option>
                    </select><br>
                    <label for="quantite">Quantité</label><br>
                    <input type="number" name="quantite" placeholder="Veuillez saisir la Quantité">
                    <label for="prix_unitaire">Prix unitaire</label><br>
                    <input type="number" name="prix_unitaire" placeholder="Veuillez saisir le Prix unitaire"><br>
                    <label for="date_fabrication">Date de fabrication</label><br>
                    <input type="datetime-local" name="date_fabrication"><br>
                    <label for="date_expiration">Date d'expiration</label><br>
                    <input type="datetime-local" name="date_expiration"><br>
                    <button type="submit" class="submit">Validé</button>
                </div>
            </div>
        </form>
    </div>
    
   <?php
include'pied.php'
?>