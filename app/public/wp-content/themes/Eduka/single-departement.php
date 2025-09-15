<?php
get_header();?>

<main class="main">
<!-- breadcrumb -->
       <div class="site-breadcrumb" style="background-image: url('<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/breadcrumb/02.jpg');">
            <div class="container">
                <h2 class="breadcrumb-title">Nos Départements</h2>
                <ul class="breadcrumb-menu">
                    <li> <a href="<?php  echo get_post_type_archive_link('departement') ?>"> Retour aux Départements </a></li>
                    <li class="active"><?php the_title(); ?></li>
                </ul>
            </div>
        </div>
 <!-- breadcrumb end -->


  <!-- department-single -->
        <div class="department-single-area py-120">
            <div class="container">
                <div class="department-single-wrapper">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4">
                            <!-- sidebar -->
                            <?php get_template_part('template-parts/side'); ?>
                            <!-- sidebar end -->
                        </div>
                        <div class="col-xl-8 col-lg-8">
                            <div class="department-details">
                                <div class="department-details-img mb-30">
                                    
                                 <img src="<?php echo get_theme_file_uri('assets/img/about/ac.jpg'); ?> " alt="thumb" />
                                </div>
                                <div class="department-details">
                                    <h3 class="mb-20"><?php the_title()?></h3>
                                    <p class="mb-20">
                                       <?php the_content()?>
                                    </p>
  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- department-single end-->


</main>

<?php
get_footer();?>