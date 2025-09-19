<?php
get_header();?>

<main class="main">

 <!-- gallery-area -->
        <div class="gallery-area py-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mx-auto">
                        <div class="site-heading text-center">
                            <span class="site-title-tagline"><i class="far fa-book-open-reader"></i> Gallery</span>
                            <h2 class="site-title">Notre Gallery<span>d'images</span></h2>
                            <!-- <p>It is a long established fact that a reader will be distracted by the readable content of
                                a page when looking at its layout.</p> -->
                        </div>
                    </div>
                </div>
                <div class="row popup-gallery">
                    <div class="col-md-4 wow fadeInUp" data-wow-delay=".25s">
                         <?php
                            while (have_posts()) {
                                the_post(); ?>
                        <div class="gallery-item">
                            <div class="gallery-img">
                                 <img class="image" src="<?php 
                                    if (get_field('background_image')){
                                        $backgroundImage = get_field('background_image'); 
                                        echo $backgroundImage["url"];
                                    }
                                    else
                                        echo get_theme_file_uri('assets/img/slider/slider-1.jpg'); 
                                ?>" alt="" />
                            </div>
                            <div class="gallery-content">
                               <a class="popup-img gallery-link" href="<?php 
                                    if (get_field('background_image')){
                                        $backgroundImage = get_field('background_image'); 
                                        echo $backgroundImage["url"];
                                    }
                                    else
                                        echo get_theme_file_uri('assets/img/slider/slider-1.jpg'); 
                                ?>"><i
                                        class="fal fa-plus"></i></a>
                            </div>
                        </div>
                        <?php } wp_reset_postdata(); ?>
                 
                    </div>
                    <div class="col-md-4 wow fadeInUp" data-wow-delay=".50s">
                            <?php
                            while (have_posts()) {
                                the_post(); ?>
                        <div class="gallery-item">
                            <div class="gallery-img">
                                <img src="assets/img/gallery/03.jpg" alt="">
                            </div>
                            <div class="gallery-content">
                                <a class="popup-img gallery-link" href="assets/img/gallery/03.jpg"><i
                                        class="fal fa-plus"></i></a>
                            </div>
                        </div>
                           <?php } wp_reset_postdata(); ?>
                   
                    </div>
                    <div class="col-md-4 wow fadeInUp" data-wow-delay=".75s">
                        <div class="gallery-item">
                            <div class="gallery-img">
                                 <img class="image" src="<?php 
                                    if (get_field('background_image')){
                                        $backgroundImage = get_field('background_image'); 
                                        echo $backgroundImage["url"];
                                    }
                                    else
                                        echo get_theme_file_uri('assets/img/slider/slider-1.jpg'); 
                                ?>" alt="" />
                            </div>
                            <div class="gallery-content">
                           <a class="popup-img gallery-link" href="<?php 
                                    if (get_field('background_image')){
                                        $backgroundImage = get_field('background_image'); 
                                        echo $backgroundImage["url"];
                                    }
                                    else
                                        echo get_theme_file_uri('assets/img/slider/slider-1.jpg'); 
                                ?>"><i
                                        class="fal fa-plus"></i></a>
                            </div>
                        </div>
                        <div class="gallery-item">
                            <div class="gallery-img">
                                <img src="assets/img/gallery/06.jpg" alt="">
                            </div>
                            <div class="gallery-content">
                                <a class="popup-img gallery-link" href="assets/img/gallery/06.jpg"><i
                                        class="fal fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- gallery-area end -->




</main>

<?php
get_footer();?>