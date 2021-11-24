<?php 

include 'inc/header.inc.php';
include 'inc/nav.inc.php';

?>

<div class="formcontainer">

    <div class="form">
      <form action="action_page.php">

        <label for="nom">Nom </label>
        <input type="text" id="nom" name="nom" placeholder="Votre Nom">

        <label for="prenom">Prénom</label>
        <input type="text" id="prenom" name="prenom" placeholder="Votre Prénom">


        <label for="message">Messsage</label>
        <textarea id="message" name="message" placeholder="Votre messsage ici..." style="height:200px"></textarea>
        

        <button type="submit" class="btn"><a href="profil.php"> Envoyer  </a></button>
        <!-- <a href="profil.php"><button type="submit" value="Submit">Envoyer</button></a> -->

      </form>
    </div>
</div>
<?php include 'inc/footer.inc.php';