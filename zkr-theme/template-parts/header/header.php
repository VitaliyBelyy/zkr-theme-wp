<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo('name');?></title>
    <?php wp_head(); ?>
    <script src="https://www.youtube.com/iframe_api"></script> 
</head>
<body>
    <header id="header">
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
        <div class="container">
            <div class="row clearfix">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="cont-logo full-width">
                        <h2>Mechatronic Guys
                            <i class="fa fa-cog fa-2x  cog-1" aria-hidden="true"></i>
                            <i class="fa fa-cog fa-spin cog-2" aria-hidden="true"></i>
                            <i class="fa fa-cog fa-spin cog-3" aria-hidden="true"></i>
                            <br><a href="http://zkrzntu.org.ua/">Запорізький коледж радіоелектроніки<br><span>ЗНТУ</span></a>
                        </h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-slider">
            <div class="owl-carousel">
                <?php 
                    $args = array(
                        'parent' => 0,
                        'hide_empty' => 0,
                        'exclude' => array('1'),
                        'number' => '0',
                        'taxonomy' => 'category', // таксономия, для которой нужны изображения
                        'pad_counts' => true
                    );
                    $categories = get_categories($args); // получаем все категории в виде массива

                    $term_taxonomy_string = '';
                    foreach ($categories as $category) {    // перебираем массив полученных категорий
                        $term_taxonomy_id = $category->term_taxonomy_id; // узнаем ID категории
                        $term_taxonomy_name = $category->name;// узнаем имя категории
                        $term_taxonomy_description = $category->description;    
                        $term_taxonomy_link = get_term_link((int)$term_taxonomy_id, 'category' );    // получаем ссылку на соответствующую рубрику
                                    
                        $term_taxonomy_string .= '<div class="slider-bl full-width">
                            <div class="slider-text">
                                <h2><a href="'.$term_taxonomy_link.'">'.$term_taxonomy_name.'</a></h2>
                                <p>'.$term_taxonomy_description.'</p>
                            </div> 
                        </div>'; // формируем полученные данные и записываем в строку
                    }

                    echo $term_taxonomy_string;    // выводим сформированную ранее строку - рубрики с изображениями
                ?>
            </div>
        </div>
    </header>