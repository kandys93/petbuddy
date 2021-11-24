<?php
include 'inc/header.inc.php';

?>
<body>
      
      <nav>
        <div class="Nav" id="maNav">
                <img src="img/logo.png" alt="logo chat chien oiseau petsitter" id="logo" >
    
                <a href="formtravellers.php" id="inscrip"> Déconnexion</a>
    
    
                <a href="indx.php">Accueil</a>

                <a href="https://www.gouvernement.fr/info-coronavirus/carte-et-donnees"><img src="https://img.icons8.com/ios/50/000000/info--v2.png" id="covidicon"></a>

                <a href="#" class="icon" onclick="sideBar()">
                <i class="fas fa-bars"></i></a>
        </div> 
      </nav>

      <div class="connexion">
        <form action="#">
          <h1>Modifier votre profil</h1>
          <hr>
          <label for="avatar">Modifier la photo de profil:</label>
          <input type="file" id="img" name="img" accept="image/png, image/jpeg">
          <br>
          <br>

          <label for="nom">Nom </label>
          <input type="text" id="nom" name="nom" placeholder="Votre Nom" >

          <label for="prenom">Prénom</label>
          <input type="text" id="prenom" name="prenom" placeholder="Votre Prénom">

          <label for="cd">Code Postal</label>
          <input type="number" id="cd" name="cd" placeholder="Votre code postal">

          <label for="date">E-mail</label>
          <input type="text" id="mail" name="mail" placeholder="Votre adresse e-mail">

          <br>

          <label for="psw">Mot de passe</label>
          <input type="password" placeholder="Votre mot de passe " name="psw" id="psw" onfocus="this.value=''" required>    
              
          <label for="psw">Confirmation mot de passe</label>
          <input type="password" placeholder="Veuillez confirmer votre mot de passe" name="psw" id="psw" onfocus="this.value=''" required>    
                
          <br>
          <label for="addAnimal">Rajouter un animal :</label>
          <select id="selectPet" name="selectPet">
            <option value="dog">Chien</option>
            <option value="cat">Chat</option>
            <option value="bird">Oiseau</option>
          </select>          
          
          <br>
          <br>
                
          <div class="btnflex">
            <button type="submit" class="connexionbtn">Modifier</button>
            <button type="submit" class="connexionbtn">Annuler</button>
          </div>

        </form>
      </div>
  


  <?php include 'inc/footer.inc.php';
