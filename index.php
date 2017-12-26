<?php
session_start();

$bdd = new PDO('mysql:host=localhost;dbname=accounts', 'root', '');


?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>BILAL BEN RABAH</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <!--Google Fonts link-->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,600i,700,700i" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet"> 


        <link rel="stylesheet" href="assets/css/iconfont.css">
        <link rel="stylesheet" href="assets/css/slick/slick.css">
        <link rel="stylesheet" href="assets/css/slick/slick-theme.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/jquery.fancybox.css">
        <link rel="stylesheet" href="assets/css/bootstrap.css">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <!--        <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css">-->


        <!--For Plugins external css-->
        <link rel="stylesheet" href="assets/css/plugins.css" />

        <!--Theme custom css -->
        <link rel="stylesheet" href="assets/css/style.css">

        <!--Theme Responsive css-->
        <link rel="stylesheet" href="assets/css/responsive.css" />

        <script src="assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
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
                                        </div>

                                        <!-- Collect the nav links, forms, and other content for toggling -->

                                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                            <ul class="nav navbar-nav navbar-right">
                                                <li><a href="#home">ACCUEIL</a></li>
                                                <li><a href="about.php">A PROPOS</a></li>
                                                <li><a href="shortcodes.php">PORTFOLIO</a></li>
                                                <li><a href="courses.php">LECONS</a></li>
                                                <li><a href="gallery.php">FORUM</a></li>
                                                <li><a href="single.php">BLOG</a></li>
                                                <li><a href="contact.php">NOUS CONTACTEZ</a></li>
                                                
                                             
                                                <?php
                                                 if( $_SESSION['logged_in'] = true ) {
     
                                                ?>
                                                <li><a href="login/logout.php">SE DECONNECTER</a></li>
                                                <?php
                                                }
                                                else if( $_SESSION['logged_in'] != true ){
                                                    ?>
                                                    <li><a href="login/loginsystem.php">SE CONNECTER</a></li>
                                                    <?php
                                                }
                                                ?>
                                        </div>
                                    </div>
                                </nav>
                            </div>	
                        </div>
                    </div>
                </div>
            </header> <!--End of header -->

            <!--home Section -->
            <section id="home" class="home">
                <div class="overlay">
                    <div class="home_skew_border">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12 ">
                                    <div class="main_home_slider text-center">
                                        <div class="single_home_slider">
                                            <div class="main_home wow fadeInUp" data-wow-duration="700ms">
                                                <h3>les étudiants sont notre premiére proprietée</h3>
                                                <h1>BIENVENUE DANS NOTRE SITE</h1>
                                                <div class="separator"></div>
                                                <p>Certains considèrent l'éducation comme un apprentissage des connaissances et compétences nécessaires à une vie normale dans notre société moderne, avec son interdépendance. Il s'agit de viser sur « la survie », ne prenant en considération que le désir égoïste de se débrouiller.</p>
                                                <div class="home_btn">
                                                    <a href="courses.html" class="btn btn-lg m_t_10">VOIR LES LECONS</a>
                                                    <a href="#faculty" class="btn btn-default">VOIR LES STATISTIQUES...</a>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="single_home_slider">
                                            <div class="main_home wow fadeInUp" data-wow-duration="700ms">
                                                <h3>les étudiants sont notre premiére proprietée</h3>
                                                <h1>une meilleure éducation pour un meilleur monde</h1>
                                                <div class="separator"></div>
                                                <p>Nous continuons à penser que la tâche principale de l’éducation est de remplir la tête des gens de connaissances autant que possible, mais pas le développement des capacités naturelles. Mais l’éducation doit discerner les qualités naturelles et les développer, et surtout elle doit apprendre à un homme à apprendre. Aujourd’hui, l’éducation oblige un homme à étudier.</p>
                                                <div class="home_btn">
                                                    <a href="courses.html" class="btn btn-lg m_t_10">VOIR LES LECONS</a>
                                                    <a href="https://bootstrapthemes.co" class="btn btn-default">VOIR LES STATISTIQUES...</a>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="single_home_slider">
                                            <div class="main_home wow fadeInUp" data-wow-duration="700ms">
                                                <h3>les étudiants sont notre premiére proprietée</h3>
                                                <h1>BILAL IBN RABAH</h1>
                                                <div class="separator"></div>
                                                <p>Nous avons tendance à considérer l'éducation, que ce soit l'éducation formelle ou l’apprentissage pratique, comme une « préparation à la vie » pour l’adolescent. C'est faux. L'éducation authentique doit faire part continuellement de notre vie, dès la naissance et jusqu'à la mort.</p>
                                                <div class="home_btn">
                                                    <a href="courses.html" class="btn btn-lg m_t_10">VOIR LES LECONS</a>
                                                    <a href="https://bootstrapthemes.co" class="btn btn-default">EN SAVOIR PLUS...</a>
                                                </div>

                                            </div
