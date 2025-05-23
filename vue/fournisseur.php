<?php
include'entete.php'

?>
  <div class="form-containered">
            <div class="form">
                <form action="../model/ajoutFournisseur.php" method="POST">
                    <div class="contenu">
                        <div class="input">
                            <label for="nom">Nom<span style="color: red;">*</span> </label>
                            <input type="text" name="nom" id="nom" placeholder="Veuillez saisir le nom"><br>
                            <label for="prenom">Prénom<span style="color: red;">*</span></label><br>
                            <input type="text" name="prenom" id="prenom" placeholder="Veuillez saisir le prénom"><br>
                            <label for="telephone">Téléphone<span style="color: red;">*</span></label><br>
                            <input type="number" name="telephone" placeholder="Numéro téléphone">
                            <label for="adresse">Adresse<span style="color: red;">*</span></label><br>
                            <input type="text" name="adresse" placeholder="Veuillez saisir l'adresse"><br>
                            <button type="submit" class="submit">Validé</button>
                            
                            <!-- affichage du message d'erreur dans notre formulaire-->
                            <?php
                              if (!empty($_SESSION['message']['text'])) {
                            ?>
                                <div class="alert" <?=$_SESSION['message']['type'] ?>>
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
        </div>
        <div class="box">
                <table class="mtable">
                        <tr>
                            <th>nom</th>
                            <th> Prénom</th>
                            <th>Téléphone</th>
                            <th>Adresse</th>
                        </tr>
                        <?php
                        $clients = getClient();

                        if (!empty($clients) && is_array($clients)) {
                            foreach ($clients as $key => $value) {
                                ?>
                                <tr>
                                    <td><?= $value['nom']  ?></td>
                                    <td><?= $value['prenom']  ?></td>
                                    <td><?= $value['telephone']  ?></td>
                                    <td><?= $value['adresse']  ?></td>
                                </tr>
                                <?php
                            }
                        }
                        ?>
                </table>
            </div>
    </section>
  
<?php
include'pied.php';
?>