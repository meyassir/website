<?php
/* Log out process, unsets and destroys session variables */
session_start();
session_unset();
session_destroy(); 
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Erreur</title>
  <?php include 'csslogin/css.html'; ?>
</head>

<body>
    <div class="form">
          <h1>Merci de votre Visite</h1>
              
          <p><?= 'Vous avez été déconnecté !'; ?></p>
          
          <a href="loginsystem.php"><button class="button button-block"/>Home</button></a>

    </div>
</body>
</html>
