<?php

include 'inc/header.inc.php';
include 'inc/nav.inc.php';
?>

   
        <h1 style="text-align: center; margin-top: 50px;">Choisis votre Petbuddy 😍</h1>
    
 <div class="annonces">
        
       <?php 
                for($i = 1; $i <= 9; $i++) {
                    echo '<div class="cardannonces">';
                    echo '<img src="img/image' . $i . '.jpg" alt="une image" >';
                    echo '<div class="containerannonces">';
                    echo '<h3> Lorem Ipsum </h3>';
                    echo '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s.</p>';
                    echo '</div>';
                    echo '<span>15 €/ Jour</span>';
                    echo '<button class="btn"><a href="profilpersitter.php">Consulter</a></button>';
                    echo '</div>';
                }
        ?>

</div>





<?php include 'inc/footer.inc.php';
