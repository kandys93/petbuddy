<?php

include 'inc/header.inc.php';
include 'inc/nav.inc.php';
?>


        <div class="connexion">

            
            <form action="#">
                
                    <h1>Devenir PetSitter </h1>
                    <p></p>
                    <hr>
 
                    <label for="nom">Nom </label>
                    <input type="text" id="nom" name="nom" placeholder="Votre Nom" >

                    <label for="prenom">Prénom</label>
                    <input type="text" id="prenom" name="prenom" placeholder="Votre Prénom">

                    <label for="cd">Code Postale</label>
                    <input type="number" id="cd" name="cd" placeholder="Votre code postale">

                    <label for="ville">ville</label>
                    <input type="number" id="ville" name="ville" placeholder="Votre ville...">

                    <label for="date">Date de Naissance</label>
                    <input type="date" id="date" name="date" placeholder="Votre Date de naisssance">
                    <br>


                    <label for="email">Email</label>
                    <input type="text" placeholder="Votre email" name="email" id="email" required>

                    <label for="psw">Mot de passe</label>
                    <input type="password" placeholder="Mot de passe " name="psw" id="psw" onfocus="this.value=''" required>    
                    
                   
                    <br>
                    <br>


                    <label>
                        <input type="checkbox" checked="checked" name="checked"> J'accepte les termes et conditions et la politique de confidentialité.
                    </label>
                    
                <div class="btnflex">
                    <button type="submit" class="connexionbtn"><a href="profilcreatannonce.php"> C'est parti!</a></button>
                    <button type="submit" class="connexionbtn"><a href="indx.php"> Annuler </a></button>
                </div>

            </form>
        </div>




<?php include 'inc/footer.inc.php';

