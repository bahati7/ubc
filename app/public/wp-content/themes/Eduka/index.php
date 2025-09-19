<?php
get_header();?>

<main class="main">
<!-- breadcrumb -->
       <div class="site-breadcrumb" style="background-image: url('<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/breadcrumb/02.jpg');">
            <div class="container">
                <h2 class="breadcrumb-title">Nos Articles</h2>
                <ul class="breadcrumb-menu">
                    <li> <a href="<?php   echo site_url(); ?>"> Acceuil </a></li>
                    <li class="active">Nos articles</li>
                </ul>
            </div>
        </div>
 <!-- breadcrumb end -->

   <!-- blog area -->
        <div class="blog-area py-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mx-auto">
                        <div class="site-heading text-center">
                            <span class="site-title-tagline"><i class="far fa-book-open-reader"></i> Notre Blog</span>
                            <h2 class="site-title">Dernière Actualité & <span>Blog</span></h2>
                            <p>Retrouvez ici nos dernières nouvelles et actualités pour rester informé(e) de tout ce qui concerne la vie académique et les sujets connexes</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                   
                     <?php
                            while (have_posts()) {
                                the_post(); ?>
                 
                   
                    <div class="col-md-6 col-lg-4">
                        <div class="blog-item wow fadeInUp" data-wow-delay=".75s">
                            <div class="blog-date"><i class="fal fa-calendar-alt"></i> <?php the_time('M'); ?>,<?php the_time('d'); ?></div>
                            <div class="blog-item-img">
                                <img src="<?php 
                                                if (get_field('background_image')){
                                                    $backgroundImage = get_field('background_image'); 
                                                    echo $backgroundImage["url"];
                                                }
                                                else
                                                    echo get_theme_file_uri('assets/img/slider/slider-1.jpg'); 
                                            ?>" alt="Thumb">
                            </div>
                            <div class="blog-item-info">
                                <div class="blog-item-meta">
                                    <ul>
                                        <li><a href="#"><i class="far fa-user-circle"></i> <?php the_author_posts_link(); ?></a></li>
                                        <li><a href="#"><i class="far fa-comments"></i> 03 Comments</a></li>
                                    </ul>
                                </div>
                                <h4 class="blog-title">
                                    <a href="blog-single.html"><?php the_title(); ?></a>
                                </h4>
                                    <p><?php echo wp_trim_words(get_the_content(), 10); ?></p>
                                            <a class="theme-btn" href="<?php the_permalink()?>">Read More<i
                                                    class="fas fa-arrow-right-long"></i></a>
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
        <!-- blog area end -->

</main>


 <?php
get_footer();
?>