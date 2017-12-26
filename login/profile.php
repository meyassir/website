<?php
/* Displays user information and some useful messages */
session_start();

// Check if user is logged in using the session variable
if ( $_SESSION['logged_in'] != 1 ) {
  $_SESSION['message'] = "You must log in before viewing your profile page!";
  header("location: error.php");    
}
else {
    // Makes it easier to read
    $first_name = $_SESSION['first_name'];
    $last_name = $_SESSION['last_name'];
    $email = $_SESSION['email'];
    $active = $_SESSION['active'];
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Bienvenue a toi : <?= $first_name.' '.$last_name ?></title>
  <?php include 'csslogin/css.html'; ?>
</head>

<body>
  <div class="form">
          <h1>Bienvenue</h1>

       

          <p>
          <?php 
     
          // Display message about account verification link only once
          if ( isset($_SESSION['message']) )
          {
              echo $_SESSION['message'];
              
              // Don't annoy the user with more messages upon page refresh
              unset( $_SESSION['message'] );
          }
          
          ?>
          </p>
          
          <?php
          
          // Keep reminding the user this account is not active, until they activate
          if ( !$active ){
              echo
              '<div class="info">
              Votre compte n est vérifié, Veuillez donc Confirmer Votre Email en cliquant 
              sur le lien dans votre email 
              </div>';
              ?>
              <h2><?php echo $first_name.' '.$last_name; ?></h2>
              <p><?= $email ?></p>
              <a href="logout.php"><button class="button button-block2" name="logout"/>Se Deconnecter</button></a>
              <?php
          }
          
          ?>
                   

          <?php
          if ( $active )
          {      
              echo '<div class="reussit">
              Connection réussite !
              </div>';

              ?>
                  <h2><?php echo $first_name.' '.$last_name; ?></h2>
                  <p><?= $email ?></p>                           
                  <a href="../index.php"><button class="button button-block2" name="logout"/>Accueil</button></a>
                  <?php
              
          }
          ?>
    </div>
    
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="jslogin/index.js"></script>

</body>
</html>
