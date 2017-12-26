<?php
if(isset($_POST['mailform']))
{
	if(!empty($_POST['nom']) AND !empty($_POST['mail']) AND !empty($_POST['message']))
	{
		$header="MIME-Version: 1.0\r\n";
		$header.='From:"BILAL IBN RABAH"<bilal>'."\n";
		$header.='Content-Type:text/html; charset="uft-8"'."\n";
		$header.='Content-Transfer-Encoding: 8bit';
        $destinataire="kylelol2002@gmail.com";
		$message='
		<html>
			<body>
				<div align="center">
					<img src="http://www.primfx.com/mailing/banniere.png"/>
					<br />
					<u>Nom de l\'expéditeur :</u>'.$_POST['nom'].'<br />
					<u>Mail de l\'expéditeur :</u>'.$_POST['mail'].'<br />
					<br />
					'.nl2br($_POST['message']).'
					<br />
					<img src="http://www.primfx.com/mailing/separation.png"/>
				</div>
			</body>
		</html>
		';

		if(mail($destinataire, "CONTACT - BILAL IBN RABAH", $message, $header)) {
			$msg=  '<div class="contac">Votre message a été envoyé avec succés !</div>';
		}	

		else{
			echo "9wd";
		}
	}
	else
	{   
		$msg='<div class="contacterreur">Tous les champs doivent être complétés !</div>';
	}
}
?>
<!DOCTYPE html>
<html>
<head>
<title>BILAL BEN RABAH | OFFICIEL SITE</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta property="og:title" content="Vide" />
<meta name="keywords" content="Eduma Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link rel="stylesheet" href="assets/css/bootstrap.css">
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/nav.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/hover_pack.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />

<!-- js -->
   <script src="js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<!-- dropdown -->
<script src="js/hover_pack.js"></script>
<!-- //dropdown -->
<!--webfont-->
<link href='//fonts.googleapis.com/css?family=Nunito:400,300,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>

<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->

</head>
<body data-spy="scroll" data-target=".navbar-collapse">

        <div class='preloader'><div class='loaded'>&nbsp;</div></div>
        <div class="culmn">
            <header id="main_menu" class="header navbar-fixed-top">            
                <div class="main_menu_bg">
                    <div class="container">
                        <div class="row">
                            <div class="nave_menu">
                                <nav class="navbar navbar-default">
                                    <div class="container-fluid">
                                        <!-- Brand and toggle get grouped for better mobile display -->
                                        <div class="navbar-header">
                                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                                <span class="sr-only">Toggle navigation</span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                            </button>
                                            <a class="navbar-brand" href="#home">
                                                <img src="assets/images/logo.png"/>
                                            </a>
                                        </div>

                                        <!-- Collect the nav links, forms, and other content for toggling -->

                                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                                            <ul class="nav navbar-nav navbar-right">
                                                <li class="hh"><a href="index.php">HOME</a></li>
                                                <li class="hh"><a href="about.php">A PROPOS</a></li>
                                                <li class="hh"><a href="#portfolio">PORTFOLIO</a></li>
                                                <li class="hh"><a href="courses.php">LECONS</a></li>
                                                <li class="hh"><a href="#team">NOTRE EQUIPE</a></li>
                                                <li class="hh"><a href="#blog">BLOG</a></li>
                                                <li class="hh"><a href="contact.php">CONTACT</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </nav>
                            </div>	
                        </div>
                    </div>
                </div>
            </header> 
<!-- //page-head -->
<!-- contact -->
<div class="contact">
	<div class="container">
		<h3 class="tittle">VOIR SUR LA CARTE</h3>
		<div class="map wow fadeInUp animated" data-wow-delay=".5s">
			<iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d2482.432383990807!2d0.028213999961443994!3d51.52362882484525!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1423469959819" frameborder="0" style="border:0"></iframe>
		</div>
		<h3 class="tittle">Nous Contactez</h3>
		<?php
			if(isset($msg))
			{
				echo $msg;
			}
		?>
		<div class="contact-grids">
			<div class="col-md-3 contact-grid wow fadeInUp animated" data-wow-delay=".5s">
				<div class="call ">
					<div class="col-xs-3 contact-grdl">
						<span class="glyphicon glyphicon-phone" aria-hidden="true"></span>
					</div>
					<div class="col-xs-9 contact-grdr">
						<ul>
							<li>+3402 890 679</li>
							<li>+5356 890 679</li>
						</ul>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="call">
					<div class="col-xs-3 contact-grdl">
						<span class="glyphicon glyphicon-send" aria-hidden="true"></span>
					</div>
					<div class="col-xs-9 contact-grdr">
						<ul>
							<li>Temara - RABAT-SALE-QUENETRA</li>
							<li>Morocco</li>
						</ul>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="call">
					<div class="col-xs-3 contact-grdl">
						<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
					</div>
					<div class="col-xs-9 contact-grdr">
						<ul>
							<li><a href="mailto:info@example.com">kyleslol2002@gmail.com</a></li>
						</ul>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		
			<div class="col-md-5 contact-grid wow fadeInUp animated" data-wow-delay=".5s">
				<form method="POST" action="">
					<input type="text" name="nom" placeholder="Votre nom et prénom" value="<?php if(isset($_POST['nom'])) { echo $_POST['nom']; } ?>" /><br /><br />
					<input type="email" name="mail" placeholder="Votre Adresse Mail (Valide)" value="<?php if(isset($_POST['mail'])) { echo $_POST['mail']; } ?>" /><br /><br />
					<textarea name="message" placeholder="Votre message"><?php if(isset($_POST['message'])) { echo $_POST['message']; } ?></textarea><br /><br />
					<input type="submit" value="Envoyer !" name="mailform"/>
				</form>
			</div>
			<div class="col-md-4 contact-grid wow fadeInUp animated" data-wow-delay=".5s">
				<div class="newsletter">
					<h3><span></span>NEWSLETTER</h3>
				</div>
				<form>
					<input type="email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
					<input type="submit" value="Subscribe" >
				</form>
			</div>
			<div class="clearfix"> </div>
		
		</div>
	</div>
