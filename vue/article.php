<?php
include'entete.php'  
?>
        <div class="form-containered">
            <div class="form">
                <form action="../model/ajoutArticle.php" method="POST">
                    <div class="contenu">
                        <div class="input">
                            <label for="nom_article">Nom de l'article <span style="color: red;">*</span> </label>
                            <input type="text" name="nom_article" id="nom_article" placeholder="Veuillez saisir le nom" required><br>
                            <label for="categorie">Catégorie<span style="color: red;">*</span></label><br>
                            <select name="categorie" id="Eric" required>
                                <option value="Voiture">Voiture</option>
                                <option value="pneu">pneu</option>
                                <option value="chaisse">chaisse</option>
                                <option value="moteur">moteur</option>
                            </select><br>
                            <label for="quantite">Quantité<span style="color: red;">*</span></label><br>
                            <input type="number" name="quantite" placeholder="Veuillez saisir la Quantité" required>
                            <label for="prix_unitaire">Prix unitaire<span style="color: red;">*</span></label><br>
                            <input type="number" name="prix_unitaire" placeholder="Veuillez saisir le Prix unitaire"required><br>
                            <label for="date_fabrication">Date de fabrication<span style="color: red;">*</span></label><br>
                            <input type="datetime-local" name="date_fabrication" required><br>
                            <label for="date_expiration">Date d'expiration<span style="color: red;">*</span></label><br>
                            <input type="datetime-local" name="date_expiration" required><br>
                            <button type="submit" class="submit">Validé</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="box">
                <table class="mtable">
                    <thead>
                        <tr>
                            <th>nom_article</th>
                            <th> categorie</th>
                            <th>quantité</th>
                            <th> prix_unitaire</th>
                            <th>date_expiration</th>
                            <th>date_fabrication</th>
                        </tr>
                        <?php
                            include '../model/afficherArticle.php';
                        ?>
                    </thead>
                </table>
            </div>
        </div>
    </section>
    
   <?php
include'pied.php'
?>