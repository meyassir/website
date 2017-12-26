<?php
/* Displays all error messages */
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Erreur - BILAL IBN RABAH</title>
  <?php include 'csslogin/css.html'; ?>
</head>
<body>
<div class="form">
    <h1>Erreur</h1>
    <p>
    <?php 
    if( isset($_SESSION['message']) AND !empty($_SESSION['message']) ): 
        echo $_SESSION['message'];    
    else:
        header( "location: loginsystem.php" );
    endif;
    ?>
    </p>     
    <a href="loginsystem.php"><button class="button button-block"/>RETOUR</button></a>
</div>
</body>
</html>
