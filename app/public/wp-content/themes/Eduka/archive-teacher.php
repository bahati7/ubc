<?php
get_header();?>

<main class="main">
<!-- breadcrumb -->
       <div class="site-breadcrumb" style="background-image: url('<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/breadcrumb/02.jpg');">
            <div class="container">
                <h2 class="breadcrumb-title">Nos Enseignants</h2>
                <ul class="breadcrumb-menu">
                    <li> <a href="<?php   echo site_url(); ?>"> Acceuil </a></li>
                    <li class="active">Nos Enseignants</li>
                </ul>
            </div>
        </div>
 <!-- breadcrumb end -->

 <!-- team-area -->
        <div class="team-area py-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mx-auto">
                        <div class="site-heading text-center">
                            <span class="site-title-tagline"><i class="far fa-book-open-reader"></i> Nos Enseignants</span>
                           
                        </div>
                    </div>
                </div>
                <div class="row">
                            <?php
                            while (have_posts()) {
                                the_post(); ?>
                    <div class="col-md-6 col-lg-3">
                        <div class="team-item wow fadeInUp" data-wow-delay="1s">
                            <div class="team-img">
                                <img class="image" src="<?php 
                                        if (get_field('background_image')){
                                            $backgroundImage = get_field('background_image'); 
                                            echo $backgroundImage['url'];
                                        }
                                        else
                                            echo get_theme_file_uri('assets/img/course/01.png'); 
                                    ?>" alt="" />
                            </div>
                            <div class="team-social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-whatsapp"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#"><i class="fab fa-youtube"></i></a>
                            </div>
                            <div class="team-content">
                                <div class="team-bio">
                                    <h5><a href="#"><?php the_title()?></a></h5>
                                    <span><?php the_field('description')?></span>
                                </div>
                            </div>
                            <span class="team-social-btn"> <a href="<?php the_permalink()?>"><i class="far fa-share-nodes"></i></a></span>
                        </div>
                    </div>
                    <?php } wp_reset_postdata(); ?>
                </div>
            </div>
        </div>
        <!-- team-area end -->

</main>

 <?php
get_footer();?>