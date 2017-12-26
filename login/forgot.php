<?php 
/* Reset your password form, sends reset.php password link */
require 'db.php';
session_start();

// Check if form submitted with method="post"
if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) 
{   
    $email = $mysqli->escape_string($_POST['email']);
    $result = $mysqli->query("SELECT * FROM users WHERE email='$email'");

    if ( $result->num_rows == 0 ) // User doesn't exist
    { 
        $_SESSION['message'] = "User with that email doesn't exist!";
        header("location: error.php");
    }
    else { // User exists (num_rows != 0)

        $user = $result->fetch_assoc(); // $user becomes array with user data
        
        $email = $user['email'];
        $hash = $user['hash'];
        $first_name = $user['first_name'];

        // Session message to display on success.php
        $_SESSION['message'] = "<p>Veuillez Vérifié Votre Email <span>$email</span>"
        . " Pour un Lien de Confirmation Pour Terminer Votre réinitialisation de Mot de Passe!</p>";

        // Send registration confirmation link (reset.php)
        $to      = $email;
        $subject = 'Password Reset Link ( clevertechie.com )';
        $message_body = '
        Hello '.$first_name.',

        You have requested password reset!

        Please click this link to reset your password:

        http://localhost/login-system/reset.php?email='.$email.'&hash='.$hash;  

        mail($to, $subject, $message_body);

        header("location: success.php");
  }
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Réinitialiser Votre Mot De Passe</title>
  <?php include 'csslogin/css.html'; ?>
</head>

<body>
    
  <div class="form">

    <h1>Réinitialiser Votre Mot De Passe</h1>

    <form action="forgot.php" method="post">
     <div class="field-wrap">
      <label>
        Adress Mail <span class="req">*</span>
      </label>
      <input type="email"required autocomplete="off" name="email"/>
    </div>
    <button class="button button-block"/>Réinitialiser</button>
    </form>
  </div>
          
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="jslogin/index.js"></script>
</body>

</html>