>                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="scrooldown">
                            <a href="#feature"><i class="fa fa-arrow-down"></i></a>
                        </div>
                    </div>
                </div>
            </section><!--End of home section -->


            <!--feature section -->
            <section id="feature" class="feature sections">
                <div class="container">
                    <div class="row">
                        <div class="main_feature text-center">

                            <div class="col-sm-3">
                                <div class="single_feature">
                                    <div class="single_feature_icon">
                                        <i class="fa fa-clone"></i>
                                    </div>

                                    <h4>SLEEK DESIGN</h4>
                                    <div class="separator3"></div>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting let. 
                                        Lorem Ipsum has been the industry.</p>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="single_feature">
                                    <div class="single_feature_icon">
                                        <i class="fa fa-heart-o"></i>
                                    </div>

                                    <h4>CLEAN CODE</h4>
                                    <div class="separator3"></div>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting let. 
                                        Lorem Ipsum has been the industry.</p>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="single_feature">
                                    <div class="single_feature_icon">
                                        <i class="fa fa-lightbulb-o"></i>
                                    </div>
                                    <h4>idées créatives</h4>
                                    <div class="separator3"></div>
                                    <p>Découvrez les fiches educatifs, tutos, techniques et idées créatives .Rédigées par lʼEquipe et les membres de la Communauté.</p>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="single_feature">
                                    <div class="single_feature_icon">
                                        <i class="fa fa-comments-o"></i>
                                    </div>

                                    <h4>UN SUPPORT GRATUIT</h4>
                                    <div class="separator3"></div>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting let. 
                                        Lorem Ipsum has been the industry.</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div><!--End of container -->
            </section><!--End of feature Section -->
            <hr />


            <!-- History section -->
            <section id="history" class="history sections">
                <div class="container">
                    <div class="row">
                        <div class="main_history">
                            <div class="col-sm-6">
                                <div class="single_history_img">
                                    <img src="assets/images/stab1.png" alt="" />
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="single_history_content">
                                    <div class="head_title">
                                        <h2>NOTRE BUT !</h2>
                                    </div>
                                    <p class="butsite">Ce site est avant tout au service de ses visiteurs. Il donne une visibilité à notre travail en promouvant ce qui se fait au sein des équipes des réseaux et des services déconcentrés. Ce site rassemble des informations institutionelles des ressources , des lecons sur de différents sujets. </br> des données educatifs, avancer des solutions créatives pour assurer l'équité et l'exellence en matiére d'éducation.</p>

                                    <a href="" class="btn btn-lg">BROWSE OUR WORK</a>
                                </div>
                            </div>
                        </div>
                    </div><!--End of row -->
                </div><!--End of container -->
            </section><!--End of history -->


            <!-- service Section -->
            <section id="service" class="service">
                <div class="container-fluid">
                    <div class="row">
                        <div class="main_service">
                            <div class="col-md-6 col-sm-12 no-padding">

                                <div class="single_service single_service_text text-right">
                                    <div class="head_title">
                                        <h2>OUR SERVICES</h2>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-sm-10 col-xs-10 margin-bottom-60">
                                            <div class="row">
                                                <div class="col-sm-10 col-sm-offset-1 col-xs-9 col-xs-offset-1">
                                                    <article class="single_service_right_text">
                                                        <h4>WEB DESIGN</h4>
                                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                                            Lorem Ip sum has been the industry's standard dummy text ever.</p>
                                                    </article>
                                                </div>
                                                <div class="col-sm-1 col-xs-1">
                                                    <figure class="single_service_icon">
                                                        <i class="fa fa-heart"></i>
                                                    </figure><!-- End of figure -->
                                                </div>
                                            </div>
                                        </div><!-- End of col-sm-12 -->

                                        <div class="col-md-12 col-sm-10 col-xs-10 margin-bottom-60">
                                            <div class="row">
                                                <div class="col-sm-10 col-sm-offset-1 col-xs-9 col-xs-offset-1">
                                                    <article class="single_service_right_text">
                                                        <h4>PRINT DESIGN</h4>
                                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                                            Lorem Ip sum has been the industry's standard dummy text ever.</p>
                                                    </article>
                                                </div>
                                                <div class="col-sm-1 col-xs-1">
                                                    <figure class="single_service_icon">
                                                        <i class="fa fa-heart"></i>
                                                    </figure><!-- End of figure -->
                                                </div>
                                            </div>
                                        </div><!-- End of col-sm-12 -->

                                        <div class="col-md-12 col-sm-10 col-xs-10 margin-bottom-60">
                                            <div class="row">

                                                <div class="col-sm-10 col-sm-offset-1 col-xs-9 col-xs-offset-1 margin-bottom-20">
                                                    <article class="single_service_right_text">
                                                        <h4>PHOTOGRAPHY</h4>
                                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                                            Lorem Ip sum has been the industry's standard dummy text ever.</p>
                                                    </article>
                                                </div>
                                                <div class="col-sm-1 col-xs-1">
                                                    <figure class="single_service_icon">
                                                        <i class="fa fa-heart"></i>
                                                    </figure><!-- End of figure -->
                                                </div>
                                            </div>
                                        </div><!-- End of col-sm-12 -->

                                    </div>
                                </div>
                            </div><!-- End of col-sm-6 -->

                            <div class="col-md-6 col-sm-12 no-padding">
                                <figure class="single_service single_service_img">
                                    <div class="overlay-img"></div>
                                    <img src="assets/images/servicerightimg.jpg" alt="" />
                                </figure><!-- End of figure -->
                            </div><!-- End of col-sm-6 -->

                        </div>
                    </div><!-- End of row -->
                </div><!-- End of Container-fluid -->
            </section><!-- End of service Section -->


            <section id="portfolio" class="portfolio sections">
                <div class="container-fluid">
                    <div class="row">
                        <div class="main_portfolio">
                            <div class="col-sm-12">
                                <div class="head_title text-center">
                                    <h2>RECENT WORKS</h2>
                                    <div class="subtitle">
                                        It has survived not only five centuries, but also the leap scrambled it to make a type.
                                    </div>
                                    <div class="separator"></div>
                                </div>
                            </div>
                            <div class="work_menu text-center">
                                <div id="filters" class="toolbar mb2 mt2">
                                    <button class="btn-md fil-cat filter active" data-filter="all">ALL</button>/
                                    <button class="btn-md fil-cat filter" data-rel="web" data-filter=".web">WEB DESIGN</button>/
                                    <button class="btn-md fil-cat filter" data-rel="design" data-filter=".design">PRINT DESIGN</button>/
                                    <button class="btn-md fil-cat filter" data-rel="flyers" data-filter=".flyers">ANIMATION</button>/
                                    <button class="btn-md fil-cat filter" data-rel="bcards" data-filter=".bcards">ART</button>/
                                    <button class="btn-md fil-cat filter" data-rel="photo" data-filter=".photo">PHOTOGRAPHY</button>/
                                    <button class="btn-md fil-cat filter" data-rel="video" data-filter=".video">VIDEO</button>
                                </div> 

                            </div>

                            <div style="clear:both;"></div>     
                            <div id="portfoliowork"> 
                                <div class="single_portfolio tile scale-anm web grid-item-width2 video" >
                                    <img src="assets/images/pf1.jpg" alt="" />
                                    <a href="assets/images/pf1.jpg" class="portfolio-img">
                                        <div class="grid_item_overlay">
                                            <div class="separator4"></div>
                                            <h3>T-SHIRT DESIGN</h3>
                                            <p>art / t-shirt</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="single_portfolio tile scale-anm bcards photo" >
                                    <img src="assets/images/pf2.jpg" alt="" />
                                    <a href="assets/images/pf2.jpg" class="portfolio-img">
                                        <div class="grid_item_overlay">
                                            <div class="separator4"></div>
                                            <h3>T-SHIRT DESIGN</h3>
                                            <p>art / t-shirt</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="single_portfolio tile scale-anm web video">
                                    <img src="assets/images/pf3.jpg" alt="" />
                                    <a href="assets/images/pf3.jpg" class="portfolio-img">
                                        <div class="grid_item_overlay">
                                            <div class="separator4"></div>
                                            <h3>T-SHIRT DESIGN</h3>
                                            <p>art / t-shirt</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="single_portfolio tile scale-anm web photo" >
                                    <img src="assets/images/pf4.jpg" alt="" />
                                    <a href="assets/images/pf4.jpg" class="portfolio-img">
                                        <div class="grid_item_overlay">
                                            <div class="separator4"></div>
                                            <h3>T-SHIRT DESIGN</h3>
                                            <p>art / t-shirt</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="single_portfolio tile scale-anm bcards design" >
                                    <img src="assets/images/pf5.jpg" alt="" />  
                                    <a href="assets/images/pf5.jpg" class="portfolio-img">
                                        <div class="grid_item_overlay">
                                            <div class="separator4"></div>
                                            <h3>T-SHIRT DESIGN</h3>
                                            <p>art / t-shirt</p>
                                        </div>
                                    </a>
                                </div>

                                <div class="single_portfolio tile scale-anm flyers video design">
                                    <img src="assets/images/pf6.jpg" alt="" />
                                    <a href="assets/images/pf6.jpg" class="portfolio-img">
                                        <div class="grid_item_overlay">
                                            <div class="separator4"></div>
                                            <h3>T-SHIRT DESIGN</h3>
                                            <p>art / t-shirt</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="single_portfolio tile scale-anm photo flyers">
                                    <img src="assets/images/pf7.jpg" alt="" />
                                    <a href="assets/images/pf7.jpg" class="portfolio-img">
                                        <div class="grid_item_overlay">
                                            <div class="separator4"></div>
                                            <h3>T-SHIRT DESIGN</h3>
                                            <p>art / t-shirt</p>
                                        </div>
                                    </a>
                                </div>

                                <div class="single_portfolio tile scale-anm bcards video" >
                                    <img src="assets/images/pf8.jpg" alt="" />
                                    <a href="assets/images/pf8.jpg" class="portfolio-img">
                                        <div class="grid_item_overlay">
                                            <div class="separator4"></div>
                                            <h3>T-SHIRT DESIGN</h3>
                                            <p>art / t-shirt</p>
                                        </div>
                                    </a>
                                </div>

                            </div>

                            <div style="clear:both;"></div>  
                        </div>
                    </div>
                </div><!-- End off container --> 
            </section> <!-- End off Work Section -->            



            <!-- Study Section --> 
            <section id="study" class="study text-center wow fadeIn"  data-wow-duration="2s" data-wow-dealy="1.5s">
                <div class="container">
                    <div class="row">
                        <div class="main_study_area sections">
                            <div class="head_title text-center">
                                <h2>CASE STUDY</h2>
                                <div class="subtitle">
                                    A brief story about how this process works, keep an eye till the end.
                                </div>
                                <div class="separator"></div>
                            </div>
                            <div class="single_study_content">
                                <div class="col-sm-6">
                                    <div class="single_study_slid_area">

                                        <div class="single_study_text">
                                            <div class="study_slider"> 
                                                <div class="item">
                                                    <div class="s_study_icon">
                                                        <i class="fa fa-lightbulb-o"></i>  
                                                    </div>
                                                    <h4>aCCUMULATE CREATIVE IDEAS</h4>
                                                    <div class="separator3"></div>
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting let. Lorem Ipsum has been the industry.
                                                        Lorem Ipsum is simply dummy text of the printing and typesetting let.
                                                        Lorem Ipsum has been the industry Printing and typelorem Ipsum has been the setting let.</p>

                                                    <a href="" style = "margin-left: 0" class="btn btn-lg">read more</a>
                                                </div>
                                                <div class="item">
                                                    <div class="s_study_icon">
                                                        <i class="fa fa-lightbulb-o"></i>  
                                                    </div>
                                                    <h4>aCCUMULATE CREATIVE IDEAS</h4>
                                                    <div class="separator3"></div>
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting let. Lorem Ipsum has been the industry.
                                                        Lorem Ipsum is simply dummy text of the printing and typesetting let.
                                                        Lorem Ipsum has been the industry Printing and typelorem Ipsum has been the setting let.</p>

                                                    <a href="" class="btn btn-lg">read more</a>
                                                </div>
                                                <div class="item">
                                                    <div class="s_study_icon">
                                                        <i class="fa fa-lightbulb-o"></i>  
                                                    </div>
                                                    <h4>aCCUMULATE CREATIVE IDEAS</h4>
                                                    <div class="separator3"></div>
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting let. Lorem Ipsum has been the industry.
                                                        Lorem Ipsum is simply dummy text of the printing and typesetting let.
                                                        Lorem Ipsum has been the industry Printing and typelorem Ipsum has been the setting let.</p>

                                                    <a href="" class="btn btn-lg">read more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="single_study_right_img">
                                    <div class="col-sm-6">
                                        <div class="single_study_img">
                                            <img src="assets/images/study.jpg" alt="" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End off row --> 
                </div><!-- End off Container --> 
            </section><!-- End off Study Section --> 


            <!-- Counter Section --> 
            <section id="counter" class="counter">
                <div class="video_overlay">
                    <div class="container">
                        <div class="row">  
                            <div class="col-sm-12">               
                                <div class="main_counter_area text-center">

                                    <div class="row">
                                        <div class="single_counter border_right">
                                            <div class="col-sm-3 col-xs-12">
                                                <div class="single_counter_item">
                                                    <i class="icon icon-school"></i>
                                                    <h2 class="statistic-counter">3891</h2>
                                                    <h4 class="">User Favourites</h4>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="single_counter">
                                            <div class="col-sm-3 col-xs-12">
                                                <div class="single_counter_item">
                                                    <i class="icon icon-professional5"></i>
                                                    <h2 class="statistic-counter">281</h2>
                                                    <h4 class="">Posts Last 24 Hours</h4>  
                                                </div>
                                            </div>
                                        </div> 

                                        <div class="single_counter">
                                            <div class="col-sm-3 col-xs-12">
                                                <div class="single_counter_item">
                                                    <i class="icon icon-people-32"></i>
                                                    <h2 class="statistic-counter">618</h2>
                                                    <h4 class="">Total Posts</h4>  
                                                </div>

                                            </div>
                                        </div>

                                        <div class="single_counter">
                                            <div class="col-sm-3 col-xs-12">
                                                <div class="single_counter_item">
                                                    <i class="icon icon-cup"></i>
                                                    <h2 class="statistic-counter">178</h2>
                                                    <h4 class="">Amazing Features</h4>

                                                </div>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End off container --> 
            </section>   <!-- End of counter section -->

              <!--footer-top-->
