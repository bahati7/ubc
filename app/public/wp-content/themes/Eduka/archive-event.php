<?php
get_header();
banner_image_setup( array(
                    'title' => 'Événements à venir',
                    'description' => "Nos Evénements",
                    'image' => get_theme_file_uri('assets/img/breadcrumb/02.jpg')
                ));
?>


  <!-- event area -->
        <div class="event-area py-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mx-auto">
                        <div class="site-heading text-center">
                            <span class="site-title-tagline"><i class="far fa-book-open-reader"></i> Evenements</span>
                            <h2 class="site-title">Nos <span>Evénements</span></h2>
                            
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php
                        while (have_posts()) {
                            the_post(); ?>
                    <div class="col-lg-4">
                        <div class="event-item">
                            <div class="event-location">
                                <span><i class="far fa-map-marker-alt"></i> <?php the_field('event_location')?></span>
                            </div>
                            <div class="event-img">
                                <img src="assets/img/event/06.jpg" alt="">
                            </div>
                            <div class="event-info">
                                <div class="event-meta">
                                     <?php 
                                        $end_date = get_field('end_date'); // get ACF value
                                        if ($end_date) {
                                            // Convert to DateTime (adjust format to your ACF return format)
                                            $date_obj = new DateTime($end_date);
                                            echo '<span><i class="far fa-calendar-alt"></i>: ' . esc_html($date_obj->format('M j, Y')) . '</span>';
                                        }
                                        ?>
                                    <!-- <span class="event-date"><i class="far fa-calendar-alt"></i>16 June, 2024</span> -->
                                    <span class="event-time"><i class="far fa-clock"></i><?php the_field('event_time');?></span>
                                </div>
                                <h4 class="event-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                <p><?php     
                                  if(has_excerpt()){
                                        echo get_the_excerpt();
                                    }
                                    else{
                                        echo wp_trim_words(get_the_content(), 20);
                                    }?>
                                    
                                <div class="event-btn">
                                    <a href="<?php the_permalink(); ?>" class="theme-btn">Join Event<i class="fas fa-arrow-right-long"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } wp_reset_postdata(); ?>
                </div>
             
            </div>
        </div>
        <!-- event area end -->
    


<?php
get_footer();
?>