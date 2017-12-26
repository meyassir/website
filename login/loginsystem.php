<?php 
/* Main page with two forms: sign up and log in */
require 'db.php';
session_start();
?>

<!DOCTYPE html>
<html>
<head>
  <title>Bilal Ign rabah - S'inscrire</title>
  <?php include 'csslogin/css.html'; ?>
</head>

<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    if (isset($_POST['login'])) { //user logging in

        require 'login.php';
        
    }
    
    elseif (isset($_POST['register'])) { //user registering
        
        require 'register.php';
        
    }
}
?>
<body>
  <div class="form">    
      <ul class="tab-group">
        <li class="tab"><a href="#signup">S'Inscrire</a></li>
        <li class="tab active"><a href="#login">Se Connecter</a></li>
      </ul>
      
      <div class="tab-content">

         <div id="login">   
          <h1>Bienvenue !</h1>
          
          <form action="loginsystem.php" method="post" autocomplete="off">
          
            <div class="field-wrap">
            <label>
              Adress Mail<span class="req">*</span>
            </label>
            <input type="email" required autocomplete="off" name="email"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Mot de Passe<span class="req">*</span>
            </label>
            <input type="password" required autocomplete="off" name="password"/>
          </div>
          
          <p class="forgot"><a href="forgot.php">Mot de Passe oublié?</a></p>
          
          <button class="button button-block" name="login" />Se Connecter</button>
          </form>

          <a class="button button-block2" href="../index.php" />Acceuil</a>
        </div>
          
        <div id="signup">   
          <h1>S'inscrire gratuitement !</h1>
          
          <form action="loginsystem.php" method="post" autocomplete="off">
          
          <div class="top-row">
            <div class="field-wrap">
              <label>
                Prénom<span class="req">*</span>
              </label>
              <input type="text" required autocomplete="off" name='firstname' />
            </div>
        
            <div class="field-wrap">
              <label>
                Nom<span class="req">*</span>
              </label>
              <input type="text"required autocomplete="off" name='lastname' />
            </div>
          </div>

          <div class="field-wrap">
            <label>
              Adress Mail Valide<span class="req">*</span>
            </label>
            <input type="email"required autocomplete="off" name='email' />
          </div>
          
          <div class="field-wrap">
            <label>
              Entrez un Mot de Passe<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off" name='password'/>
          </div>
          
          <button type="submit" class="button button-block" name="register" />S'Inscrire</button>
          
          </form>

        </div>  
        
      </div><!-- tab-content -->
</div> <!-- /form -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="jslogin/index.js"></script>

</body>
</html> 
