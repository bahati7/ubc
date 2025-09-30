<?php
get_header();?>

<main class="main">
<!-- breadcrumb -->
       <div class="site-breadcrumb" style="background-image: url('<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/breadcrumb/02.jpg');">
            <div class="container">
                <h2 class="breadcrumb-title">Nos Départements</h2>
                <ul class="breadcrumb-menu">
                    <li> <a href="<?php   echo site_url(); ?>"> Acceuil </a></li>
                    <li class="active">Nos départements</li>
                </ul>
            </div>
        </div>
 <!-- breadcrumb end -->

  <!-- department area -->
        <div class="department-area py-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mx-auto">
                        <div class="site-heading text-center">
                            <span class="site-title-tagline"><i class="far fa-book-open-reader"></i> Nos Départments</span>
                         
                        </div>
                    </div>
                </div>
                <div class="row">
                     <?php
                            while (have_posts()) {
                                the_post(); ?>
        
                    <div class="col-lg-3">
                        <div class="department-item">
                            <div class="department-icon">
                                <img src="assets/img/icon/human.svg" alt="">
                            </div>
                            <div class="department-info">
                                <h4 class="department-title"><a href="#"><?php the_title(); ?></a></h4>
                                <p> <?php     
                                  if(has_excerpt()){
                                        echo get_the_excerpt();
                                    }
                                    else{
                                        echo wp_trim_words(get_the_content(), 10);
                                    }?>
                                </p>
                                <div class="department-btn">
                                    <a href="<?php the_permalink(); ?>">Lire plus<i class="fas fa-arrow-right-long"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } wp_reset_postdata(); ?>
                </div>
            </div>
        </div>
        <!-- department area end -->


</main>


 <?php
get_footer();
?>