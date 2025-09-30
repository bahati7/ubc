<?php
get_header();?>

<main class="main">
<!-- breadcrumb -->
       <div class="site-breadcrumb" style="background-image: url('<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/breadcrumb/02.jpg');">
            <div class="container">
                <h2 class="breadcrumb-title">Nos Cours</h2>
                <ul class="breadcrumb-menu">
                    <li> <a href="<?php   echo site_url(); ?>"> Acceuil </a></li>
                    <li class="active">Nos cours</li>
                </ul>
            </div>
        </div>
 <!-- breadcrumb end -->

 <!-- course-area -->
        <div class="course-area py-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mx-auto">
                        <div class="site-heading text-center">
                            <span class="site-title-tagline"><i class="far fa-book-open-reader"></i> Nos Cours</span>
                            
                        </div>
                    </div>
                </div>
                <div class="row">                   
                        <?php
                            while (have_posts()) {
                                the_post(); ?>
                    <div class="col-md-6 col-lg-4">
                        <div class="course-item wow fadeInUp" data-wow-delay=".75s">
                            <div class="course-img">
                                <span class="course-tag"><i class="far fa-bookmark"></i> Finance</span>

                                 <img src="<?php echo get_theme_file_uri('assets/img/course/01.png'); ?> " alt="logo" />
                                <a href="<?php the_permalink(); ?>" class="btn"><i class="far fa-link"></i></a>
                            </div>
                            <div class="course-content">
                                <div class="course-meta">
                                    <span class="course-meta-left"><i class="far fa-book"></i> 10 Lessons</span>
                                    <div class="course-rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <span>(4.0)</span>
                                    </div>
                                </div>
                                <h4 class="course-title">
                                    <a href="#"><?php the_title(); ?></a>
                                </h4>
                                <p class="course-text">
                                 <?php     
                                  if(has_excerpt()){
                                        echo get_the_excerpt();
                                    }
                                    else{
                                        echo wp_trim_words(get_the_content(), 10);
                                    }?>
                                </p>
                                <div class="course-bottom">
                                    <div class="course-bottom-left">
                                        <span><i class="far fa-users"></i>75 Seats</span>
                                        <span><i class="far fa-clock"></i>04 Years</span>
                                    </div>
                                    <span class="course-price">$750</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } wp_reset_postdata(); ?>
                </div>
                <!-- pagination -->
                <div class="pagination-area">
                    <div aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true"><i class="far fa-arrow-left"></i></span>
                                </a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true"><i class="far fa-arrow-right"></i></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- pagination end -->
            </div>
        </div>
        <!-- course-area -->



<?php
get_footer();?>