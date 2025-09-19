<?php
get_header();?>

<main class="main">
<!-- breadcrumb -->
       <div class="site-breadcrumb" style="background-image: url('<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/breadcrumb/02.jpg');">
            <div class="container">
                <h2 class="breadcrumb-title">Nos Cours</h2>
                <ul class="breadcrumb-menu">
                    <li> <a href="<?php  echo get_post_type_archive_link('course') ?>"> Retour aux Cours </a></li>
                    <li class="active"><?php the_title(); ?></li>
                </ul>
            </div>
        </div>
 <!-- breadcrumb end -->

 <!-- course-single -->
        <div class="course-single-area py-120">
            <div class="container">
                <div class="course-single-wrapper">
                    <div class="row">
                        <div class="col-xl-8 col-lg-8">
                            <div class="course-details">
                                <div class="course-details-img mb-30">
                                    <img src="   <?php echo get_theme_file_uri('assets/img/course/01.png'); ?>" alt="thumb">
                                 
                                </div>
                                <div class="course-details">
                                    <h3 class="mb-20"><?php the_title(); ?></h3>
                                    <p class="mb-20">
                                      <?php the_content(); ?>
                                    </p>
   
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4">
                            <div class="course-single-sidebar">
                                <div class="widget">
                                    <h4 class="widget-title">Course Info</h4>
                                    <div class="course-single-info">
                                        <div class="single-info author">
                                            <div class="author-img">
                                                <img src=" <?php echo get_theme_file_uri('assets/img/course/teacher.jpg'); ?>" alt="#">
                                            </div>
                                            <div class="single-info-content">
                                                <h4>Teacher</h4>
                                                <span>Frank Mitchel</span>
                                            </div>
                                        </div>
                                        <div class="single-info category">
                                            <i class="far fa-bolt"></i>
                                            <div class="single-info-content">
                                                <h4>Category</h4>
                                                <span>Science & Engineering</span>
                                            </div>
                                        </div>
                                        <div class="single-info s-enroll">
                                            <i class="far fa-users"></i>
                                            <div class="single-info-content">
                                                <h4>Enrolled</h4>
                                                <span>50 Students</span>
                                            </div>
                                        </div>
                                        <div class="single-info rattings">
                                            <i class="far fa-clock"></i>
                                            <div class="single-info-content">
                                                <h4>Course Time</h4>
                                                <span>04 Years</span>
                                            </div>
                                        </div>
                                        <div class="single-info rattings">
                                            <i class="far fa-dollar"></i>
                                            <div class="single-info-content">
                                                <h4>Course Fees</h4>
                                                <span>$20,000</span>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="#" class="theme-btn">Enroll Now<i class="fas fa-arrow-right-long"></i></a>
                                </div>
                                <div class="widget">
                                    <h4 class="widget-title">Course Features</h4>
                                    <div class="course-feature-list">
                                        <a href="#"><i class="far fa-book-open"></i> Lectures <span>20</span></a>
                                        <a href="#"><i class="far fa-pencil"></i> Quizes <span>12</span></a>
                                        <a href="#"><i class="far fa-clock"></i> Duration <span>4 Years</span></a>
                                        <a href="#"><i class="far fa-globe"></i> Language <span>English</span></a>
                                        <a href="#"><i class="far fa-fill-drip"></i> Skill Level <span>Basic</span></a>
                                        <a href="#"><i class="far fa-location-dot"></i> Location <span>On
                                                Campus</span></a>
                                        <a href="#"><i class="far fa-users"></i> Students <span>90</span></a>
                                        <a href="#"><i class="far fa-graduation-cap"></i> Certificate
                                            <span>Yes</span></a>
                                        <a href="#"><i class="far fa-check-circle"></i> Assessments <span>Yes</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- course-single end-->

</main>


<?php
get_footer();?>