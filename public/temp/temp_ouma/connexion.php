<?php 

include 'inc/header.inc.php';
include 'inc/nav.inc.php';

?>
        <div class="connexion">

                <form action="#">
                        
                        <h1>Se connecter</h1>
                        <p></p>
                        <hr>

                        <label for="email">Email</label>
                        <input type="text" placeholder="Enter Email" name="email" id="email" required>

                        <label for="psw">Mot de passe</label>
                        <input type="password" placeholder="Enter Password" name="psw" id="psw" required>   

                        <label>
                        <input type="checkbox" checked="checked" name="checked"> 
                        </label>
                        <br>
                        <br>
                        <hr>

                        <button type="submit" class="connexionbtn">Connexion</button>
                        

                        <div class="seConnecter">
                        <a href="#">mot de passe oblier ?</a>
                        </div>
                </form>
                <!-- CONTAINER CARDS -->
                <div class="phrase">
                  <h1>Comment ça <span>marche?</span></h1>
                </div>
                <div class="col-container">
                        
                        <div class="col">
                                <div class="cardinfo">
                                        <img src="img/profil5.jpeg" alt="cardfrance" style="width:100%">
                                        <div class="container">
                                                <h4><b>PetBuddy disponible en IDF !</b></h4>
                                                <p>
                                                C'est très simple : Indiquez le lieu souhaité de la garde et les dates de votre voyage </p>
                                        </div>
                                
                                </div>
                        </div>

                        <div class="col">
                                <div class="cardinfo">
                                        <img src="img/profil7.jpeg" alt="planner" style="width:100%">
                                        <div class="container">
                                                <h4><b>Choisissez les dates de votre voyage </b></h4>
                                                <p>En quelques clics, sélectionnez l'annonce du pet-sitter idéal puis faites une demande garde. </p>
                                        </div>
                                
                                </div>   
                        </div>

                        <div class="col">
                                <div class="cardinfo">
                                        <img src="img/profil2.jpeg" alt="dogs" style="width:100%">
                                        <div class="container">
                                                <h4> <b> animal ne sera pas seul</b></h4>

                                                <p>Profitez de vos voyages en toute sérénité pendant que votre animal de compagnie est choyé..</p>
                                        </div>
                                
                                </div>
                        </div>
                </div>   
           
        </div>


<?php include 'inc/footer.inc.php';
        
        