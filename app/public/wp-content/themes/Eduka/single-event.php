<?php
get_header();?>

<main class="main">
<!-- breadcrumb -->
       <div class="site-breadcrumb" style="background-image: url('<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/breadcrumb/02.jpg');">
            <div class="container">
                <h2 class="breadcrumb-title">Nos Evénéments</h2>
                <ul class="breadcrumb-menu">
                    <li> <a href="<?php  echo get_post_type_archive_link('event') ?>"> Retour aux Evénéments </a></li>
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
                             <img class="image" src="<?php 
                                    if (get_field('background_image')){
                                        $backgroundImage = get_field('background_image'); 
                                        echo $backgroundImage["url"];
                                    }
                                    else
                                        echo get_theme_file_uri('assets/img/slider/slider-1.jpg'); 
                                ?>" alt="" />

                            <div class="my-4">
                                <h3 class="mb-2"><?php the_title(); ?></h3>
                                <p><?php the_content(); ?></p>
                            </div>

                      

                         

                         

                       

                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="widget event-single-info">
                            <h4 class="widget-title">Informations sur l'événement</h4>
                            <p>
                                <?php the_field('description');?>
                            </p>
                            <div class="event-content">
                                <div class="event-content-single">
                                    <h5><a href="#">Date de l'événement</a></h5>
                                    <?php 
                                        $end_date = get_field('end_date'); // get ACF value
                                        if ($end_date) {
                                            // Convert to DateTime (adjust format to your ACF return format)
                                            $date_obj = new DateTime($end_date);
                                            echo '<p><i class="far fa-calendar-alt"></i> Date: ' . esc_html($date_obj->format('F j, Y')) . '</p>';
                                        }
                                        ?>
                                </div>
                                <div class="event-content-single">
                                    <h5><a href="#">Heure de début</a></h5>
                                    <p><i class="far fa-clock"></i>  <?php the_field('event_time');?></p>
                                </div>
                                <div class="event-content-single">
                                    <h5><a href="#">Lieu de l'événement</a></h5>
                                    <p><i class="far fa-map-marker-alt"></i> <?php the_field('event_location');?></p>
                                </div>
                                <div class="event-content-single">
                                    <h5><a href="#">Prix de participation</a></h5>
                                    <p><i class="far fa-usd-circle"></i> 150</p>
                                </div>

                                
                            </div>
                        </div>
                        <div class="widget event-author">                          
                           
                            <div class="widget event-author">
                                <h4 class="widget-title">Organisateur de l'Evenement</h4>
                                <div class="event-author-info">
                                    <img src="<?php echo get_theme_file_uri("assets/img/logo/favicon.png")?>" alt="" />
                                    <h5>UBC-BUKAVU</h5>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- event single area end -->

</main>

<?php
get_footer();?>