<?php
include'entete.php'

?>
        <div class="form-containered">
            <div class="form">
                <form action="<?= !empty($_GET['id']) ? "../model/ajoutArticle.php" : "../model/fonctionArticle" ?> "method="POST">
                    <div class="contenu">
                        <div class="input">
                            <input value="<?= !empty($_GET['id']) ? $article['id'] : "" ?> "type="hidden" name="id" id="id">
                            <label for="id_article">Vente<span style="color: red;">*</span></label><br>
                            <select name="id_article" id="id_article">

                                // Récupération de la liste des articles dans la base de données 
                                <?php
                                $articles = getArticle();
                                if (!empty($articles) && is_array($articles)) {
                                    foreach ($articles as $key => $value) {
                                        ?>
                                        <option value="<?= $value['id'] ?>"><?= $value['nom_article']. " - " .$value['quantite']. " disponible" ?></option>
                                        <?php
                                    }
                                }
                                ?>
                            </select><br>

                            <label for="id_client">Client<span style="color: red;">*</span></label><br>
                            <select name="id_client" id="id_client">

                                // Récupération de la liste des clients dans la base de données 
                                <?php
                                $clients = getClient();
                                if (!empty($clients) && is_array($clients)) {
                                    foreach ($clients as $key => $value) {
                                        ?>
                                        <option value="<?= $value['id'] ?>"><?= $value['nom'] . " " . $value['prenom'] ?></option>
                                        <?php
                                    }
                                }
                                ?>
                            </select><br>
                            <label for="quantite">Quantité<span style="color: red;">*</span></label><br>
                            <input type="number" name="quantite" placeholder="Veuillez saisir la Quantité" >
                            <label for="prix">Prix<span style="color: red;">*</span></label><br>
                            <input type="number" name="prix_unitaire" placeholder="Veuillez saisir le Prix unitaire"><br>
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