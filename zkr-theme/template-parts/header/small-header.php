<!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/t-rex/t-rex.js"></script>  
        <title><?php bloginfo('name');?></title>
        <?php wp_head(); ?>
    </head>
    <body onkeydown="if(event.keyCode==32 || event.keyCode==38){return false}">
        <header  id="small-header">
            <div id="sidebar">
                <div class="author">
                    <i class="fa fa-cogs" aria-hidden="true"></i>
                    <h1 class="author-name">Білий Віталій</h1>
                    <h2>Студент ЗКР ЗНТУ <br> КС 13-1</h2>
                </div>
                <ul>
                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><i class="fa fa-home" aria-hidden="true"></i>Домашня сторінка</a></li>
                    <li><a href="<?php echo get_category_link( get_cat_ID('Дискусійний клуб') ); ?>"><i class="fa fa-users" aria-hidden="true"></i>Дискусійний клуб</a></li>
                    <li><a href="<?php echo get_category_link( get_cat_ID('Співпраця з підприємствами') ); ?>"><i class="fa fa-cog" aria-hidden="true"></i>Співпраця з підприємствами</a></li>
                    <li><a href="<?php echo get_category_link( get_cat_ID('Творча діяльність студентів') ); ?>"><i class="fa fa-paint-brush" aria-hidden="true"></i>Творча діяльність</a></li>
                    <li><a href="<?php echo get_category_link( get_cat_ID('Професійний розвиток') ); ?>"><i class="fa fa-book" aria-hidden="true"></i></i>Професійний розвиток</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>prezentation/"><i class="fa fa-object-group" aria-hidden="true"></i>Проекти</a></li>
                </ul>
                <div class="swipe-area">
                    <button id="sidebar-toggle">
                        <div class="bar"></div>
                        <div class="bar"></div>
                        <div class="bar"></div>
                    </button>
                </div>
            </div>
            <div class="cont-logo full-width clearfix">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <h2>Mechatronic Guys
                        <i class="fa fa-cog fa-2x  cog-1" aria-hidden="true"></i>
                        <i class="fa fa-cog fa-spin cog-2" aria-hidden="true"></i>
                        <i class="fa fa-cog fa-spin cog-3" aria-hidden="true"></i>
                    </h2>
                </a>
            </div>
        </header>