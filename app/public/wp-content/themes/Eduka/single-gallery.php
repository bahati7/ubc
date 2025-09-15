<?php
get_header();?>

<main class="main">
<!-- breadcrumb -->
       <div class="site-breadcrumb" style="background-image: url('<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/breadcrumb/02.jpg');">
            <div class="container">
                <h2 class="breadcrumb-title">Nos Images</h2>
                <ul class="breadcrumb-menu">
                    <li> <a href="<?php  echo get_post_type_archive_link('gallery') ?>"> Retour aux Images </a></li>
                    <li class="active"><?php the_title(); ?></li>
                </ul>
            </div>
        </div>
        <!-- breadcrumb end -->
     <!-- event single area -->
        <div class="event-single-area py-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="event-details">
                            

                            <div class="my-4">
                                <h3 class="mb-2"><?php the_title(); ?></h3>
                                <p> <img class="image" src="<?php 
                                    if (get_field('background_image')){
                                        $backgroundImage = get_field('background_image'); 
                                        echo $backgroundImage["url"];
                                    }
                                    else
                                        echo get_theme_file_uri('assets/img/slider/slider-1.jpg'); 
                                ?>" alt="" /></p>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="widget event-single-info">
                            <h4 class="widget-title">Détails sur l'image</h4>
                            <p>
                                <?php the_field('description');?>
                            </p>
             
                        </div>
                    
                    </div>
                </div>
            </div>
        </div>
        <!-- event single area end -->

</main>

<?php
get_footer();?>