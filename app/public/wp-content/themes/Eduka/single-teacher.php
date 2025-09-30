<?php
get_header();?>

<main class="main">
<!-- breadcrumb -->
       <div class="site-breadcrumb" style="background-image: url('<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/breadcrumb/02.jpg');">
            <div class="container">
                <h2 class="breadcrumb-title">Nos Enseignants</h2>
                <ul class="breadcrumb-menu">
                    <li> <a href="<?php  echo get_post_type_archive_link('teacher') ?>"> Retour aux Enseignants </a></li>
                    <li class="active"><?php the_title(); ?></li>
                </ul>
            </div>
        </div>
 <!-- breadcrumb end -->

  <!-- team single -->
        <div class="team-single pt-120 pb-80">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-4">
                        <div class="team-single-img">
                                <img class="image" src="<?php 
                                        if (get_field('background_image')){
                                            $backgroundImage = get_field('background_image'); 
                                            echo $backgroundImage['url'];
                                        }
                                        else
                                            echo get_theme_file_uri('assets/img/course/01.png'); 
                                    ?>" alt="enseignants" />
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="team-details">
                            <h3><?php the_title()?></h3>
                            <strong>Senior Teacher</strong>
                            <p class="mt-3">
                                <?php the_content(); ?>
                            </p>
                            <div class="team-details-info">
                                <ul>
                                    <li><a href="#"><i class="far fa-location-dot"></i> 25/B Milford Road, New York</a></li>
                                    <li><a href="#"><i class="far fa-envelope"></i> <span class="__cf_email__" data-cfemail="73101201001c1d33160b121e031f165d101c1e">[email&#160;protected]</span></a></li>
                                    <li><a href="#"><i class="far fa-phone"></i> +2 123 456 7892</a></li>
                                </ul>
                            </div>
                            <div class="team-details-social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-whatsapp"></i></a>
                                <a href="#"><i class="fab fa-behance"></i></a>
                                <a href="#"><i class="fab fa-pinterest"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- team single end -->

</main>

<?php
get_footer();?>