
    <?php get_header();?>
        <main class="cont-single" data-stellar-background-ratio="0.5">
            <div class="container">
                <div class="row clearfix">
                    <div class="col-md-9 col-sm-8 col-xs-8">
                        <div class="post clearfix">
                            <?php 
                                while ( have_posts() ) : the_post(); 
                            ?>      <h3><?php echo get_the_date('d-m-Y');?></h3>
                                    <h1><?php the_title(); ?></h1>
                                    <?php the_content();?>
									<div class="hr"><span class="before"></span><span>КС 13-1</span><span class="after"></div>
                                    <h2><?php the_author(); ?></h2>
                            <?php 
                                endwhile; 
                            ?>  
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-4">
                        <?php get_sidebar();?>
                    </div>
                    <div class="col-md-12 col-xs-12 col-sm-12">
                        <div class="comment">
                            <?php comments_template();?>
                        </div>
                            <?php 
                                the_post_navigation( array(
                                    'prev_text' =>   '</span> <span class="nav-title">%title</span><span class="nav-title-icon-wrapper"><i class="fa fa-angle-left" aria-hidden="true"></i></span>',
                                    'next_text' =>   '</span> <span class="nav-title">%title</span><span class="nav-title-icon-wrapper"><i class="fa fa-angle-right" aria-hidden="true"></i></span>',
                                ) );
                            ?>
                    </div>
                </div>
            </div>
        </main>
<?php get_footer(); ?>