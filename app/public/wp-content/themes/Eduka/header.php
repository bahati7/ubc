<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
         <meta charset="<?php bloginfo('charset'); ?>">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php wp_head(); ?>
    </head>
    <body>

        <!-- preloader -->
        <div class="preloader">
            <div class="loader-book">
                <div class="loader-book-page"></div>
                <div class="loader-book-page"></div>
                <div class="loader-book-page"></div>
            </div>
        </div> 
        <!-- preloader end -->


        <!-- header area -->
        <header class="header">
            <!-- header top -->
            <div class="header-top">
                <div class="container">
                    <div class="header-top-wrap">
                        <div class="header-top-left">
                              <div class="header-top-social">
                                    <span>Follow Us: </span>
                                    <a href="https://web.facebook.com/universitebilingueducongo"><i
                                            class="fab fa-facebook-f"></i></a>
                                    <a href="https://x.com/UbcAcademy"><i class="fab fa-twitter"></i></a>
                                    <a href="https://youtube.com/@ubcacademy-ci2cs?si=aodACBejkV6tfTVn"><i
                                            class="fab fa-youtube"></i></a>
                                    <a href="tel:+243 973 677 263"><i class="fab fa-whatsapp"></i></a>
                              </div>
                        </div>
                        <div class="header-top-right">
                            <div class="header-top-contact">
                               <ul>
                                    <li>
                                        <a href="#"><i class="far fa-location-dot"></i> 022, Av. du Plateau, C.
                                            Ibanda, Nguba, Bukavu</a>
                                    </li>
                                    <li>
                                        <a
                                            href="mailto:someone@example.com"><i
                                                class="far fa-envelopes"></i> <span class="__cf_email__"
                                                data-cfemail="e58c8b838aa5809d8488958980cb868a88">infos@ubc.edu.cd</span></a>
                                    </li>
                                    <li>
                                        <a href="tel:+21236547898"><i class="far fa-phone-volume"></i> +243 973 677 263
                                            <br><i class="far fa-phone-volume"></i> +243 826711512 </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="main-navigation">
                <nav class="navbar navbar-expand-lg">
                    <div class="container position-relative">
                        <a class="navbar-brand" href="index.html">
                            
                            <img src="<?php echo get_theme_file_uri('/assets/img/logo/logo.png'); ?> " alt="logo" />
                        </a>
                        <div class="mobile-menu-right">
                            <div class="search-btn">
                                <button type="button" class="nav-right-link search-box-outer"><i
                                        class="far fa-search"></i></button>
                            </div>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                data-bs-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-mobile-icon"><i class="far fa-bars"></i></span>
                            </button>
                        </div>
                        <div class="collapse navbar-collapse" id="main_nav">
                            <ul class="navbar-nav">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle active" href="<?php echo site_url();?>" data-bs-toggle="dropdown">Acceuil</a>
                                    <ul class="dropdown-menu fade-down">
                                        <li><a class="dropdown-item" href="<?php echo site_url('/domaines');?>">Domaines de formation</a></li>
                                        <li><a class="dropdown-item" href="index-2.html">Recherche</a></li>
                                        <li><a class="dropdown-item" href="index-3.html">Service à la communauté</a></li>
                                        <li><a class="dropdown-item" href="index-3.html">Bourses</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Institution</a>
                                    <ul class="dropdown-menu fade-down">
                                        <li><a class="dropdown-item" href="course.html">Qui sommes nous</a></li>
                                        <li><a class="dropdown-item" href="course-2.html">Admission</a></li>
                                        <li><a class="dropdown-item" href="course-single.html">Politique linguistique <br> (Bilinguisme)</a></li>
                                        <li><a class="dropdown-item" href="course-single-2.html">Opportinutés</a></li>
                                        <li><a class="dropdown-item" href="course-single-2.html">Hymne de l'UBC</a></li>
                                    </ul>
                                </li>
                                   <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Services linguistiques</a>
                                        <ul class="dropdown-menu fade-down">
                                            <li><a class="dropdown-item" href="course.html">Cabinet de traduction</a></li>
                                            <li><a class="dropdown-item" href="course-2.html">Ecole des langues</a></li>
                                        </ul>
                                    </li>
                                <li class="nav-item mega-menu dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Formations</a>
                                    <div class="dropdown-menu fade-down">
                                        <div class="mega-content">
                                            <div class="container-fluid">
                                                <div class="row">
                                                    <div class="col-12 col-sm-4 col-md-3">
                                                        <h5>About Us</h5>
                                                        <div class="menu-about">
                                                            <a href="#" class="menu-about-logo"><img src="<?php echo get_theme_file_uri('/assets/img/logo/logo-light.png'); ?> " alt="logo" /></a>
                                                            <p>L'objectif final de toute formation est que les participants transforment ce qu'ils ont appris en action et en comportement sur le lieu de travail. Un apprentissage théorique n'est pas un apprentissage.</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-4 col-md-3">
                                                        <h5>Formation académique</h5>
                                                        
                                                    </div>
                                                    <div class="col-12 col-sm-4 col-md-3">
                                                        <h5>Formation professionnelle et para-académique</h5>
                                                        
                                                    </div>
                                                    <div class="col-12 col-sm-12 col-md-3">
                                                        <h5>Education continue interdisciplinaire</h5>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Publications</a>
                                    <ul class="dropdown-menu fade-down">
                                        <li><a class="dropdown-item" href="about.html">Actualités</a></li>
                                     
                                      
                                    
                                        <li><a class="dropdown-item" href="<?php echo get_post_type_archive_link('event') ?>">Communiqués</a></li>
                                      
                                        <li><a class="dropdown-item" href="pricing.html">Appels d'offres</a></li>
                                       
                                    </ul>
                                </li>
                                
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Ressources</a>
                                    <ul class="dropdown-menu fade-down">
                                        <li><a class="dropdown-item" href="blog.html">Cours</a></li>
                                        <li><a class="dropdown-item" href="blog-single.html">Maquette nationale</a></li>
                                        <li><a class="dropdown-item" href="blog-single.html">Documents officiels</a></li>
                                    </ul>
                                </li>
                               
                            </ul>
                            <div class="nav-right">
                                <div class="search-btn">
                                    <button type="button" class="nav-right-link search-box-outer"><i
                                            class="far fa-search"></i></button>
                                </div>
                                <div class="nav-right-btn mt-2">
                                    <a href="application-form.html" class="theme-btn"><span
                                            class="fal fa-pencil"></span>Apply Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
        <!-- header area end -->

