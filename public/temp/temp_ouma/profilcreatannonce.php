<div class="alert">
    <div class="msg">
        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
        <strong>Bienvenue!</strong>  dans notre site 😍 vous avez fait le bon choix 👌
    </div>

    
</div>

<?php

include 'inc/header.inc.php';

?>


        <nav>
          <div class="Nav" id="maNav">

              <img src="img/logo.png" alt="logo chat chien oiseau petsitter" id="logo" >

              <a href="formtravellers.php" id="inscrip"> Déconnexion</a>


              <a href="indx.php">Accueil</a>

              <a href="annonces.php"><i class="fas fa-search"></i> Parcourir les annonces</a>

              <a href="https://www.gouvernement.fr/info-coronavirus/carte-et-donnees"><img src="https://img.icons8.com/ios/50/000000/info--v2.png" id="covidicon"></a>

              <a href="#" class="icon" onclick="sideBar()">
              <i class="fas fa-bars"></i></a>
              
          </div>
                  
        </nav>
        <div class="profile">
            
            <div class="cordonner">
                <img src="img/profil7.jpeg" alt="profil d'une homme">
                <div>
                    <h3>Clara.F</h3>
                    <p>Saint-Germain-en-laye</p>
                    <button><a href="profilTravel-modif.php"> Modifier le profil</a></button>
                </div>
                <a href="#" class="notification">
                <i class="fas fa-bell"></i>
                <span class="badge">1</span> <!-- nombre de message-->      </a>
            </div>        
            
            <div class="formcontainer">

                <div class="form">
                    <form action="action_page.php">

                        <h3>Créer une annonce</h3>        
                        <br>    


                         <label for="titre">Titre:</label>
                        <input type="text" id="titre" name="titre" placeholder="Titre de votre annonce">

                        <label for="datedebut">Date de début:</label>
                        <input type="date" id="datedebut" name="datedebut">
                        <label for="datefin">Date de fin:</label>
                        <input type="date" id="datefin" name="datefin">
        
                        <label for="message">Description:</label>
                        <textarea id="message" name="message" placeholder="Aimant beaucoup les animaux, je souhaiterais garder les vôtres. Ayant déjà possédé un chien ..." style="height:200px"></textarea>
                        

                        <button type="submit" class="btn"><a href="profil.php"> Envoyer  </a></button>
                        <!-- <a href="profil.php"><button type="submit" value="Submit">Envoyer</button></a> -->

                    </form>
                </div>
            </div>
            
        </div>

          
                
        




<?php include 'inc/footer.inc.php';