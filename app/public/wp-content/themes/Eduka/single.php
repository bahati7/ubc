<?php
get_header();?>

<main class="main">
<!-- breadcrumb -->
       <div class="site-breadcrumb" style="background-image: url('<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/breadcrumb/02.jpg');">
            <div class="container">
                <h2 class="breadcrumb-title">Nos Articles</h2>
                <ul class="breadcrumb-menu">
                    <li> <a href="<?php  echo get_post_type_archive_link('post') ?>"> Retour aux Articles </a></li>
                    <li class="active"><?php the_title(); ?></li>
                </ul>
            </div>
        </div>
 <!-- breadcrumb end -->

  <!-- blog single area -->
        <div class="blog-single-area pt-120 pb-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="blog-single-wrapper">
                            <div class="blog-single-content">
                                <div class="blog-thumb-img">
                                    <img src="<?php 
                                                if (get_field('background_image')){
                                                    $backgroundImage = get_field('background_image'); 
                                                    echo $backgroundImage["url"];
                                                }
                                                else
                                                    echo get_theme_file_uri('assets/img/slider/slider-1.jpg'); 
                                            ?>"  alt="thumb">
                                </div>
                                <div class="blog-info">
                                    <div class="blog-meta">
                                        <div class="blog-meta-left">
                                            <ul>
                                                <li><i class="far fa-user"></i><a href="#"> <?php echo get_the_author_meta('display_name', get_post_field('post_author', get_the_ID())); ?></a></li>
                                                <li><i class="far fa-comments"></i>3.2k Comments</li>
												<li><i class="far fa-thumbs-up"></i>1.4k Like</li>
                                            </ul>
                                        </div>
                                        <div class="blog-meta-right">
                                             <a href="#" class="share-link"><i class="far fa-share-alt"></i>Share</a>
                                        </div>
                                    </div>
                                    <div class="blog-details">
                                        <h3 class="blog-details-title mb-20"><?php the_title()?></h3>
                                        <p class="mb-10">
                                             <?php the_content()?>
                                        </p>
                                     
									

                                      
                                     
                                
                                    </div>
                                    <div class="blog-author">
                                        <div class="blog-author-img">
                                            <img src="<?php echo get_theme_file_uri('assets/img/about/ubc.jpg'); ?>" alt="">
                                        </div>
                                        <div class="author-info">
                                            <h6>Author</h6>
                                            <h3 class="author-name">
                                            <?php echo get_the_author_meta('display_name', get_post_field('post_author', get_the_ID())); ?>
                                            </h3>
                                            <p>It is a long established fact that a reader will be distracted by the abcd readable content of a page when looking at its layout  that more less.</p>
                                            <div class="author-social">
                                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                                <a href="#"><i class="fab fa-whatsapp"></i></a>
                                                <a href="#"><i class="fab fa-youtube"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="blog-comments">
                                    <h3>Comments (20)</h3>
                                    <div class="blog-comments-wrapper">
                                        <div class="blog-comments-single">
                                            <img src="assets/img/blog/com-1.jpg" alt="thumb">
                                            <div class="blog-comments-content">
                                                <h5>Kecia A. Parada</h5>
                                                <span><i class="far fa-clock"></i> June 18, 2024</span>
                                                <p>There are many variations of passages the majority have suffered in some injected humour or randomised words which don't look even slightly believable.</p>
                                                <a href="#"><i class="far fa-reply"></i> Reply</a>
                                            </div>
                                        </div>
                                        <div class="blog-comments-single blog-comments-reply">
                                            <img src="assets/img/blog/com-2.jpg" alt="thumb">
                                            <div class="blog-comments-content">
                                                <h5>Thomas A. Lindsey</h5>
                                                <span><i class="far fa-clock"></i> June 18, 2024</span>
                                                <p>There are many variations of passages the majority have suffered in some injected humour or randomised words which don't look even slightly believable.</p>
                                                <a href="#"><i class="far fa-reply"></i> Reply</a>
                                            </div>
                                        </div>
                                        <div class="blog-comments-single">
                                            <img src="assets/img/blog/com-3.jpg" alt="thumb">
                                            <div class="blog-comments-content">
                                                <h5>Mary R. Lujan</h5>
                                                <span><i class="far fa-clock"></i> June 18, 2024</span>
                                                <p>There are many variations of passages the majority have suffered in some injected humour or randomised words which don't look even slightly believable.</p>
                                                <a href="#"><i class="far fa-reply"></i> Reply</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="blog-comments-form">
                                        <h3>Leave A Comment</h3>
                                        <form action="#">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" placeholder="Your Name*">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input type="email" class="form-control" placeholder="Your Email*">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <textarea class="form-control" rows="5" placeholder="Your Comment*"></textarea>
                                                    </div>
                                                    <button type="submit" class="theme-btn">Post Comment <i class="far fa-paper-plane"></i></button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <aside class="sidebar">
                            <!-- search-->
                            <div class="widget search">
                                <h5 class="widget-title">Search</h5>
                                <form class="search-form">
                                    <input type="text" class="form-control" placeholder="Search Here...">
                                    <button type="submit"><i class="far fa-search"></i></button>
                                </form>
                            </div>
                            <!-- category -->
                            <div class="widget category">
                                <h5 class="widget-title">Category</h5>
                                <div class="category-list">
                                    <a href="#"><i class="far fa-arrow-right"></i>Online Courses<span>(10)</span></a>
                                    <a href="#"><i class="far fa-arrow-right"></i>Basic Knowledge<span>(15)</span></a>
                                    <a href="#"><i class="far fa-arrow-right"></i>Improve Your Skills<span>(20)</span></a>
                                    <a href="#"><i class="far fa-arrow-right"></i>Proffesionals Course<span>(30)</span></a>
                                    <a href="#"><i class="far fa-arrow-right"></i>Complete Course<span>(25)</span></a>
                                </div>
                            </div>
                            <!-- recent post -->
                            <div class="widget recent-post">
                                <h5 class="widget-title">Recent Post</h5>
                                <?php
                                    //$args query arguments
                                    $args = array(
                                            'post_type' => 'post',
                                            'posts_per_page' => 3
                                        );

                                    $query = new WP_Query($args);

                                    while($query->have_posts()){
                                        $query->the_post();  ?>

                                            <div class="recent-post-single">
                                                <div class="recent-post-img">
                                                    <img src="<?php 
                                                if (get_field('background_image')){
                                                    $backgroundImage = get_field('background_image'); 
                                                    echo $backgroundImage["url"];
                                                }
                                                else
                                                    echo get_theme_file_uri('assets/img/slider/slider-1.jpg'); 
                                            ?>" alt="thumb">
                                                </div>
                                                <div class="recent-post-bio">
                                                    <h6><a href="<?php the_permalink();?>"><?php the_title();?></a></h6>
                                                    <span><i class="far fa-clock"></i><?php the_time('M'); ?>,<?php the_time('d'); ?></span>
                                                </div>
                                            </div>
                                    <?php
                                    }
                                    wp_reset_query(); ?>
                            
                           
                              
                            </div>
                            <!-- social share -->
                            <div class="widget social-share">
                                <h5 class="widget-title">Follow Us</h5>
                                <div class="social-share-link">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="#"><i class="fab fa-dribbble"></i></a>
                                    <a href="#"><i class="fab fa-whatsapp"></i></a>
                                    <a href="#"><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                            <!-- Recent Post -->
                            <div class="widget sidebar-tag">
                                <h5 class="widget-title">Popular Tags</h5>
                                <div class="tag-list">
                                    <a href="#">Courses</a>
                                    <a href="#">Students</a>
                                    <a href="#">Tips</a>
                                    <a href="#">Academic</a>
                                    <a href="#">Study</a>
                                    <a href="#">Offer</a>
                                    <a href="#">Online</a>
                                    <a href="#">Knowledge</a>
                                </div>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
        <!-- blog single area end --> 




 </main>


<?php
get_footer();?>