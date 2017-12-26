<?php
/* Displays all successful messages */
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Succés - BILAL IBN RABAH</title>
  <?php include 'csslogin/css.html'; ?>
</head>
<body>
<div class="form">
    <h1><?= 'Success'; ?></h1>
    <p>
    <?php 
    if( isset($_SESSION['message']) AND !empty($_SESSION['message']) ):
        echo $_SESSION['message'];    
    else:
        header( "location: loginsystem.php" );
    endif;
    ?>
    </p>
    <a href="loginsytem.php"><button class="button button-block"/>Home</button></a>
</div>
</body>
</html>