<div id="faculty" class="footer-top wow fadeInLeft animated" data-wow-delay=".5s">
	<div class="container">
		<h3 class="state">LES STATISTIQUES :</h3>
		<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
			<h4><ins><strong>P.S: Notée bien que ces valeurs affichés ci-dessous sont que des valeurs approximatives et ne sont pas des valeurs </br> exacts !</strong></ins></h4>
			<div id="myTabContent" class="tab-content">
				<div role="tabpanel" class="tabs-para tab-pane fade in active" id="home" aria-labelledby="home-tab">
					<h5><span class="quote1"></span><strong>Un Peu prés 1000 Etudiants se présentent cette année, dont le pourcentage des élèves scientifiques s'élève à 45.8% ,soit 4% des étudiants ayant rempli la bronche Bac-international, 54.2% des étudiants de la division de littérature</br> Le Taux de réussite s'élève à : 95.2%</strong><span class="quote2"></span></h5>
					<div class="team-right">
												<div class="bar">
													<p>Pourcentage des étudiants scientifiques (45.8%)</p>
												</div>
												<div class="skills">
														<div class="skill1" style="width:45.8%"> </div>							
												</div>
												<div class="bar">
													<p>Pourcentage des étudiants scientifiques international (4%)</p>
												</div>
												<div class="skills">
														<div class="skill2" style="width:4%"> </div>							
												</div>
												<div class="bar">
													<p>Pourcentage des étudiants de la division de littérature (54.2%)</p>
												</div>
												<div class="skills">
														<div class="skill3" style="width:54.2%"> </div>							
												</div>
												<div class="bar">
													<p>Taux de réussite (95.4%)</p>
												</div>
												<div class="skills">
														<div class="skill4" style="width:95.4%"> </div>							
												</div>
					</div>
					<div class="clearfix"></div>
				</div>
				<div role="tabpanel" class="tabs-para tab-pane fade" id="profile" aria-labelledby="profile-tab">
					<h5><span class="quote1"></span>
						Un Peu prés 1000 Etudiants se présentent cette année, dont le pourcentage des élèves scientifiques BAC-international cette année s'élève à 4%!<span class="quote2"></span></h5>
					<div class="team-right">
												<div class="bar">
													<p>Pourcentage des étudiants scientifiques (45.8%)</p>
												</div>
												<div class="skills">
														<div class="skill1" style="width:45.8%"> </div>							
												</div>
												<div class="bar">
													<p>Pourcentage des étudiants scientifiques Bac-international (4%)</p>
												</div>
												<div class="skills">
														<div class="skill2" style="width:4%"> </div>							
												</div>
												<div class="bar">
													<p>Pourcentage des étudiants de la division de littérature (54.2%)</p>
												</div>
												<div class="skills">
														<div class="skill3" style="width:54.2%"> </div>							
												</div>
												<div class="bar">
													<p>Taux de réussite (95.4%)</p>
												</div>
												<div class="skills">
														<div class="skill4" style="width:95.4%"> </div>							
												</div>
					</div>
					<div class="clearfix"></div>
				</div>
				<div role="tabpanel" class="tabs-para tab-pane fade" id="return" aria-labelledby="return-tab">
					<h5><span class="quote1"></span>Un Peu prés 1000 Etudiants se présentent cette année, dont division de littérature cette année s'élève à 54.2% ! <span class="quote2"></span></h5>		
					<div class="team-right">
												<div class="bar">
													<p>POURCENTAGE DES ETUDIANTS SCIENTIFIQUE (45.8%)</p>
												</div>
												<div class="skills">
														<div class="skill1" style="width:45.8%"> </div>							
												</div>
												<div class="bar">
													<p>Pourcentage des étudiants scientifiques international (4%)</p>
												</div>
												<div class="skills">
														<div class="skill2" style="width:4%"> </div>							
												</div>
												<div class="bar">
													<p>Pourcentage des étudiants de la division de littérature (54.2%)</p>
												</div>
												<div class="skills">
														<div class="skill3" style="width:54.2%"> </div>							
												</div>
												<div class="bar">
													<p>Taux de réussite (95.4%)</p>
												</div>
												<div class="skills">
														<div class="skill4" style="width:95.4%"> </div>							
												</div>
					</div>
					<div class="clearfix"></div>
				</div>
				<div role="tabpanel" class="tabs-para tab-pane fade" id="team4" aria-labelledby="team4-tab">
					<h5><span class="quote1"></span>Consernant le pourcentage de réussite l'année derniere, il s'élève a 95.4% ce qui est bon<span class="quote2"></span></h5>
					<div class="team-right">
												<div class="bar">
													<p>Pourcentage des étudiants scientifiques (45.8%)</p>
												</div>
												<div class="skills">
														<div class="skill1" style="width:45.8%"> </div>							
												</div>
												<div class="bar">
													<p>Pourcentage des étudiants scientifiques international (4%)</p>
												</div>
												<div class="skills">
														<div class="skill2" style="width:4%"> </div>							
												</div>
												<div class="bar">
													<p>Pourcentage des étudiants de la division de littérature (54.2%)</p>
												</div>
												<div class="skills">
														<div class="skill3" style="width:54.2%"> </div>							
												</div>
												<div class="bar">
													<p>Taux de réussite (95.4%)</p>
												</div>
												<div class="skills">
														<div class="skill4" style="width:95.4%"> </div>							
												</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--//footer-top-->

            <!-- Team Section -->        

            <!-- Client Logo Section -->
            <section id="clogo" class="clogo">
                <div class="container">
                    <div class="row">
                        <div class="main_clogo sections text-center">
                            <div class="head_title text-center">
                                <h2>Great Integrations with Others</h2>
                                <div class="subtitle">
                                    Suspendisse sed eros mollis, tincidunt felis eget, interdum erat. 
                                    Nullam sit amet odio eu est aliquet euismod a a urna. Proin eu urna suscipit, dictum quam nec. 
                                </div>
                                <div class="separator"></div>
                            </div><!-- End off Head_title -->

                            <div class="col-sm-3 col-xs-6"> 
                                <a href=""><img src="assets/images/clogo1.png" alt="" /></a>
                            </div>
                            <div class="col-sm-3 col-xs-6"> 
                                <a href=""><img src="assets/images/clogo2.png" alt="" /></a>
                            </div>
                            <div class="col-sm-3 col-xs-6"> 
                                <a href=""><img src="assets/images/clogo3.png" alt="" /></a>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <a href=""><img src="assets/images/clogo4.png" alt="" /></a>
                            </div>
                            <div class="col-sm-3 col-xs-6"> 
                                <a href=""><img src="assets/images/clogo5.png" alt="" /></a>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <a href=""><img src="assets/images/clogo6.png" alt="" /></a>
                            </div>
                            <div class="col-sm-3 col-xs-6"> 
                                <a href=""><img src="assets/images/clogo9.png" alt="" /></a>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <a href=""><img src="assets/images/clogo8.png" alt="" /></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="divider"></div>
            </section><!-- End off clogo Section -->


            <!-- Blog Section -->
            <section id="blog" class="blog">
                <div class="container-fluid">
                    <div class="row">
                        <div class="main_blog sections">
                            <div class="head_title text-center">
                                <h2>OUR BLOG</h2>
                                <div class="subtitle">
                                    Suspendisse sed eros mollis, tincidunt felis eget, interdum eratullam sit amet odio. 
                                </div>
                                <div class="separator"></div>
                            </div><!-- End off Head_title -->

                            <div class="main_blog_content">
                                <div class="col-sm-6">
                                    <div class="single_blog_area textwhite">
                                        <div class="row">
                                            <div class="col-sm-6 no-padding">
                                                <div class="single_blog_img">
                                                    <img src="assets/images/blog1.jpg" alt="" />
                                                </div>
                                            </div>
                                            <div class="col-sm-6 no-padding">
                                                <div class="single_blog_text s_b_left">
                                                    <p>art/t-shirt</p>
                                                    <h3>T-SHIRT DESIGN</h3>
                                                    <div class="separator2"></div>
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the indu Stry's 
                                                        standard dummy text ever since the 1500s, an unknown printer took a galley of type 
                                                        a scrambled it to make a type specimen book.</p>

                                                    <a href="" class="read_more">Read More >></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="single_blog_area textwhite">
                                        <div class="row">
                                            <div class="col-sm-6 no-padding">
                                                <div class="single_blog_img">
                                                    <img src="assets/images/blog2.jpg" alt="" />
                                                </div>
                                            </div>
                                            <div class="col-sm-6 no-padding">
                                                <div class="single_blog_text s_b_left">
                                                    <p>art/t-shirt</p>
                                                    <h3>T-SHIRT DESIGN</h3>
                                                    <div class="separator2"></div>
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the indu Stry's 
                                                        standard dummy text ever since the 1500s, an unknown printer took a galley of type 
                                                        a scrambled it to make a type specimen book.</p>

                                                    <a href="" class="read_more">Read More >></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="single_blog_area textwhite">
                                        <div class="row">

                                            <div class="col-sm-6 col-sm-push-6 no-padding">
                                                <div class="single_blog_img">
                                                    <img src="assets/images/blog3.jpg" alt="" />
                                                </div>
                                            </div>

                                            <div class="col-sm-6 col-sm-pull-6 no-padding">
                                                <div class="single_blog_text s_b_right">
                                                    <p>art/t-shirt</p>
                                                    <h3>T-SHIRT DESIGN</h3>
                                                    <div class="separator2"></div>
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the indu Stry's 
                                                        standard dummy text ever since the 1500s, an unknown printer took a galley of type 
                                                        a scrambled it to make a type specimen book.</p>

                                                    <a href="" class="read_more">Read More >></a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="single_blog_area textwhite">
                                        <div class="row">
                                            <div class="col-sm-6 col-sm-push-6 no-padding">
                                                <div class="single_blog_img">
                                                    <img src="assets/images/blog4.jpg" alt="" />
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-sm-pull-6 no-padding">
                                                <div class="single_blog_text s_b_right">
                                                    <p>art/t-shirt</p>
                                                    <h3>T-SHIRT DESIGN</h3>
                                                    <div class="separator2"></div>
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the indu Stry's 
                                                        standard dummy text ever since the 1500s, an unknown printer took a galley of type 
                                                        a scrambled it to make a type specimen book.</p>

                                                    <a href="" class="read_more">Read More >></a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div><!-- End off container -->
            </section><!-- End off Blog Section -->


            

            <section id="trial" class="trial text-center wow fadeIn"  data-wow-duration="2s" data-wow-dealy="1.5s">
                <div class="main_trial_area">
                    <div class="video_overlay sections">
                        <div class="container">
                            <div class="row">
                                <div class="main_trial">
                                    <div class="col-sm-12">
                                        <h2>Let's Get Started Now. <span>It's FREE!</span></h2>
                                        <h4>30 day free trial. Free plan allows up to 2 projects. Pay if you need more. 
                                            Cancel anytime. No catches.</h4>
                                        <a href="" class="btn btn-lg">start free trial</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section><!-- End of Trial section -->


            <div class="footer">
                <div class="container">
                    <div class="col-md-3 footer-grid wow fadeInRight animated" data-wow-delay=".5s">
                        <h3>A PROPOS DE NOUS</h3>
                        <p>Nous Sommes une équipe qui se compose de 2, on a pas beaucoup d'intentions pour le moment mais on compte développer un bon site internet</p>
                    </div>
                    <div class="col-md-2 footer-grid wow fadeInRight animated" data-wow-delay=".5s">
                        <h3>Navigation</h3>
                        <ul>
                            <li><a href="index.html">ACCEUIL</a></li>
                            <li><a href="about.html">A PROPOS</a></li>
                            <li><a href="courses.html">Courses</a></li>
                            <li><a href="shortcodes.html">Shortcodes</a></li>						 
                            <li><a href="gallery.html">Gallery</a></li> 
                            <li><a href="contact.html">CONTACT</a></li>
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
                        <h3>Se Connecter en ligne</h3>
                        <ul>
                            <li><a class="fb1" href="#"></a></li>
                            <li><a class="fb2" href="#"></a></li>
                            <li><a class="fb3" href="#"></a></li>
                            <li><a class="fb4" href="#"></a></li>
                        </ul>
                        <form>
                                <input type="email" value="Entrer Votre Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Entrer Votre Email';}" required="">
                                <input type="submit" value=" ">
                        </form>
                    </div>
                    <div class="clearfix"></div>
                    <div class="copy-right">
                        <p>2017 BILAL .&copy; All Rights Reserved | Designed by  <a href="https://www.facebook.com/profile.php?id=100009886295342" target="_BLANK">YOUSSEF IFKERNE</a></p>
                    </div>
                </div>
            </div>
            <!-- //footer-->

        <!-- START SCROLL TO TOP  -->

        <div class="scrollup">
            <a href="#"><i class="fa fa-chevron-up"></i></a>
        </div>

        <script src="assets/js/vendor/jquery-1.11.2.min.js"></script>
        <script src="assets/js/vendor/bootstrap.min.js"></script>

        <script src="assets/js/jquery.magnific-popup.js"></script>
        <script src="assets/js/jquery.mixitup.min.js"></script>
        <script src="assets/js/jquery.easing.1.3.js"></script>
        <script src="assets/js/jquery.masonry.min.js"></script>

        <!--slick slide js -->
        <script src="assets/css/slick/slick.js"></script>
        <script src="assets/css/slick/slick.min.js"></script>


        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/main.js"></script>
    
    </body>
</html>
