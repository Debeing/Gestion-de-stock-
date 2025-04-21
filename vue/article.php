<?php
include'entete.php'

?>
        <div class="form-containered">
            <div class="form">
                <form action="../model/ajoutArticle.php" method="POST">
                    <div class="contenu">
                        <div class="input">
                            <label for="nom_article">Nom de l'article <span style="color: red;">*</span> </label>
                            <input type="text" name="nom_article" id="nom_article" placeholder="Veuillez saisir le nom"><br>
                            <label for="categorie">Catégorie<span style="color: red;">*</span></label><br>
                            <select name="categorie" id="Eric" required>
                                <option value="Voiture">
                                    <div class="voiture">Voiture
                                        <p>TOYOTA</p>
                                        <p>MERCEDEZ</p>
                                        <p>ZUZIKI</p>
                                    </div>
                                </option>
                                <option value="pneu">pneu</option>
                                <option value="chaisse">chaisse</option>
                                <option value="moteur">moteur</option>
                            </select><br>
                            <label for="quantite">Quantité<span style="color: red;">*</span></label><br>
                            <input type="number" name="quantite" placeholder="Veuillez saisir la Quantité" >
                            <label for="prix_unitaire">Prix unitaire<span style="color: red;">*</span></label><br>
                            <input type="number" name="prix_unitaire" placeholder="Veuillez saisir le Prix unitaire"><br>
                            <label for="date_fabrication">Date de fabrication<span style="color: red;">*</span></label><br>
                            <input type="datetime-local" name="date_fabrication"><br>
                            <label for="date_expiration">Date d'expiration<span style="color: red;">*</span></label><br>
                            <input type="datetime-local" name="date_expiration"><br>
                            <button type="submit" class="submit">Validé</button>
                            
                            <!-- affichage du message d'erreur dans notre formulaire-->
                            <?php
                              if (!empty($_SESSION['message']['text'])) {
                            ?>
                                <div class="alert" <?=$_SESSION['message']['type'] ?> >
                                <?=$_SESSION['message']['text']?>
                                </div>
                            <?php    
                              }
                            ?>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="box">
                <table class="mtable">
                        <tr>
                            <th>nom article</th>
                            <th> categorie</th>
                            <th>quantité</th>
                            <th> prix unitaire</th>
                            <th>date expiration</th>
                            <th>date fabrication</th>
                        </tr>
                        <!-- Vérification de la table liste, si elle n'est pas vide elle affiche ces informations au niveau du tableau -->
                        <?php
                        $articles = getArticle();

                        if (!empty($articles) && is_array($articles)) {
                            foreach ($articles as $key => $value) {
                                ?>
                                <tr>
                                    <td><?= $value['nom_article']  ?></td>
                                    <td><?= $value['categorie']  ?></td>
                                    <td><?= $value['quantite']  ?></td>
                                    <td><?= $value['prix_unitaire']  ?></td>
                                    <td><?= date('d/m/Y H:i:s', strtotime($value['date_fabrication']))  ?></td>
                                    <td><?= date('d/m/Y H:i:s', strtotime($value['date_expiration'])) ?></td>
                                </tr>
                                <?php
                            }
                        }
                        ?>
                </table>
            </div>
    </section>
    
   <?php
include'pied.php'
?>