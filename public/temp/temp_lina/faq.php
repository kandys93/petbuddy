<?php
include 'inc/header.inc.php';
include 'inc/nav.inc.php';
?>
    <div class="imgbckg">
        <img src="img/petcare.png" alt="petwow" class="responsive">
    </div>
    <div class="faq">

        <hr><h1>FAQ</h1><br><br><hr>


        <div class="question">
            <p>Comment m'inscrire sur Petbuddy ?</p>
            <div class="answer">

                <p><br>
                Bienvenue chez Petbuddy ! Pour créer votre compte, suivez simplement les étapes suivantes : <br><br>
                1. Allez sur www.petbuddy.fr et sélectionnez S'inscrire dans le coin supérieur droit de votre écran. <br><br>
                2. N'oubliez pas de consulter nos Conditions d'utilisation avant de continuer. <br><br>
                3. Remplissez notre formulaire. Vous êtes fin prêt ! <br><br></p>
            </div>
        </div>
        <div class="question">
            <p>Comment me connecter à mon compte ?</p>
            <div class="answer">
                <p><br>
                Bon retour parmi nous ! Voici comment vous connecter à votre compte :<br><br>
                1. Allez sur www.Petbuddy.fr<br><br>
                2. Sélectionnez Se connecter dans le coin supérieur droit de votre écran. <br><br>
                3. Saisissez votre adresse e-mail ainsi que votre mot de passe.<br><br>
                4. Sélectionnez Se connecter. Vous êtes fin prêt !</p>
            </div>
        </div>
        <div class="question">
            <p>Comment contacter un Pet-Sitter ?</p>
            <div class="answer">
                <p><br>
                Vous avez trouvé un excellent pet-sitter et souhaitez engager une conversation. Voici comment vous y prendre : <br><br>
                1. Rendez-vous sur le profil du dog sitter et sélectionnez le bouton Contacter. <br><br>
                2. Indiquez la période de garde qui vous intéresse.<br><br>
                3. Contactez le pet-sitter via notre bouton Contacter.<br><br>
                4. Vous allez recevoir une réponse par mail du pet-sitter qu'elle soit négative ou positive.<br><br></p>
            </div>
        </div>


    </div>





    <div class="contact">
    <hr>
    <h1>Formulaire de contact</h1><br><br><hr>
        <!-- input nom -->
        <div class="formcontainer">

        <div class="form">
        <form action="action_page.php">

            <label for="nom">Votre nom </label>
            <input type="text" id="nom" name="nom" placeholder="Votre nom" required>

            <label for="prenom">Votre prénom</label>
            <input type="text" id="prenom" name="prenom" placeholder="Votre prénom" required>


            <label for="message">Votre messsage</label>
            <textarea id="message" name="message" placeholder="Message" style="height:200px" required></textarea>
            

            <button type="submit" class="btn"><a href="profil.php"> Envoyer  </a></button><br><br><br>
            <!-- <a href="profil.php"><button type="submit" value="Submit">Envoyer</button></a> -->

        </form>
        </div>
    </div>










<br>
<br>
<br>

<br>
<?php
include 'inc/footer.inc.php';