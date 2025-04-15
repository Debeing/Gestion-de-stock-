<?php
include'entete.php'  
?>
    <div class="form">
        <form action="../model/ajoutArticle.php" method="POST">
            <div class="contenu">
                <div class="input">
                    <label for="name">Nom de l'article</label>
                    <input type="text" name="text" placeholder="Veuillez saisir le nom"><br>
                    <label for="text">Catégorie</label><br>
                    <select name="Eric" id="Eric">
                        <option value="Eric">option1</option>
                        <option value="Eric">option1</option>
                        <option value="Eric">option1</option>
                        <option value="Eric">option1</option>
                    </select><br>
                    <label for="number">Quantité</label><br>
                    <input type="number" name="number" placeholder="Veuillez saisir la Quantité">
                    <label for="Prix">Prix unitaire</label><br>
                    <input type="number" name="Prix" placeholder="Veuillez saisir le Prix unitaire"><br>
                    <label for="date">Date de fabrication</label><br>
                    <input type="date" name="date"><br>
                    <label for="date">Date d'expiration</label><br>
                    <input type="date" name="date"><br>
                    <button type="submit" class="submit">Validé</button>
                </div>
            </div>
        </form>
    </div>
    
   <?php
include'pied.php'
?>