</div>
<!-- contact -->
<!--footer-->
<div class="footer">
	<div class="container">
		<div class="col-md-3 footer-grid wow fadeInRight animated" data-wow-delay=".5s">
			<h3>A PROPOS DE NOUS</h3>
			<p></p>
		</div>
		<div class="col-md-2 footer-grid wow fadeInRight animated" data-wow-delay=".5s">
			<h3>Navigation</h3>
			<ul>
				<li><a href="index.php">ACCEUIL</a></li>
				<li><a href="about.php">A PROPOS</a></li>
				<li><a href="courses.php">LECONS</a></li>
				<li><a href="shortcodes.php">Shortcodes</a></li>						 
				<li><a href="gallery.php">Gallery</a></li> 
				<li><a href="contact.php">Contact</a></li>
			</ul>
		</div>
		<div class="col-md-3 footer-grid wow fadeInLeft animated" data-wow-delay=".5s">
			<h3>Get in Touch</h3>
			<h2>BILAL</h2>
			<ul>
				<li>2144 - 007 - 1566</li>
				<li>No 48, Season street,</li>
				<li>Temara</li>
				<li>RABAT-SALE-QUENITRA</li>
				<li>Email : <a href="mailto:info@example.com">kyleslol2002@gmail.com</a></li>
			</ul>
		</div>
		<div class="col-md-4 social-grid wow fadeInLeft animated" data-wow-delay=".5s">
			<h3>Se Connectez en ligne</h3>
			<ul>
				<li><a class="fb1" href="#"></a></li>
				<li><a class="fb2" href="#"></a></li>
				<li><a class="fb3" href="#"></a></li>
				<li><a class="fb4" href="#"></a></li>
			</ul>
			<form>
					<input type="email" value="Enter your email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Entrer Votre Email';}" required="">
					<input type="submit" value=" ">
			</form>
		</div>
		<div class="clearfix"></div>
		<div class="copy-right">
			<p>2017 BILAL .&copy; All Rights Reserved | Designed by  <a href="https://www.facebook.com/profile.php?id=100009886295342">YOUSSEF IFKERNE</a></p>
		</div>
	</div>
</div>
<!-- //footer-->
<!-- Modal -->

	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		  </div>
		  <div class="modal-body modal-spa">
								<div class="login-grids">
									<div class="login">
										<div class="login-left">
											<ul>
												<li><a class="fb" href="#"><i></i>Facebook</a></li>
												<li><a class="goog" href="#"><i></i>Google</a></li>
												<li><a class="linkin" href="#"><i></i>Linkedin</a></li>
											</ul>
										</div>
										<div class="login-right">
											<form>
												<h3>Signin with your account </h3>
												<input type="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">	
												<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">	
												<h4><a href="#">Forgot password</a> / <a href="#">Create new password</a></h4>
												<div class="single-bottom">
													<input type="checkbox"  id="brand" value="">
													<label for="brand"><span></span>Remember Me.</label>
												</div>
												<input type="submit" value="SIGNIN" >
											</form>
										</div>
										<div class="clearfix"></div>								
									</div>
									<p>By logging in you agree to our <a href="#">Terms and Conditions</a> and <a href="#">Privacy Policy</a></p>
								</div>
		  </div>

		</div>
	  </div>
	</div>

<!-- smooth scrolling -->
	<script type="text/javascript">
		$(document).ready(function() {
		/*
			var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear' 
			};
		*/								
		$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->
<!-- for bootstrap working -->
		<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
</body>
</html>