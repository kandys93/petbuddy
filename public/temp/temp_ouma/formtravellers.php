<?php

include 'inc/header.inc.php';
include 'inc/nav.inc.php';
?>

        <div class="connexion">

            
            <form action="#">
                
                    <h1>S'inscrire pour faire garder son animal </h1>
                    <p></p>
                    <hr>
                    


                    <label for="nom">Nom </label>
                    <input type="text" id="nom" name="nom" placeholder="Votre Nom" >

                    <label for="prenom">Prénom</label>
                    <input type="text" id="prenom" name="prenom" placeholder="Votre Prénom">

                    <label for="cd">Code Postale</label>
                    <input type="text" id="cd" name="cd" placeholder="Votre code postale">


                    <label for="email">Email</label>
                    <input type="text" placeholder="Votre email" name="email" id="email" required>

                    <label for="psw">Mot de passe</label>
                    <input type="password" placeholder="Mot de passe " name="psw" id="psw" onfocus="this.value=''" required>    
                    
                    <label for="psw">Type d'animal :</label>
                    <br>
                    <br>

                    <label class="animaltype">
                        <input type="checkbox" >
                        <span class="checkmark"></span>
                        chein
                    </label>
                    <label class="animaltype">
                        <input type="checkbox" >
                        <span class="checkmark"></span>
                        chat
                    </label>
                    <label class="animaltype">
                        <input type="checkbox" >
                        <span class="checkmark"></span>
                        oiseau
                    </label>

                    <br>
                    <br>


                    <label>
                        <input type="checkbox" checked="checked" name="checked"> J'accepte les termes et conditions et la politique de confidentialité.
                    </label>
                    
                <div class="btnflex">
                    <button type="submit" class="connexionbtn">C'est parti!</button>
                    <button type="submit" class="connexionbtn">Annuler</button>
                </div>

            </form>
        </div>




<?php include 'inc/footer.inc.php';