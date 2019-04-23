<?php get_header();?>
        <main class="cont-category" data-stellar-background-ratio="0.5">
            <div class="cooperation-slider full-width">
                <div class="owl-carousel">
                    <div class="slide-wrapper">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/slider/slide-1.JPG" alt="slide">
                    </div>
                    <div class="slide-wrapper">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/slider/slide-2.JPG" alt="slide">
                    </div>
                    <div class="slide-wrapper">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/slider/slide-3.JPG" alt="slide">
                    </div>
                    <div class="slide-wrapper">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/slider/slide-4.jpg" alt="slide">
                    </div>
                    <div class="slide-wrapper">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/slider/slide-5.jpg" alt="slide">
                    </div>
                    <div class="slide-wrapper">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/slider/slide-6.jpg" alt="slide">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row clearfix">
                    <div class="col-md-12">
                        <div class="category-heading">
                            <h1><?php single_cat_title(); ?></h1>
                            <?php echo category_description(); ?>
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-7 col-xs-7">
                        <div class="wrap-categories full-width">
                            <?php 
                            if ( have_posts() ) :  
                                while ( have_posts() ) : the_post(); 
                                ?>
                                    <div class="cont-post">
                                        <div class="miniature full-width">
                                            <?php the_post_thumbnail('' , array('class' => 'miniature') ); ?>
                                            <div class="more"></div>
                                        </div>
                                        <div class="date">
                                            <span class="day"><?php echo get_the_date('d'); ?></span>
                                            <span class="month"><?php echo get_the_date('M.'); ?></span>
                                        </div>
                                        <div class="post-info full-width">
                                            <a href="<?php the_permalink(); ?>"><h2 class="post-title"><?php the_title(); ?></h2></a>
                                            <?php the_excerpt(); ?>
                                            <a href="<?php the_permalink(); ?>" class="read-more">Читати далі</a>
                                        </div>
                                    </div>
                                <?php 
                                endwhile;
                            else : 
                            endif;  
                            ?>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-5 col-xs-5">
                        <?php get_sidebar();?>
                    </div>
                    <div class="col-md-12">
                        <div class="pagenavi-wrapper">
                            <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
                        </div>
                    </div>
                </div>
            </div>
        </main>
<?php get_footer(); ?>