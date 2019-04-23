<?php get_header();?>
<main class="front">
        <div class="services-cont full-width">
            <div class="container">
                <div class="row clearfix">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>prezentation/" class="service">
                            <div class="service-icon"><i class="fa fa-object-group fa-4x" aria-hidden="true"></i></i></div>
                            <h2 class="service-title">Проекти</h2>
                            <p>Проекти, де студенти реалізовують навички, отримані на етапах навчання, теоретичні та практичні засоби професійної діяльності відповідно до вимог стандартів вищої освіти.</p>
                            <span class="line"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-box">
            <div class="container">
                <div class="row clearfix">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="cont-text">
                            <h1>You Can't Stop <span>Progress</span></h1>
                            <p>The touch of technology</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="latest-projects" data-stellar-background-ratio="0.1">
            <div class="container">
                <div class="row clearfix">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="latest-title">
                            <h1>Останні записи</h1>
                        </div>
                    </div>
                    <?php
                    if ( have_posts() ) : 
                        query_posts('showposts=6');
                        while ( have_posts() ) : the_post(); 
                        ?>
                            <div class="col-md-4 col-sm-4 col-xs-6">
                                <div class="cont-project full-width">
                                    <div class="miniature full-width">
                                        <?php the_post_thumbnail('' , array('class' => 'miniature') ); ?>
                                        <div class="more">
                                            <a href="<?php the_permalink();?>"><i class="fa fa-eye fa-3x" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <div class="project-info full-width">
                                        <a href="<?php the_permalink();?>"><h2 class="project-title"><?php the_title();?></h2></a>
                                        <h3 class="category"><?php the_category(); ?></h3>
                                    </div>
                                </div>
                            </div>
                        <?php 
                        endwhile;
                    else : 
                    endif; 
                    wp_reset_query(); 
                    ?>
                </div>
            </div>
        </div>
        <div class="cont-video full-width">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="video-info">
                            <a href="#win3" id="play"></a>
                            <h1>Мехатроніка – комп’ютеризація, програмування та інтернетизація управління виробництвом.</h1>
                        </div>
                        <a href="#x" class="overlay" id="win3"></a>
                        <div class="popup">
                            <div class="video">
                            <iframe id="my-video" width="853" height="480" src="https://www.youtube.com/embed/V9Z788NASe8?enablejsapi=1" frameborder="0" allowfullscreen ></iframe>
                            </div>
                            <a id="close" title="Закрыть" href="#x"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="recent-posts" data-stellar-background-ratio="0.1">
            <div class="container">
                <div class="row clearfix">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="recent-title">
                            <h1><?php echo get_cat_name( get_cat_ID("Співпраця з підприємствами") ) ?></h1>
                            <?php echo category_description( get_cat_ID("Співпраця з підприємствами") ); ?>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="recent-slider full-width">
                            <div class="owl-carousel">
                                <?php
                                if ( have_posts() ) : 
                                    query_posts( 'cat='.get_cat_ID("Співпраця з підприємствами") );
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
                                wp_reset_query(); 
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="wallpapers full-width" data-stellar-background-ratio="0.5" data-stellar-vertical-offset="50">
            <a href="http://zkrzntu.org.ua/" class="gerb"></a>
        </div>
    </main>
    <?php get_footer();?>